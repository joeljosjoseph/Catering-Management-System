<?php
require_once('connection.php');
session_start();

$item_id = mysqli_real_escape_string($conn,$_GET['item_id']);

$delete_item = "DELETE FROM menuchild where item_id = '$item_id'";
$delete2 = mysqli_query($conn,$delete_item);

if($delete2)
{
    $_SESSION['itemremove'] = "Item Removed From Cart";
    header("location: ../cart.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>