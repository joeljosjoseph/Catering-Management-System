<?php
require_once('connection.php');
session_start();


$username= $firstname= $middlename= $lastname= $phone= $housename= $street= $district= $zip= $password="";
$username=$_SESSION['cust_user'];
function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $firstname=test_input($_POST["firstname"]);
    $middlename=test_input($_POST["middlename"]);
    $lastname=test_input($_POST["lastname"]);
    $phone=test_input($_POST["phone"]);
    $housename=test_input($_POST["building"]);
    $street=test_input($_POST["street"]);
    $district=test_input($_POST["district"]);
    $zip=test_input($_POST["pincode"]);
    $newpassword=test_input($_POST["newpassword"]);
  }

  $query = "SELECT * FROM customer WHERE username = '$username'";
  $query_ = mysqli_query($conn,$query);
  $query__ = mysqli_fetch_assoc($query_);
  $cust_id = $query__['cust_id'];

  $query1 = "SELECT * FROM login WHERE username = '$username'";
  $query1_ = mysqli_query($conn,$query1);
  $query1__ = mysqli_fetch_assoc($query1_);
  $password = $query1__['password'];

  $sql_update_customer="UPDATE customer SET username='$username',c_fname='$firstname',c_mname='$middlename',c_lname='$lastname',c_phno='$phone',c_bno='$housename',c_street='$street',c_district='$district',c_pincode='$zip' WHERE username='$username'";
  
  if($_POST['oldpassword'] == $password)
  {
    if($_POST["newpassword"] == $_POST["newpassword1"])
    {
        $sql_update_login = "UPDATE login SET password = '$newpassword' WHERE cust_id = '$cust_id'";
        $sql_exe_login = mysqli_query($conn,$sql_update_login);
        if($sql_exe_login)
        {
          $_SESSION['passchanged'] = "Password Changed";
        }
    }
    else
    {
      $_SESSION['passmis'] = "Password Mismatch";
    }
    
  }
  else
  {
    $_SESSION['oldpasswrong'] = "Current Password and provided passwords does not match";
  }

  $sql_exe_customer=mysqli_query($conn,$sql_update_customer);



 
    if($sql_exe_customer)
    {
       $_SESSION['updated'] = "Successfully Updated Details";
       header("location: ../customer.php");

    }
 

  mysqli_close($conn);
?>