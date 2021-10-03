<?php
require_once('Connection.php');
session_start();


$username= $password="";
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=test_input($_POST["email"]);
    $password=test_input($_POST["password"]);
  }


  $sql_login_check="SELECT * FROM login WHERE username='$username'";

  if(empty(mysqli_fetch_array(mysqli_query($conn,$sql_login_check))))
  {
    $_SESSION['nouser'] = "User does not Exist!!";
    header("location: ../signIn.php");
    exit;
  }
 
 
  while($row=mysqli_fetch_assoc(mysqli_query($conn,$sql_login_check)))
  {
    if($username==$row['username'] && $password==$row['password'] && $row['user_type'] == 'customer' && $row['status'] == 'InActive')
    {
      $_SESSION['nouser'] = "User does not Exist!!";
      header("location: ../signIn.php");
      exit;
    }
    else if($username==$row['username'] && $password==$row['password'] && $row['user_type'] == 'customer' && $row['status'] == 'Active')
    {
        $_SESSION['loggedin'] = "Successfully Logged In";
        $query = "SELECT * FROM customer WHERE username = '$username'";
        $query_ = mysqli_query($conn,$query);
        $query_exe = mysqli_fetch_assoc($query_);
        $_SESSION['cust_id'] = $query_exe['cust_id'];
        $_SESSION['cust_user']=$row['username'];
        header("location: ../customer.php");
        
        
        exit;
    }
      else if($row['username'] == $username && $row['password'] == $password && $row['user_type'] == 'admin'){
      $_SESSION['aloggedin'] = "Successfully Logged In";
      header("location: ../admin.php");
      $_SESSION['cust_user']=$row['username'];

      exit;
  }

    else
    {
        $_SESSION['incorrect'] = "Incorrect Username Or Password!";
        header("location: ../signIn.php");
        exit;
    }
  }