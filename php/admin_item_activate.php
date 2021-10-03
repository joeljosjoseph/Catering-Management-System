<?php
require_once('connection.php');
session_start();

$item_id = mysqli_real_escape_string($conn,$_GET['item_id']);
$subcat_id = $_SESSION['subcat_id'];

$fetch_subcat = "SELECT subcat_status FROM sub_category WHERE subcategory_id='$subcat_id'";
$subcat_1 = mysqli_query($conn,$fetch_subcat);
$subcat_2 = mysqli_fetch_assoc($subcat_1);



if($subcat_2['subcat_status'] == 'Active')
{
    $activate_item = "UPDATE item SET item_status = 'Active' where item_id = '$item_id'";
    $activate = mysqli_query($conn,$activate_item); 
    $_SESSION['itemact'] = "Item Activated";
    header("refresh:1; url=../admin.php");
}
else if($subcat_2['subcat_status'] == 'InActive')   {
    $_SESSION['subcatinact'] = "Unable to Activate item : Subcategory is Inactive!!";
    header("location: ../admin.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>