<?php
require_once('connection.php');
session_start();


if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}

// Fetch data from webpage URL

$id = mysqli_real_escape_string($conn,$_GET['item_id']);

    // Getting customer details from table 

    $sql_fetch="SELECT * FROM item WHERE item_id='$id'";

    $sql_fetch_details=mysqli_query($conn,$sql_fetch);

//  Passing values to webpage

  while($row=mysqli_fetch_assoc($sql_fetch_details))
  {         
        $_SESSION['item_id']=$id;
        $_SESSION['item_name']=$row['item_name'];
        $_SESSION['price']=$row['price'];
        $_SESSION['description']=$row['description'];
        $_SESSION['item_status']=$row['item_status'];
        $_SESSION['subcat_id']=$row['subcategory_id'];
        $_SESSION['item_image']=$row['item_image'];
        


}
