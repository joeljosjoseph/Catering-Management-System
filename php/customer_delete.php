<?php
require_once('connection.php');
session_start();

$username=$_SESSION['cust_user'];

$delete_account = "UPDATE login SET status = 'InActive' where username = '$username'";
$delete1 = mysqli_query($conn,$delete_account);

if($delete1)
{
    echo "Account Deleted"; 
    session_destroy();
    header("Location: ../signIn.php");
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>