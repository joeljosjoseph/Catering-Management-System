<?php
require_once('connection.php');
session_start();



$item_id = $_SESSION['item_id'];

// function to trim data

function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Retrieving data from wepage

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    
    $item_name=test_input($_POST["itemname"]);
    $price=test_input($_POST["price"]);
    $description=test_input($_POST["description"]);
    
  }

      // Update item table

      $sql_update_item="UPDATE item SET item_name='$item_name',price='$price',description='$description' WHERE item_id='$item_id'";

      $sql_exe_item=mysqli_query($conn,$sql_update_item);

 
      if($sql_exe_item)
      {
        $_SESSION['updateditem'] = "Successfully Updated Item";
        header("location:../admin.php");

      }
      else
      {
          // Display error

          echo "mysqli_error($conn)";
      }