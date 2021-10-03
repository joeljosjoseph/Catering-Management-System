<?php
require_once('connection.php');
session_start();

$username = mysqli_real_escape_string($conn,$_GET['username']);

$delete_account = "UPDATE login SET status = 'InActive' where username = '$username'";
$delete1 = mysqli_query($conn,$delete_account);

if($delete1)
{
    $_SESSION['userdeact'] = "Customer Acitvated.";
    header("location: ../admin.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>