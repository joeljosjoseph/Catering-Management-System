<?php
require_once('connection.php');
session_start();

// Declare Variables

$username= $firstname= $middlename= $lastname= $phone= $building= $street= $district= $pincode= $password="";


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
    $firstname=test_input($_POST["firstname"]);
    $middlename=test_input($_POST["middlename"]);
    $lastname=test_input($_POST["lastname"]);
    $username=test_input($_POST["email"]);
    $phone=test_input($_POST["phone"]);
    $building=test_input($_POST["building"]);
    $street=test_input($_POST["street"]);
    $district=test_input($_POST["district"]);
    $pincode=test_input($_POST["pincode"]);
    $password=test_input($_POST["password"]);
    
  }

  // Password confirmation

  if($password!==$_POST["passwordConfirmation"])
  {
      $_SESSION['passwordmis'] = "Passwords does not match";
      header("Location: ../signUp.php");
      exit;
  }

  // Inserting values into table login and customer

  $sql_insert_login="INSERT INTO login (username, password, user_type, status) VALUES ('$username', '$password', 'customer', 'Active')";

  $sql_insert_customer="INSERT INTO customer (username,c_fName,c_mname,c_lname,c_phno,c_bno,c_street,c_district,c_pincode) VALUES ('$username', '$firstname', '$middlename', '$lastname', '$phone', '$building', '$street', '$district', '$pincode')";

  
  $sql_get_login="SELECT username FROM login WHERE username='$username'";

  if(mysqli_num_rows(mysqli_query($conn,$sql_get_login)))
  {
    //Check if user already exists
    $_SESSION['userexists'] = "User Already Exists";
    header("Location: ../signUp.php");

    exit;
  }

  else
  {
    if(mysqli_query($conn,$sql_insert_login))
    {

        if(mysqli_query($conn,$sql_insert_customer))
        {
           
            $_SESSION['cust_user']=$username;
            
        }

        else
        {
            echo mysqli_error($conn);
        }
    }
    

    $sql_get_cust_id="SELECT cust_id FROM customer WHERE username='$username'";
    $sql_get_cust_id_exe = mysqli_query($conn,$sql_get_cust_id);
    $sql_get_cust_id1 = mysqli_fetch_assoc($sql_get_cust_id_exe);
    $cust_id = $sql_get_cust_id1['cust_id'];

    $sql_insert_menumaster="INSERT INTO menumaster (cust_id,menumaster_status) VALUES ('$cust_id','Active')";

    if(mysqli_query($conn,$sql_insert_menumaster))
    {
      $_SESSION['signedup'] = "Registered Successfully";
      header("Location: ../customer.php");
    }
    else{
      echo mysqli_error($conn);
    }
  }
  mysqli_close($conn);
?>