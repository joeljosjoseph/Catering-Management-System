<?php
require_once('connection.php');
session_start();

// Declare Variables

$subcat_name ="";
$cat_id = mysqli_real_escape_string($conn,$_GET['cat_id']);


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
    $subcat_name=test_input($_POST["subcat_name"]);
  }
    
    $sql_insert_subcat="INSERT INTO sub_category (subcategory_name,category_id,subcat_status) VALUES ('$subcat_name','$cat_id','Active')";

    $sql_get_subcat="SELECT subcategory_id FROM sub_category WHERE subcategory_name='$subcat_name'";

    if(mysqli_num_rows(mysqli_query($conn,$sql_get_subcat)))
    {
    //Check if user already exists
    $_SESSION['subcatexists'] = "Subcategory Already Exists";
    exit;
    }

    else
    {
    if(mysqli_query($conn,$sql_insert_subcat))
    {
            
          $_SESSION['subcatadded'] = "Successfully Added Subcategory ";
          header("location: ../admin.php");
            
    }

    else
    {
          echo mysqli_error($conn);
    }

  }