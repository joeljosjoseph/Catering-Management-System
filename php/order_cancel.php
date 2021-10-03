<?php
require_once('connection.php');
session_start();

$order_id = $_SESSION['order_id'];

$cancel_order= "UPDATE orders SET order_status = 'Cancelled' where order_id = '$order_id'";
$cancel = mysqli_query($conn,$cancel_order);

$refund_ = "UPDATE payment SET payment_status = 'Refunded' WHERE order_id = '$order_id'";
$refund = mysqli_query($conn,$refund_);
if($cancel)
{
    if($refund)
    {
            $_SESSION['ordercancel'] = "Order Cancelled";
            header("location: ../orders.php");
    }
    else
    {
        echo mysqli_error($conn);
    }
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>