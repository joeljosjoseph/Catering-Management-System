<?php
require_once('php/user_action.php');
?>

<!DOCTYPE html>
<html lang="en">

  <!-- Head -->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Management | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    
    
    
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
    </div>
  </nav>





      <div style="width: 100%;">
         <div class="col-lg-3 mt-5 d-flex justify-content-center">
            <div class="col-lg-1">
              <a href="admin.php" style="text-decoration: none;color: inherit;"><svg xmlns="http://www.w3.org/2000/svg"
                  width="25" height="25" fill="currentColor" class="bi bi-chevron-compact-left mt-2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z" />
                </svg></a>
            </div>
      
            <div class="col-lg-2">
      
              <a href="admin.php" style="text-decoration: none;color: inherit;font-size: x-large;">Back</a>
            </div>
          </div>
          <div class="container d-flex justify-content-center">
      
      
            <!-- Registeration Form -->
      
            <div class="col-md-7 col-lg-50">
              <form action='php/admin_user_update.php' method='POST'>
                <div class="row d-flex justify-content-center">
      
                  <!-- Icon -->
      
                  <div class="input-group col-lg-6 mb-4 d-flex justify-content-center">
                    <i class="bi bi-person " style="font-size: 5rem;"></i>
                  </div>
      
                  <div class="input-group row d-flex justify-content-between">
      
                    <!-- First Name -->
      
                    <div class="input-group col-lg-4 mb-4" style="max-width: 240px;">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-2 border-md border-right-0">
                          <i class="bi bi-person-circle"></i>
                        </span>
                      </div>
                      <input id="firstName" type="text" name="firstname" placeholder="First Name"
                        class="form-control border-left-0 border-md" disabled
                        value="<?php echo $_SESSION['cust_fname']; ?>">
                    </div>
      
                    <!-- Middle Name -->
      
                    <div class="input-group col-lg-4 mb-4" style="max-width: 240px;">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-2 border-md border-right-0">
                          <i class="bi bi-person-circle"></i>
                        </span>
                      </div>
                      <input id="middleName" type="text" name="middlename" placeholder="Middle Name"
                        class="form-control border-left-0 border-md" disabled
                        value="<?php echo $_SESSION['cust_mname']; ?>">
                    </div>
      
                    <!-- Last Name -->
      
                    <div class="input-group col-lg-6 mb-4" style="max-width: 240px;">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-2 border-md border-right-0">
                          <i class="bi bi-person-circle"></i>
                        </span>
                      </div>
                      <input id="lastName" type="text" name="lastname" placeholder="Last Name"
                        class="form-control border-left-0 border-md" disabled
                        value="<?php echo $_SESSION['cust_lname']; ?>">
                    </div>
      
                  </div>
      
                  <!-- Email Address -->
      
                  <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="bi bi-envelope"></i>
                      </span>
                    </div>
                    <input id="email1" type="email" name="email" placeholder="Email Address"
                      class="form-control border-left-0 border-md" disabled
                      value="<?php echo $_SESSION['cust_email']; ?>">
      
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
                    <input id="phoneNumber" type="number" name="phone" placeholder="Phone Number"
                      class="form-control bg-white border-md border-left-0 pl-3"
                      value="<?php echo $_SESSION['cust_phone']; ?>" maxlength="10" minlength="10" required>
                  </div>
      
      
                  <!-- Building Number -->
      
                  <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="bi bi-building"></i>
                      </span>
                    </div>
                    <input id="building" type="text" name="building" placeholder="building Number" maxlength="10" required
                      class="form-control bg-white border-left-0 border-md" value="<?php echo $_SESSION['cust_building']; ?>">
                  </div>
      
                  <!-- Street -->
      
                  <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="bi bi-signpost"></i>
                      </span>
                    </div>
                    <input id="street" type="text" name="street" placeholder="Street Name" maxlength="15" required
                      class="form-control bg-white border-left-0 border-md" value="<?php echo $_SESSION['cust_street']; ?>">
                  </div>
      
                  <!-- District -->
      
                  <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="bi bi-geo-alt-fill"></i>
                      </span>
                    </div>
                    <input id="district" type="text" name="district" placeholder="District" maxlength="15" required
                      class="form-control bg-white border-left-0 border-md" value="<?php echo $_SESSION['cust_dist']; ?>">
                  </div>
      
                  <!-- Pincode -->
      
                  <div class="input-group col-lg-12 mb-4" style="max-width: 500px;">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="bi bi-mailbox"></i>
                      </span>
                    </div>
                    <input id="pincode" type="text" name="pincode" placeholder="Pincode" minlength="6" maxlength="6" required
                      class="form-control bg-white border-left-0 border-md" value="<?php echo $_SESSION['cust_pin']; ?>">
                  </div>
      
      
                  <!-- Submit Button -->
                  <div class=" d-flex justify-content-center" style="display: block;">
                    <div class="form-group  " style="display: block;">
                      <meta http-equiv = "refresh" content = " time ; url = admin_user.php?custid=<?php echo $rows['cust_email']; ?>"/>
                      <button type="submit" class="btn" style="border: 2px solid grey;margin-right: 20px;" id="item_add_cart">Update User</button>
                       
                    </div>
                    <div class="form-group ">

                    <?php   
                            require_once('php/connection.php');
                            $username = $_SESSION['cust_email'];
                            
                            $sql_fetch1 = "SELECT * FROM login WHERE username = '$username'";
                            $result1 = mysqli_query($conn,$sql_fetch1);
                            
                            while($rows1=$result1->fetch_assoc())
                            { 
                              if($rows1['username'] == $_SESSION['cust_email']) {
                                $status = $rows1['status'];
                              }
                            }
                            if($status == 'Active') {
                                                        
                        ?>
                      <a class="btn"  id="red-button" href="php/admin_cust_deactivate.php?username=<?php echo $_SESSION['cust_email']; ?>">Deactivate</a>
                        
                      <?php
                            }
                            else  {
                            ?>
                              <a class="btn" id="green-button"  href="php/admin_cust_activate.php?username=<?php echo $_SESSION['cust_email']; ?>">Activate</a>
                          <?php  
                          }
                          ?>
                    </div>
                  </div>
      
      
      
                </div>
              </form>
            </div>
          </div>
      </div>
      </div>

      <hr style="margin-bottom: 10px;">

    <!-- Footer -->
    <footer class="page-footer font-small pt-4">

        

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1" style="font-size: 13px;">© 2020 Copyright
        </div>

    </footer>

    </body>
</html>