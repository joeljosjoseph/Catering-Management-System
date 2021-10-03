<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <!-- Head -->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Management | Sign Up</title>
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
                  <input class="form-control" style="font-size: small;border-right:white" type="Search" id="admin-item-input" autocomplete="off" name="search" placeholder="Search " aria-label="Search">
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

          <!-- Dropdown menu -->


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
          <ul class="navbar-nav navbar-nav-scroll d-flex " id="navbar-nav"  style="--bs-scroll-height: 100px;margin:10px 0;align-items:flex-end;">
            <li class="nav-item" id="nav_1">
              <a class="nav-link" href="home.php">  Home</a>
              
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
 
    <?php
       if( isset($_SESSION['userexists']) )
       {
         ?>
         <div class="alert alert-danger alert-custom" role="alert" style="width: 75%;">
         <?php echo $_SESSION['userexists'];
         ?>
        </div>
        <?php
       
               unset($_SESSION['userexists']);
       
       }
       if( isset($_SESSION['passwordmis']) )
       {
         ?>
         <div class="alert alert-danger alert-custom" role="alert" style="width: 75%;">
         <?php echo $_SESSION['passwordmis'];
         ?>
        </div>
        <?php
       
               unset($_SESSION['passwordmis']);
       
       }
       ?>



          <div class="container d-flex justify-content-center">
                

                <!-- Registeration Form -->

                <div class="col-md-7 col-lg-50">
                  <form action='php/signUp_action.php' method='POST'>
                    <div class="row d-flex justify-content-center">
                      
                
                      <!-- Icon -->
                
                      <div class="input-group col-lg-6 mb-4 d-flex justify-content-center">
                        <i class="bi bi-person " style="font-size: 5rem;"></i>
                      </div>
                      <div class="input-group row d-flex justify-content-between">
                
                        <!-- First Name -->
                
                        <div class="input-group col-lg-6 mb-4" style="max-width: 240px;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-2 border-md border-right-0">
                              <i class="bi bi-person-circle"></i>
                            </span>
                          </div>
                          <input id="firstName" type="text" name="firstname" placeholder="First Name"
                            class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                        </div>
                
                        <!-- Middle Name -->
                
                        <div class="input-group col-lg-6 mb-4" style="max-width: 240px;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-2 border-md border-right-0">
                              <i class="bi bi-person-circle"></i>
                            </span>
                          </div>
                          <input id="middleName" type="text" name="middlename" placeholder="Middle Name"
                            class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                        </div>
                
                        <!-- Last Name -->
                
                        <div class="input-group col-lg-6 mb-4" style="max-width: 240px;">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-2 border-md border-right-0">
                              <i class="bi bi-person-circle"></i>
                            </span>
                          </div>
                          <input id="lastName" type="text" name="lastname" placeholder="Last Name"
                            class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                        </div>
                
                      </div>
                
                      <!-- Email Address -->
                
                      <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-envelope"></i>
                          </span>
                        </div>
                        <input id="email1" type="email" name="email" required placeholder="Email Address"
                          class="form-control bg-white border-left-0 border-md">
                
                      </div>
                
                      <!-- Phone Number -->
                
                      <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-telephone"></i>
                          </span>
                        </div>
                        <select id="countryCode" name="countryCode" style="max-width: 80px"
                          class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                          <option value="">+91</option>
                        </select>
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number"
                          class="form-control bg-white border-md border-left-0 pl-3" minlength="10" maxlength="10" required>
                      </div>
                
                
                      <!-- Password -->
                
                      <div class="input-group col-lg-6 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-lock"></i>
                          </span>
                        </div>
                        <input id="pass1" type="password" name="password" placeholder="Password"
                          class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                      </div>
                
                      <!-- Password Confirmation -->
                
                      <div class="input-group col-lg-6 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-lock"></i>
                          </span>
                        </div>
                        <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirm Password"
                          class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                      </div>
                
                      <!-- Building Number -->
                
                      <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-building"></i>
                          </span>
                        </div>
                        <input id="building" type="numeric" name="building" placeholder="building Number"
                          class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                      </div>
                
                      <!-- Street -->
                
                      <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-signpost"></i>
                          </span>
                        </div>
                        <input id="street" type="text" name="street" placeholder="Street Name"
                          class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                      </div>
                
                      <!-- District -->
                
                      <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-geo-alt-fill"></i>
                          </span>
                        </div>
                        <input id="district" type="text" name="district" placeholder="District"
                          class="form-control bg-white border-left-0 border-md" maxlength="10" required>
                      </div>
                
                      <!-- Pincode -->
                
                      <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="bi bi-mailbox"></i>
                          </span>
                        </div>
                        <input id="pincode" type="pincode" name="pincode" placeholder="Pincode"
                          class="form-control bg-white border-left-0 border-md" minlength="6" maxlength="6" required>
                      </div>
                
                
                      <!-- Submit Button -->
                
                      <div class="form-group col-lg-12 mx-auto mb-0 d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary btn-block py-2">
                          <span class="font-weight-bold">Create your account</span>
                        </button>
                      </div>
                
                
                
                      <!-- Already Registered -->
                
                      <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="signIn.php"
                            class="text-primary ml-2">Login</a></p>
                      </div>
                
                    </div>
                  </form>
                </div>
            </div>
          </div>






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