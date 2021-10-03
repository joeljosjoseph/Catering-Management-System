<?php
require_once('connection.php');
session_start();

$query = "SELECT * FROM orders";
$query_ = mysqli_query($conn,$query);
$date = date('Y-m-d');

while($row = $query_->fetch_assoc())
{
    $mm_id = $row['menumaster_id'];
    $query1 = "SELECT * FROM menumaster WHERE menumaster_id = '$mm_id'";
    $query1_ = mysqli_query($conn,$query1);
    $query1__ = mysqli_fetch_assoc($query1_);
    $v_date = $query1__['v_date'];
    if($query1__)
    {
        if($v_date < $date)
        {
            $query3 = "UPDATE orders SET order_status = 'Delivered' WHERE menumaster_id = '$mm_id'";
            $query3_ = mysqli_query($conn,$query3);       
        }
    }
}
mysqli_close($conn)
?>