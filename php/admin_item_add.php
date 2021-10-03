<?php
require_once('connection.php');
session_start();

// Declare Variables

$item_name=$subcat_name=$cat_name=$description=$price ="";


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
    $item_name=test_input($_POST["item_name"]);   
    $subcat_id=test_input($_POST["subcategory"]);
    $description=test_input($_POST["description"]);
    $price=test_input($_POST["price"]);
    $img = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
    
  }
  // $cat_name='0';
  // $subcat_name='1';

  $sql_subcategory_check="SELECT * FROM sub_category WHERE subcategory_id='$subcat_id'";
 

  // Inserting values into table login and customer

 

  

  
    
    while($row=mysqli_fetch_assoc(mysqli_query($conn,$sql_subcategory_check)))
    {
      
      $sql_item_check="SELECT * FROM item WHERE item_name='$item_name'";

      if(!empty(mysqli_fetch_array(mysqli_query($conn,$sql_item_check))))
      {
        $_SESSION['itemexists'] = "Item Already Exists!";
        header("location: ../admin.php");
        exit;
      }
      else {

      

      // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
      if( $subcat_id == $row['subcategory_id'])
      {
        
        $sql_insert_item = "INSERT INTO item (subcategory_id,item_name,description,price,item_status,item_image) VALUES ('$subcat_id','$item_name','$description','$price','Active','$img')";

        // echo '<script>alert("Welcome to Geeks for Geeks")</script>';

            if(mysqli_query($conn,$sql_insert_item))
            {
              $_SESSION['itemadded'] = "Item Added Successfully";
              header("location: ../admin.php");
              exit;
            }

            else
            {
              echo mysqli_error($conn);
            }
        
      }
    }
  }
  
  
  mysqli_close($conn);
?>