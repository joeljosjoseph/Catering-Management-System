<?php
require_once('connection.php');
session_start();

$username = mysqli_real_escape_string($conn,$_GET['username']);

$activate_account = "UPDATE login SET status = 'Active' where username = '$username'";
$activate1 = mysqli_query($conn,$activate_account);

if($activate1)
{
    $_SESSION['useract'] = "Customer Deactivated.";
    header("location: ../admin.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>