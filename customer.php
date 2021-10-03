<?php
require_once('php/customer_action.php');
?>

<!DOCTYPE html>
<html lang="en">

  <!-- Head -->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Management | Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/Home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
  
    <body>

  
   <!-- Header -->


   <nav class="navbar navbar-expand-lg navbar-light " style="flex-direction: column;display: flex; ">

    <!-- division 1 -->

      <div id="container-1 " class="w-100">
          <div class="d-flex justify-content-between w-100 " style="padding-left: 37px;">

            <!-- Logo -->

              <a href="home.php"><img src="image/logo.png" style=" height:80px ;width:70px;" ></a>
              <div style="margin:auto">

                <!-- Search Bar -->

                <form class="d-flex input-group" style="width:900px;height: 30px;"  method="POST" action="search.php">
                  <input class="form-control" style="font-size: small;border-right:white" id="admin-item-input" autocomplete="off" type="Search" name="search" placeholder="Search " aria-label="Search">
                  <button class="input-group-text" type="submit" style="background-color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg></button>
                </form>
              </div>

              <!-- Custom Menu and Profile -->

              <div style="margin: auto 0 auto 0;padding-right: 30px;">
                <a href="" ><svg xmlns="http://www.w3.org/2000/svg" style="height: 30px;width:50px;padding-right:10px;color:grey" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg></a>
                <a href="php/signin_check.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="50px" color="grey" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg></a>
              </div>
          </div>
        
      </div>

      <!-- division 2 -->


      <div class="container-fluid ">
         <div>

          <!-- Dropdown menu  -->


          <ul style="list-style-type: none;">
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list mt-3" viewBox="0 0 16 16" >
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item " href="home.php">Home</a></li>
                <li><a class="dropdown-item" href="cart.php">Your Menu</a></li>
                <li><a class="dropdown-item" href="orders.php">Your Orders</a></li>
                <li><a class="dropdown-item" href="php/signin_check.php">Account</a></li>
                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                <li><a class="dropdown-item" href="#privacy_Policy">Privacy Policy</a></li>
              </ul>
            </li>
          </ul>
        </div> 
       



        <!-- Navbar -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
          <ul class="navbar-nav navbar-nav-scroll d-flex " id="navbar-nav" style="--bs-scroll-height: 100px;margin:10px 0;align-items:flex-end;">
            <li class="nav-item" id="nav_1">
                <a class="nav-link" href="home.php" >Home</a>
              
            </li>
            <li class="nav-item" id="nav_1">
              <a class="nav-link" href="shopFood.php">Explore</a>
            </li>
            <li class="nav-item" id="nav_1">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item" id="nav_1">
              <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
          </ul>
        </div>
      </div> 
    </nav>


    

    <div class="container">
        	<?php
       if( isset($_SESSION['signedup']) )
       {
         ?>
         <div class="alert alert-success alert-custom" role="alert" style="width: 80%;text-align: center;">
         <?php echo $_SESSION['signedup'];
         ?>
        </div>
        <?php
       
               unset($_SESSION['signedup']);
       
       }
       if( isset($_SESSION['loggedin']) )
       {
         ?>
         <div class="alert alert-success alert-custom" role="alert" style="width: 75%;text-align: center;">
         <?php echo $_SESSION['loggedin'];
         ?>
        </div>
        <?php
       
               unset($_SESSION['loggedin']);
       
       }
       ?>
    </div>



    <section>
        <div class="container light-style flex-grow-1 container-p-y">
            <form action='php/update.php' method='POST'>
    
                <h4 class="font-weight-bold py-3 mb-4">
                    Account settings
                </h4>
                
                <!-- Contents in side panel -->

                <div class="card overflow-hidden" style="width:1000px">
                    <div class="row no-gutters row-bordered row-border-light">
                        <div class="col-md-3 pt-0">
                            <div class="list-group list-group-flush account-settings-links">
                                <a class="list-group-item list-group-item-action active" id="general-account"
                                    data-toggle="list" href="#account-general">General</a>
                                <a class="list-group-item list-group-item-action" id="password-change" data-toggle="list"
                                    href="#account-change-password">Change password</a>
                                <a class="list-group-item list-group-item-action" id="user-account-info" data-toggle="list"
                                    href="#account-info">Info</a>
    
    
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
    
                                <!-- General Account Details  -->
    
                                <div class="tab-pane fade active show" id="account-general">
    
    
                                    <hr class="border-light m-0">
    
    
                                    <div class="card-body " style="padding-left: 70px;">
                                        <?php
                                                if( isset($_SESSION['passchanged']) )
                                                {
                                                    ?>
                                                    <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="border: 2px solid green;text-align: center;">
                                                    <?php echo $_SESSION['passchanged'];
                                                    ?>
                                                    </div>
                                                    <?php
                                                
                                                        unset($_SESSION['passchanged']);
                                                
                                                }
                                                if( isset($_SESSION['passmis']) )
                                                {
                                                    ?>
                                                    <div class="alert alert-danger alert-custom" role="alert" style="width: 75%;" style="border: 2px solid red;text-align: center;"> 
                                                    <?php echo $_SESSION['passmis'];
                                                    ?>
                                                    </div>
                                                    <?php
                                                
                                                        unset($_SESSION['passmis']);
                                                
                                                }
                                                if( isset($_SESSION['oldpasswrong']) )
                                                {
                                                    ?>
                                                    <div class="alert alert-danger alert-custom" role="alert" style="width: 75%;" style="border: 2px solid red;text-align: center;">
                                                    <?php echo $_SESSION['oldpasswrong'];
                                                    ?>
                                                    </div>
                                                    <?php
                                                
                                                        unset($_SESSION['oldpasswrong']);
                                                
                                                }
                                                if( isset($_SESSION['updated']) )
                                                {
                                                    ?>
                                                    <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="border: 2px solid green;text-align: center;">
                                                    <?php echo $_SESSION['updated'];
                                                    ?>
                                                    </div>
                                                    <?php
                                                
                                                        unset($_SESSION['updated']);
                                                
                                                }
                                                ?>
    
                                        <!-- Change First name -->
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>First Name</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-person-circle"></i>
                                                </span>
                                            </div>
                                            <input id="firstName" type="text" name="firstname"
                                                value="<?php print_r($_SESSION['cust_fname']);?>"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                                        </div>
    
                                        <!-- Change middle name -->
    
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Middle Name</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-person-circle"></i>
                                                </span>
                                            </div>
                                            <input id="middleName" type="text" name="middlename"
                                                value="<?php print_r($_SESSION['cust_mname']);?>"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                                        </div>
    
                                        <!-- Change Last name -->
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Last Name</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-person-circle"></i>
                                                </span>
                                            </div>
                                            <input id="lastName" type="text" name="lastname"
                                                value="<?php print_r($_SESSION['cust_lname']);?>"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                                        </div>
    
                                        <!-- Change Email -->
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Email</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-envelope"></i>
                                                </span>
                                            </div>
                                            <input id="email" type="email" name="email" placeholder="Email Address"
                                                value="<?php print_r($_SESSION['cust_email']);?>"
                                                class="form-control border-left-0 border-md" disabled>
    
                                        </div>
    
                                    </div>
    
                                </div>
    
                                <!-- Change Password -->
    
                                <div class="tab-pane fade" id="account-change-password">
                                    <div class="card-body pb-2" style="padding-left: 70px;">
    
                                        <!-- Enter Old Password -->
    
                                        <div class="input-group col-lg-6 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Old Password</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-lock"></i>
                                                </span>
                                            </div>
                                            <input id="pass1" type="password" name="oldpassword" placeholder="Old Password"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" >
                                        </div>
    
                                        <!-- Enter New Password -->
    
                                        <div class="input-group col-lg-6 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>New Password</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-lock"></i>
                                                </span>
                                            </div>
                                            <input id="pass2" type="password" name="newpassword" placeholder="New Password"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10">
                                        </div>
    
                                        <!-- New Password Confirmation -->
    
                                        <div class="input-group col-lg-6 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Confirm Password</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-lock"></i>
                                                </span>
                                            </div>
                                            <input id="pass3" type="password" name="newpassword1"
                                                placeholder="Repeat New Password"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10">
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- Change account Info -->
                                <div class="tab-pane fade" id="account-info">
                                    <div class="card-body pb-2" style="padding-left: 70px;">
    
    
                                        <!-- Phone Number -->
    
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Phone Number</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-telephone"></i>
                                                </span>
                                            </div>
                                            <select id="countryCode" name="countryCode" style="max-width: 80px"
                                                class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                                <option value="">+91</option>
                                            </select>
                                            <input id="phone" type="tel" name="phone"
                                                value="<?php print_r($_SESSION['cust_phone']);?>"
                                                class="form-control bg-white border-md border-left-0 pl-3" maxlength="10" required>
                                        </div>
    
                                        <!-- street -->
    
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Street</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-signpost"></i>
                                                </span>
                                            </div>
                                            <input id="street" type="text" name="street"
                                                value="<?php print_r($_SESSION['cust_street']);?>"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                                        </div>
    
                                        <!-- Building Number -->
    
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Building Number</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-building"></i>
                                                </span>
                                            </div>
                                            <input id="building" type="numeric" name="building"
                                                value="<?php print_r($_SESSION['cust_building']);?>"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                                        </div>
    
                                        <!-- pincode -->
    
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>Pincode</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-mailbox"></i>
                                                </span>
                                            </div>
                                            <input id="pincode" type="pincode" name="pincode"
                                                value="<?php print_r($_SESSION['cust_pin']);?>"
                                                class="form-control bg-white border-left-0 border-md" minlength="6" maxlength="6" required>
                                        </div>
    
                                        <!-- District -->
    
                                        <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                                            <div style="width: 100%;">
                                                <p>District</p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                </span>
                                            </div>
                                            <input id="district" type="text" name="district"
                                                value="<?php print_r($_SESSION['cust_dist']);?>"
                                                class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                                        </div>
    
    
                                    </div>
                                    <hr class="border-light m-0">
    
                                </div>
    

    
                            </div>

                        </div>
    
                    </div>
    
                </div>
                <div style="float: right; margin-right: 5rem;" class="mt-4 mb-5">
                    <a class="btn" href="home.php" id="item_add_cart" style="border: 1px solid black ;">Cancel </a>
                    
                    <button class="btn" id="green-button"  type="submit">Save Changes</button>
                    <a class="btn" id="red-button" href="php/signOut.php">Sign Out</a>
                    <a class="btn" id="red-button" href="php/customer_delete.php">Delete Account</a>
                </div>

            </form>
    
    
        </div>
    </section>

    

    



    
      <!-- Footer -->
      <footer class="page-footer font-small pt-4 fixed">

        <!-- Footer Text -->
        <div class="container-fluid d-flex justify-content-between " style="padding:0 100px;" >
  
            
            <div class=" mt-md-0 mt-3 d-flex ">
                        <img src="image/logo.png"style="height:80px ;width:70px">
                        <div class="col mt-3 mx-2">
                          <h5>Catering</h4>
                          <h5>Management System</h5>
                        </div>
                      </div>
  
            
            <!-- Grid column -->
        <div>
          <h5 class=" font-weight-bold">Contact Us</h5>
          
              <p style="margin-bottom: 5px;"><i class="bi bi-envelope"></i> &emsp; cateringmanagement@gmail.com</p>
              <p><i class="bi bi-telephone"></i> &emsp; 9994600000</p>
            
        </div>
      
  
           
  
        </div>
  
        <!-- Copyright -->
        <div class="footer-copyright text-center py-1" style="font-size: 13px;">© 2020 Copyright
        </div>
  
      </footer>
          
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/main.js"></script>
          <script>
            $(document).ready(function () {
            window.setTimeout(function() {
                $(".alert-custom").fadeTo(1200, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 2500);
    
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

          
          
         
          
        </body>
  </html>