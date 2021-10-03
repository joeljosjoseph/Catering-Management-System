<?php
require_once('connection.php');
session_start();

$item_id=$cust_id=$menumaster_id='';

if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
$username=$_SESSION['cust_user'];


    $sql_get_cust_id="SELECT cust_id FROM customer WHERE username='$username'";
    $sql_get_cust_id_exe = mysqli_query($conn,$sql_get_cust_id);
    $sql_get_cust_id_1 = mysqli_fetch_assoc($sql_get_cust_id_exe);
    $cust_id = $sql_get_cust_id_1['cust_id'];
    

    $sql_get_mm_id="SELECT menumaster_id FROM menumaster WHERE cust_id='$cust_id' AND menumaster_status='Active'";
    $sql_get_mm_id_exe = mysqli_query($conn,$sql_get_mm_id);
    $sql_get_mm_id_1 = mysqli_fetch_assoc($sql_get_mm_id_exe);['menumaster_id'];
    $menumaster_id = $sql_get_mm_id_1['menumaster_id'];

    
  

if(!empty($_GET['item_id']))   {

    $item_id = mysqli_real_escape_string($conn,$_GET['item_id']);
    $sql_get_item="SELECT item_id FROM menuchild WHERE item_id='$item_id' AND menumaster_id='$menumaster_id'";

    if(mysqli_num_rows(mysqli_query($conn,$sql_get_item)))
    {
        //Check if item already exists
        $_SESSION['itemexists'] = "Item Already Exists in Cart!";
        header("location: cart.php");
        exit;
    }
    else 
    {

        $sql_insert_item = "INSERT INTO menuchild (menumaster_id,item_id) VALUES ('$menumaster_id ', '$item_id')";
        if(mysqli_query($conn,$sql_insert_item))
        {
            $_SESSION['itemadded'] = "Item Added to Cart";
            header("location: cart.php");
            exit;
        }
        else    {
            echo mysqli_error($conn);
        }
    }
        
}



   
    ?>