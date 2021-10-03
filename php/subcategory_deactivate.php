<?php
require_once('connection.php');
session_start();

$subcat_id = mysqli_real_escape_string($conn,$_GET['subcat_id']);

$deactivate_subcat = "UPDATE sub_category SET subcat_status = 'InActive' WHERE subcategory_id = '$subcat_id'";
$deactivate1 = mysqli_query($conn,$deactivate_subcat);

if($deactivate1)
{   $get_item = "SELECT * FROM item WHERE subcategory_id";
    $get_item_exe=mysqli_query($conn,$get_item);
    
    while($row=mysqli_fetch_assoc($get_item_exe))
    {        
        $update_item = "UPDATE item SET item_status = 'InActive' WHERE subcategory_id = '$subcat_id'";
        $update = mysqli_query($conn,$update_item);
    }

    $_SESSION['subcatdeact'] = "Subcategory Deactivated";
    header("location: ../admin.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>