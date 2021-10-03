<?php
require_once('connection.php');
session_start();

// if($_SESSION['username']==NULL){
//   // Haven't log in
//   echo "You haven't log in";
//   header("Location: mp_SignIn.php");
// }



  $username=$_SESSION['cust_user'];

  $sql_login="SELECT * FROM login WHERE username='$username'";

  $sql_login_execute=mysqli_query($conn,$sql_login);

  $sql_fetch="SELECT * FROM customer WHERE username='$username'";

  $sql_fetch_details=mysqli_query($conn,$sql_fetch);

  $sql_fetch_2=mysqli_fetch_assoc($sql_fetch_details);

  while($row=mysqli_fetch_assoc($sql_login_execute))
  {         
        $_SESSION['cust_email']=$sql_fetch_2['username'];
        $_SESSION['cust_fname']=$sql_fetch_2['c_fname'];
        $_SESSION['cust_mname']=$sql_fetch_2['c_mname'];
        $_SESSION['cust_lname']=$sql_fetch_2['c_lname'];
        $_SESSION['cust_phone']=$sql_fetch_2['c_phno'];
        $_SESSION['cust_building']=$sql_fetch_2['c_bno'];
        $_SESSION['cust_street']=$sql_fetch_2['c_street'];
        $_SESSION['cust_dist']=$sql_fetch_2['c_district'];
        $_SESSION['cust_pin']=$sql_fetch_2['c_pincode'];
  }

 
  mysqli_close($conn);
?>