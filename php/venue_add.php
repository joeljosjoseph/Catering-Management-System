<?php
require_once('connection.php');
session_start();

$mm_id = mysqli_real_escape_string($conn,$_GET['mm_id']);

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
    $district=test_input($_POST["v_district"]);   
    $street=test_input($_POST["v_street"]);
    $pincode=test_input($_POST["v_pincode"]);
    $time=test_input($_POST["v_time"]);
    $date=test_input($_POST["v_date"]);
  }
  // $cat_name='0';
  // $subcat_name='1';

  $sql_venue_ = "UPDATE menumaster SET v_district = '$district' , v_street = '$street' , v_pincode = '$pincode' , v_time = '$time' , v_date = '$date' WHERE menumaster_id = '$mm_id'"; 

  $sql_venue_add = mysqli_query($conn,$sql_venue_);



 
  if($sql_venue_add)
  {
    $_SESSION['venueadd'] = "Venue added";
    header("location: ../checkout.php");

  }
  else
  {
      // Display error

      echo "mysqli_error($conn)";
  }
  
  mysqli_close($conn);
?>