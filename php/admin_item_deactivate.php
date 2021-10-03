<?php
require_once('connection.php');
session_start();

$item_id = mysqli_real_escape_string($conn,$_GET['item_id']);

$deactivate_item = "UPDATE item SET item_status = 'InActive' where item_id = '$item_id'";
$deactivate = mysqli_query($conn,$deactivate_item);

if($deactivate)
{
    $_SESSION['itemdeact'] = "Item Deactivated";
    header("location:../admin.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>