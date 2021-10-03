<?php 
// Include the database config file 
require_once('connection.php'); 
session_start();

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

// debug_to_console("abc");

$cust_id = $_SESSION['cust_id'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];


if(!empty($quantity) && !empty($total))  { 
    
    $total_amt = $total * $quantity;
    

    $query = "UPDATE menumaster SET quantity = '$quantity' , tot_amount = '$total_amt' WHERE cust_id = '$cust_id'" ;
    $result = mysqli_query($conn,$query); 

    if($result){ 

        
            // debug_to_console($total);
            echo '<p type="text" name="total" id="total" style="max-width: 90px;"><strong>Rs: '.htmlspecialchars($total_amt).'</strong></p>'; 
            
        } 
    // }else{ 
    //     // echo "mysqli_error($conn)";
    // } 
//     debug_to_console($total_amt);
//     debug_to_console($cust_id);
//     debug_to_console($result);
}

?>

