<?php 
// Include the database config file 
require_once('connection.php'); 


$catid = $_POST['category_id'];


if(!empty($catid))  { 

    // Fetch state data based on the specific country 
    $query = "SELECT * FROM sub_category WHERE category_id = '$catid' AND subcat_status = 'Active'" ;
    $result = $conn->query($query); 


    // Generate HTML of state options list 
    if($result){ 

        echo '<option value="" disabled-selected hidden>Select Sub category</option>'; 
        while($row = $result->fetch_assoc()){  

            echo '<option name="subcategory" value="'.$row['subcategory_id'].'">'.$row['subcategory_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Sub Category not available</option>'; 
    } 
}
?>