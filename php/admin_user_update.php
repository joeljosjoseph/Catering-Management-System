<?php
require_once('connection.php');
session_start();


// declare variables
$username= $firstname= $middlename= $lastname= $phone= $housename= $street= $district= $zip= $password="";

$username = $_SESSION['cust_email'];

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
    
    $phone=test_input($_POST["phone"]);
    $building=test_input($_POST["building"]);
    $street=test_input($_POST["street"]);
    $district=test_input($_POST["district"]);
    $zip=test_input($_POST["pincode"]);
  }


  // // Condition to check which button has been clicked 

  //   if (isset($_POST['updateUser'])) {

  //     // Update customer table

      $sql_update_customer="UPDATE customer SET c_phno='$phone',c_bno='$building',c_street='$street',c_district='$district',c_pincode='$zip' WHERE username='$username'";

      $sql_exe_customer=mysqli_query($conn,$sql_update_customer);



 
      if($sql_exe_customer)
      {
        $_SESSION['userupdated'] = "Successfully Updated User Details";
        header("refresh:1; url=../admin.php");

      }
      else
      {
          // Display error

          echo "mysqli_error($conn)";
      }
    
    // } 

    // If admin decides to delete 

    // else if (isset($_POST['removeUser'])) {
          
    //   // Deleting customer details from customer table

    //   $sql_del_customer = "DELETE FROM customer WHERE username = '$username'";
          
    //   // Deleting customer data from login table

    //   $sql_del_login = "DELETE FROM login WHERE username = '$username'";
             

    //   $sql_delete_customer=mysqli_query($conn,$sql_del_customer);
    //   $sql_del_login1 = mysqli_query($conn,$sql_del_login);  

    //   if($sql_delete_customer)
    //   {
    //      if($sql_del_login1)  {

    //       echo "Account Deleted Successfully!";
    //       header("refresh:1; url=../admin.php");
    //      }
    //      else {

    //       echo "mysqli_error($conn)";

    //      }

    //   }
    //   else
    //     {
    //         echo "mysqli_error($conn)";
    //     }
    
    // }
 

  mysqli_close($conn);
?>