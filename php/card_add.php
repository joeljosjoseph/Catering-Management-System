<?php
require_once('connection.php');
session_start();

$cust_id = $_SESSION['cust_id'];
// Function to trim input data

function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Retrieve input data from webpage

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $cno=test_input($_POST["c_number"]);
    $bname=test_input($_POST["c_bname"]);
    $type=test_input($_POST["c_type"]);
    $expiry=test_input($_POST["c_expiry"]);
  }
  // $cat_name='0';
  // $subcat_name='1';

  $sql_card_ = "INSERT INTO card (cust_id,card_number,bank_name,card_type,expiry) VALUES ('$cust_id','$cno','$bname','$type','$expiry')"; 

  $sql_card_add = mysqli_query($conn,$sql_card_);



 
  if($sql_card_add)
  {
    $_SESSION['cardadd'] = "Card Added Successfully";
    header("location: ../checkout.php");
    exit;

  }
  else
  {
      // Display error

      echo mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>