<?php
require_once('connection.php');
session_start();

$mm_id = $_SESSION['menumaster_id'];
$cust_id = $_SESSION['cust_id'];

$query = "SELECT * FROM menumaster WHERE menumaster_id = '$mm_id'";
$result_ = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($result_);

$query1 = "SELECT * FROM card WHERE cust_id = '$cust_id'";
$result1_ = mysqli_query($conn,$query1);
$result1 = mysqli_fetch_assoc($result1_);

if($result['v_street'] == NULL )    {
    $_SESSION['venuenull'] = "Provide Venue Details";
    header("location: ../checkout.php");
}
else if(empty($result1))    {
    $_SESSION['cardnull'] = "Provide Card Details";
    header("location: ../checkout.php");
}

else    {
    $date = date('Y-m-d');
    $sql_insert_order="INSERT INTO orders (menumaster_id,order_date,order_status) VALUES ('$mm_id','$date','Ordered')";

    if(mysqli_query($conn,$sql_insert_order))
    {
        $query2 = "SELECT * FROM orders WHERE menumaster_id = '$mm_id'";
        $result2_ = mysqli_query($conn,$query2);
        $result2 = mysqli_fetch_assoc($result2_);
        $order_id = $result2['order_id'];

        $query3 = "SELECT * FROM card WHERE cust_id = '$cust_id'";
        $result3_ = mysqli_query($conn,$query3);
        $result3 = mysqli_fetch_assoc($result3_);
        $card_id = $result3['card_id'];

        $sql_insert_payment = "INSERT INTO payment (order_id,card_id,payment_status) VALUES ('$order_id','$card_id','Paid')";

        if(mysqli_query($conn,$sql_insert_payment)) {

            $sql_update_mm_ = "UPDATE menumaster SET menumaster_status = 'InActive' WHERE menumaster_id = '$mm_id'"; 
            $sql_update_mm = mysqli_query($conn,$sql_update_mm_);

            $sql_insert_mm = "INSERT INTO menumaster (cust_id,menumaster_status) VALUES ('$cust_id','Active')";

            if($sql_update_mm)  {
                if(mysqli_query($conn,$sql_insert_mm))  {

                $_SESSION['ordered'] = "Order Placed Successfully";
                header("location: ../orders.php");
                }
                else    {
                    echo "mysqli_error($conn)";
                }
            }
            else    {
                echo "mysqli_error($conn)";
            }
            
        }
        else    {
            echo "mysqli_error($conn)";
        }
    }
    else    {
        echo "mysqli_error($conn)";
    }

}


mysqli_close($conn);
?>