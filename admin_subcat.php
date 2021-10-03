<?php
require_once('php/connection.php');
session_start();

$cat_id = mysqli_real_escape_string($conn,$_GET['cat_id']);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catering Management | Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/Home.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>




</head>

<body>
  <!-- Header -->


  <nav class="navbar navbar-expand-lg navbar-light " style="flex-direction: column;display: flex; ">

    <!-- division 1 -->

    <div id="container-1 " class="w-100">
      <div class="d-flex justify-content-between w-100 " style="padding-left: 37px;">

        <!-- Logo -->

        <a href="home.php"><img src="image/logo.png" style=" height:80px ;width:70px;"></a>
        <div class="mt-5 mx-5">

          <!-- Search Bar -->
          <form class="d-flex input-group" style="width:400px;height: 30px;">
            <input class="form-control" style="font-size: small;border-right:white" type="Search" placeholder="Search "
              aria-label="Search">
            <button class="input-group-text" type="submit" style="background-color: white;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg></button></input>
          </form>
        </div>


      </div>

      <!-- division 2 -->



  </nav>

  <!-- Admin side panel -->

  <section>
    <div class="container light-style flex-grow-1 container-p-y">

      <h4 class="font-weight-bold py-3 mb-4">
        Admin - Control Panel
      </h4>
      <div style="display: flex;justify-content: flex-end;width: 100%;">
        <div>
          <a href="php/signOut.php" class="btn" id="red-button" style="margin-right: 20px;">Sign Out</a>
        </div>
      </div>

      <div class="card overflow-hidden" style="min-height: 600px;min-width: 1300px;">
        <div class="row no-gutters row-bordered row-border-light">
          <div class="col-md-2 pt-0">
            <div class="list-group list-group-flush account-settings-links">
              <a class="list-group-item list-group-item-action" href="admin.php">Menu</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#admin-edit-users"
                onclick="">Users</a>
              <a class="list-group-item list-group-item-action  active" id="user-account-info" data-toggle="list"
                href="#subcat-edit">Category</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#view-orders">Orders</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#view-feedback">Feedback</a>
              <a href="php/signOut.php" class="btn ml-3" id="red-button" style="width: 150px;position: absolute;bottom: 30px;left: 20px;">Sign Out</a>


            </div>
          </div>
          <div class="col-md">
            <div class="tab-content">

              <!-- Food item Details  -->

              <div class="tab-pane fade " id="admin-edit-food">


                <hr class="border-light m-0">

                <div class="card-body ">
                  <?php
                    if( isset($_SESSION['itemexists']) )
                    {
                      ?>
                  <div class="alert alert-danger alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo $_SESSION['itemexists'];?>
                  </div>
                  <?php
                            unset($_SESSION['itemexists']);
                    
                    }


                    if( isset( $_SESSION['itemadded']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['itemadded'];?>
                  </div>
                  <?php
                            unset( $_SESSION['itemadded']);
                    
                    }


                    if( isset( $_SESSION['updateditem']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['updateditem'];?>
                  </div>
                  <?php
                            unset( $_SESSION['updateditem']);
                    
                    }


                    if( isset( $_SESSION['updateditem']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['updateditem'];?>
                  </div>
                  <?php
                            unset( $_SESSION['updateditem']);
                    
                    }


                    if( isset( $_SESSION['itemact']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['itemact'];?>
                  </div>
                  <?php
                            unset( $_SESSION['itemact']);
                    
                    }

                    if( isset( $_SESSION['subcatinact']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['subcatinact'];?>
                  </div>
                  <?php
                            unset( $_SESSION['subcatinact']);
                    
                    }

                    if( isset( $_SESSION['itemdeact']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['itemdeact'];?>
                  </div>
                  <?php
                            unset( $_SESSION['itemdeact']);
                    
                    }

                    if( isset( $_SESSION['userupdated']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['userupdated'];?>
                  </div>
                  <?php
                            unset( $_SESSION['userupdated']);
                    
                    }


                    if( isset( $_SESSION['useract']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['useract'];?>
                  </div>
                  <?php
                            unset( $_SESSION['useract']);
                    
                    }

                    if( isset( $_SESSION['userdeact']) )
                    {
                      ?>
                  <div class="alert alert-success alert-custom" role="alert" style="text-align: center;width: 80%;">
                    <?php echo  $_SESSION['userdeact'];?>
                  </div>
                  <?php
                            unset( $_SESSION['userdeact']);
                    
                    }

                    ?>
                  <!-- <div class=" mt-3 mx-5 d-flex justify-content-end">
                    
                     Button trigger modal

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addFoodModal" style="padding: right 30px;">New </button>
                  </div> 
                
                   Button trigger modal -->


                  <!-- Modal -->

                  <div class="modal fade .bd-example-modal-lg" id="addFoodModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <form action="php/admin_item_add.php" method="POST">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Food Item</h5>
                            <button type="button" class="btn-close" data-dismiss="modal"></button>

                          </div>

                          <!-- modal body -->

                          <div class="modal-body">


                            <!-- Add Food -->

                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Food Name</label>
                              <input type="text" class="form-control" id="recipient-name" name="item_name">
                            </div>

                            <!-- Add Description -->

                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Description</label>
                              <textarea class="form-control" id="message-text" style="height: 200px;"
                                name="description"></textarea>
                            </div>

                            <!-- Add Category  -->



                            <div class="form-group">
                              <div class="input-group mb-3" style="margin-top: 10px;">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                </div>

                                <select class="custom-select col-md-4" id="category" name="category">
                                  <option value="" disabled-selected hidden>Select category</option>
                                  <?php   // LOOP TILL END OF DATA 
                                  require_once('php/connection.php');
                                  
                                  
                                  $sql_fetch = "SELECT * FROM category ";
      
                                  $result=mysqli_query($conn,$sql_fetch);
      
                                    while($rows=$result->fetch_array())
                                  { 
                                                                
                                  ?>

                                  <option value="<?php echo $rows['category_id'];?>">
                                    <?php echo $rows['category_name'];?>
                                  </option>
                                  <?php
                                  }
                                  ?>
                                </select>


                              </div>
                            </div>



                            <!-- Add Sub-Catergory -->

                            <div class="form-group">
                              <div class="input-group mb-3" style="margin-top: 10px;">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Sub-Category</label>
                                </div>

                                <select class="custom-select" id="subcategory" style="width: 223px;" name="subcategory">


                                  <option value="" disabled-selected hidden name="subcategory">Select sub-category
                                  </option>



                                </select>
                              </div>
                            </div>



                            <div>
                              <label for="img">Select image:</label>
                              <input type="file" id="img" name="img" accept="image/*">
                            </div>


                            <!-- Add Price -->

                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Price</label>
                              <input type="number" class="form-control" id="recipient-name" name="price">
                            </div>

                          </div>

                          <!-- Modal footer(buttons) -->

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Item</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- View food items -->

                  <div id="admin-menu-card">

                    <div style="height:250px;width: 200px ;margin-top: 15px;margin-bottom: 15px;" id="addFoodPlus">

                      <a data-target="#addFoodModal" data-toggle="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" id="addFoodPlusIcon" width="200px" height="160px"
                          fill="currentColor" class="bi bi-plus-square-dotted mt-5" viewBox="0 0 16 16">
                          <path
                            d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                      </a>
                    </div>

                    <?php   // LOOP TILL END OF DATA 
                          require_once('php/connection.php');
                          
                                                                             
                          $sql_fetch1 = "SELECT * FROM category ";
                          $sql_fetch2 = "SELECT * FROM sub_category ";
                          $sql_fetch3 = "SELECT * FROM item ";

                          $result1=mysqli_query($conn,$sql_fetch1);
                          
                          

                            while($row1=$result1->fetch_assoc())
                           { 
                             $result2=mysqli_query($conn,$sql_fetch2);
                                
                             ?>
                    <div style="width: 100%;">
                      <h4>
                        <?php echo $row1['category_name'];?>
                      </h4>

                      <?php
                             while($row2=$result2->fetch_assoc())
                             {
                              $result3=mysqli_query($conn,$sql_fetch3);
                               if($row2['category_id']==$row1['category_id'])
                               {
                                 
                              ?>

                      <h5>
                        <?php echo $row2['subcategory_name'];?>
                      </h5>
                      <div style="width: 100%;display: flex;justify-content: space-around;">
                        <?php
                              while($row3=$result3->fetch_assoc())
                              {
                                if($row3['subcategory_id'] == $row2['subcategory_id'])
                                {
                             
                                                        
                        ?>


                        <div class="card " id="admin-menu-card-body" style="height: 250px;width: 200px;">
                          <img class="card-img-top" src="image/logo.png" alt="Card image cap"
                            style="height: 160px;width: 200px;">
                          <div class="card-body" style="max-width: 75;max-height: 100px;">
                            <h5 class="card-title">
                              <?php echo $row3['item_name'];?>
                            </h5>

                          </div>
                        </div>
                        <?php
                      }  
                    } ?>
                      </div>
                      <?php
                  }} ?>
                    </div>
                    <?php
                    } ?>
                  </div>

                </div>
              </div>

              <!-- Users -->

              <div class="tab-pane fade  " id="admin-edit-users">
                <hr class="border-light m-0">
                <div class="card-body pb-2" style="padding-left: 70px;">
                  <form method="POST">

                    <table class="table table-hover table-responsive">
                      <thead>
                        <tr>

                          <th scope="col">User Id</th>
                          <th scope="col">Username</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Middle Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>

                        <!-- Loop for fetching data from each row in sql table -->

                        <?php   // LOOP TILL END OF DATA 
                        require_once('php/connection.php');
                        
                        
                        $sql_fetch = "SELECT * FROM customer ";
                        
                        $result=mysqli_query($conn,$sql_fetch);
                       
                        

                          while($rows=$result->fetch_assoc())
                         { 
                          $sql_fetch1 = "SELECT * FROM login";
                          $result1=mysqli_query($conn,$sql_fetch1);

                          while($rows1=$result1->fetch_assoc())
                          { 
                            if($rows1['username'] == $rows['username']) {
                              $status = $rows1['status'];
                            }
                          }
                                                      
                      ?>

                        <tr>
                          <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->


                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: inherit;">

                              <!-- Display fetched data from sql as table data-->

                              <?php echo $rows['cust_id'];?>
                            </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: inherit;">
                              <?php echo $rows['username'];?>
                            </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: inherit;">
                              <?php echo $rows['c_fname'];?>
                            </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: inherit;">
                              <?php echo $rows['c_mname'];?>
                            </a>
                          </td>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: inherit;">
                              <?php echo $rows['c_lname'];?>
                          </td>
                          <?php 
                        if($status == 'Active')
                        {
                          ?>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: green;">
                              <?php echo $status?>
                            </a>
                          </td>
                          <?php
                      }
                      else
                      {
                        ?>
                          <td>
                            <a href="admin_user.php?custid=<?php echo $rows['cust_id']; ?>" role="button"
                              style="display: block;text-decoration: none;color: red;">
                              <?php echo $status?>
                            </a>
                          </td>
                          <?php
                      }
                      ?>
                        </tr>

                        <?php
                        }
                      ?>

                      </tbody>
                    </table>

                </div>
              </div>

              <!-- Subcategory Info -->
              <div class="tab-pane fade active show" id="subcat-edit">
                <hr class="border-light m-0">
                <div class="card-body pb-2" style="padding-left: 70px;">

                  <?php 
                      
                        
                          
                          
                  $sql_fetch = "SELECT * FROM sub_category WHERE category_id = '$cat_id'";
                  $result1=mysqli_query($conn,$sql_fetch);
                  
                  if(mysqli_num_rows($result1))
                  {
                    ?>

                  <table class="table table-hover table-responsive">
                    <thead>
                      <tr>

                        <th scope="col">Sub-Category Id</th>
                        <th scope="col">Sub-Category Name</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                          while($rows=$result1->fetch_assoc())
                           {  
                              if($rows['category_id'] == $cat_id)
                               {     
                      ?>
                      <tr>
                        <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                        <td>
                          <!-- Display fetched data from sql as table data-->

                          <?php echo $rows['subcategory_id'];?>

                        </td>
                        <td>
                          <!-- Display fetched data from sql as table data-->

                          <?php echo $rows['subcategory_name'];?>

                        </td>
                        <td>
                          <?php 
                                if($rows['subcat_status']=='Active')
                                {
                                  ?>
                          <a href="php/subcategory_deactivate.php?subcat_id=<?php echo $rows['subcategory_id'];?>"
                            class="btn " style="border: 1px solid red;color: red;">Deactivate</a>
                          <?php
                                }
                                else
                                {
                                  
                                  ?>
                          <a href="php/subcategory_activate.php?subcat_id=<?php echo $rows['subcategory_id'];?>"
                            class="btn " style="border: 1px solid green;color: green;">Activate</a>
                          <?php
                                }
                                ?>
                        </td>
                      </tr>
                      <?php 
                              }
                            }         
                              ?>
                    </tbody>
                  </table>
                  <?php
                }
                  else  {
                   ?>
                  <div>
                    <p
                      style="font-size: 16px;font-weight: 400;margin-top: 30px;margin-left: 40px;margin-bottom: 30px;color: red;">
                      No Subcategories present!</p>
                  </div>
                  <?php
                  }
                  ?>
                  <form action='php/subcat_create.php?cat_id=<?php echo $cat_id ?>' method='POST'>
                    <div style="width: 100%;display: flex;flex-wrap: wrap;justify-content: space-evenly;">
                      <div style="width: 400px;">
                        <p class="mt-3" style="font-size: large;padding-top: 10px  ;">Create New Sub-Category</p>
                      </div>
                      <div style="width: 500px;display: flex;margin-bottom: 10px;">
                        <input id="firstName" type="text" name="subcat_name" placeholder="Sub-Category Name"
                          class="mt-4 form-control bg-white border-left-0 border-md"
                          style="width: 74%;align-self: flex-end;">
                        <button type="submit" class="btn  btn-block py-2"
                          style="height:39px;margin-top:24px;border: 1px solid grey;color: grey;">
                          <span class="font-weight-bold">Create</span>
                        </button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>

              <!-- Orders -->
              <div class="tab-pane fade" id="view-orders">
                <hr class="border-light m-0">
                <div class="card-body pb-2" style="padding-left: 70px;">

                  <div>

                    <table class="table table-hover table-responsive">
                      <thead>
                        <th>Order ID</th>
                        <th>Menumaster ID</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th style="width:140px"></th>
                      </thead>
                      <tbody>
                        <?php
                          require_once('php/connection.php');

                          $order_query = "SELECT * FROM orders ORDER BY order_id DESC";
                          $order_query_exe = mysqli_query($conn,$order_query);

                          while($order=$order_query_exe->fetch_assoc())
                          {
                            
                            ?>
                        <tr>
                          <td>
                            <?php echo $order['order_id']?>
                          </td>
                          <td>
                            <?php echo $order['menumaster_id']?>
                          </td>
                          <td>
                            <?php echo $order['order_date']?>
                          </td>
                          <?php 
                          if($order['order_status'] == 'Ordered')
                          {
                            ?>
                          <td style="color:goldenrod;">
                            <?php echo $order['order_status']?>
                          </td>
                          <?php
                          }
                          else if($order['order_status'] == 'Cancelled')
                          {
                            ?>
                          <td style="color:red;">
                            <?php echo $order['order_status']?>
                          </td>
                          <?php
                          }
                          else{
                            ?>
                          <td style="color:green;">
                            <?php echo $order['order_status']?>
                          </td>
                          <?php
                          }
                          ?>
                          <td><a href="admin_order.php?mm_id=<?php echo $order['menumaster_id'];?>" class="btn"
                              style="border: 2px solid grey;color: black;" id="item_add_cart">View Details</a></td>
                        </tr>
                        <?php 
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>


                </div>
              </div>

              <!-- Feedback -->
              <div class="tab-pane fade" id="view-feedback">
                <hr class="border-light m-0">
                <div class="card-body pb-2" style="padding-left: 70px;">
                  <?php
                  $query = "SELECT * FROM feedback ORDER BY feedback_id DESC";
                  $query_ = mysqli_query($conn,$query);
                  if(mysqli_num_rows($query_))
                    {
                  ?>
                  <div>
                    <table class="table table-hover table-responsive">
                      <thead>
                        <th style="width:170px;">Feedback ID</th>
                        <th style="width:170px;">Order ID</th>
                        <th style="width:170px;">Customer ID</th>
                        <th style="padding-left: 20px;">Feedback</th>
                        <th style="width:140px">Actions</th>
                      </thead>
                      <tbody>
                        <?php
                   

                    while($rows=$query_->fetch_assoc())
                    { 
                      $order_id = $rows['order_id'];
                      $query1 = "SELECT * FROM orders WHERE order_id = '$order_id'";
                      $query1_ = mysqli_query($conn,$query1);
                      $query1__ = mysqli_fetch_assoc($query1_);
                      $mm_id = $query1__['menumaster_id'];

                      $query2 = "SELECT * FROM menumaster WHERE menumaster_id = '$mm_id'";
                      $query2_ = mysqli_query($conn,$query2);
                      $query2__ = mysqli_fetch_assoc($query2_);
                      $cust_id = $query2__['cust_id'];

                      $query3 = "SELECT c_fname FROM customer WHERE cust_id = '$cust_id'";
                      $firstname = mysqli_fetch_assoc(mysqli_query($conn,$query3));
                      
                  
                      ?>


                        <tr style="height: 100px;">
                          <td>
                            <?php echo $rows['feedback_id']; ?>
                          </td>
                          <td>
                            <?php echo $order_id; ?>
                          </td>
                          <td>
                            <?php echo $cust_id;?>
                          </td>
                          <td style="padding-left: 20px;">
                            <?php echo $rows['feedback_det'];?>
                          </td>
                          <td></td>
                        </tr>
                        <?php
                  }
                  ?>
                      </tbody>
                    </table>
                  </div>
                  <?php
                }
                else{
                  ?>
                  <div>
                    <p style="font-size: 20px;color: red;font-weight: 400;margin: 40px 200px 0 0;text-align: center;">No
                      Feedbacks Yet!</p>
                  </div>
                  <?php
              }
              ?>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>


    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/jquery.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function () {
      $('#category').on('change', function () {
        var cat_id = $(this).val();
        console.log(cat_id);

        if (cat_id) {
          $.ajax({
            type: 'POST',
            url: 'php/subcat_fetch.php',
            data: 'category_id=' + cat_id,
            success: function (html) {
              $('#subcategory').html(html);
              console.log(cat_id);
            }
          });
        }
      });


    });
  </script>

</body>

</html>