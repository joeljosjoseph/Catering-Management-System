<?php
require_once('connection.php');
session_start();


if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}

// Fetch data from webpage URL

$id = mysqli_real_escape_string($conn,$_GET['custid']);

    // Getting customer details from table 

    $sql_fetch="SELECT * FROM customer WHERE cust_id='$id'";

    $sql_fetch_details=mysqli_query($conn,$sql_fetch);

//  Passing values to webpage

  while($row=mysqli_fetch_assoc($sql_fetch_details))
  {         
        $_SESSION['cust_email']=$row['username'];
        $_SESSION['cust_fname']=$row['c_fname'];
        $_SESSION['cust_mname']=$row['c_mname'];
        $_SESSION['cust_lname']=$row['c_lname'];
        $_SESSION['cust_phone']=$row['c_phno'];
        $_SESSION['cust_building']=$row['c_bno'];
        $_SESSION['cust_street']=$row['c_street'];
        $_SESSION['cust_dist']=$row['c_district'];
        $_SESSION['cust_pin']=$row['c_pincode'];



}


$sql = "SELECT * FROM customer ";
$result = $conn->query($sql);

?>