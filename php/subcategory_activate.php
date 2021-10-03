<?php
require_once('connection.php');
session_start();

$subcat_id = mysqli_real_escape_string($conn,$_GET['subcat_id']);

$activate_subcat = "UPDATE sub_category SET subcat_status = 'Active' where subcategory_id = '$subcat_id'";
$activate1 = mysqli_query($conn,$activate_subcat);

if($activate1)
{
    $_SESSION['subcatact'] = "Subcategory Activated.";
    header("location: ../admin.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>