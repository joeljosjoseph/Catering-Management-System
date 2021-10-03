<?php
require_once('Connection.php');
session_start();

$cust_id = $_SESSION;
if($cust_id == NULL)
{
    header("refresh:1; url=../signIn.php");
}
else
{
    header("refresh:0; url=../customer.php");
}

mysqli_close($conn);
?>