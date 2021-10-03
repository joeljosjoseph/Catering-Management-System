<?php
require_once('connection.php');
session_start();


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
    $feedback = mysqli_real_escape_string($conn,$_POST['feedback']);
    
  }
  $order_id = $_SESSION['order_id'];

  
  $sql_insert_feedback="INSERT INTO feedback (order_id,feedback_det) VALUES ('$order_id', '$feedback')";
  
  $sql_get_feedback="SELECT feedback_id FROM feedback WHERE order_id='$order_id'";

  if(mysqli_num_rows(mysqli_query($conn,$sql_get_feedback)))
  {
    //Check if feedback already exists
    $_SESSION['Error'] = "Feedback has already been given!";
    header("Location: ../feedback.php");
    exit;
  }

  else
  {
    if(mysqli_query($conn,$sql_insert_feedback))
    {
      $_SESSION['Success'] = "Thamk You for your Feedback";
      header("Location: ../feedback.php");
      exit;    
    }

    else
    {
        echo mysqli_error($conn);
    }
  }
    
  mysqli_close($conn);
?>