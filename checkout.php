<?php
require_once('php/cartAddItem.php');
?>
<html lang="en">

<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Management | Checkout</title>
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
                <div style="margin:auto">

                    <!-- Search Bar -->

                    <form class="d-flex input-group" style="width:900px;height: 30px;"  method="POST" action="search.php">
                        <input class="form-control" style="font-size: small;border-right:white" name="search" type="Search"
                            placeholder="Search " aria-label="Search" id="admin-item-input" autocomplete="off">
                        <button class="input-group-text" type="submit" style="background-color: white;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg></button>
                    </form>
                </div>

                <!-- Custom Menu and Profile -->

                <div style="margin: auto 0 auto 0;padding-right: 30px;">
                    <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg"
                            style="height: 30px;width:50px;padding-right:10px;color:grey" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></a>
                    <a href="php/signin_check.php"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="50px" color="grey"
                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
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
                        <a class="nav-link " href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-list mt-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
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
                <ul class="navbar-nav navbar-nav-scroll d-flex " id="navbar-nav"
                    style="--bs-scroll-height: 100px;margin:10px 0;align-items:flex-end;">
                    <li class="nav-item" id="nav_1">
                        <a class="nav-link " href="home.php">Home</a>

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

    <div>
        <p style="font-size: 23px;margin: 50px 0 25px 400px;">Order Summary:</p>
    </div>

    <div class="container">
        <?php
                if( isset($_SESSION['venueadd']) )
                {
                    ?>
                    <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="text-align: center;">
                    <?php echo $_SESSION['venueadd'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['venueadd']);
                
                }

                if( isset($_SESSION['cardadd']) )
                {
                    ?>
                    <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="text-align: center;">
                    <?php echo $_SESSION['cardadd'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['cardadd']);
                
                }

                if( isset($_SESSION['cardedit']) )
                {
                    ?>
                    <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="text-align: center;">
                    <?php echo $_SESSION['cardedit'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['cardedit']);
                
                }

                if( isset($_SESSION['cardnull']) )
                {
                    ?>
                    <div class="alert alert-warning alert-custom" role="alert" style="width: 75%;" style="text-align: center;">
                    <?php echo $_SESSION['cardnull'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['cardnull']);
                
                }

                if( isset($_SESSION['venuenull']) )
                {
                    ?>
                    <div class="alert alert-warning alert-custom" role="alert" style="width: 75%;" style="text-align: center;">
                    <?php echo $_SESSION['venuenull'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['venuenull']);
                
                }
                
                ?>
        <div class="row" style="display: flex; justify-content: center;flex-direction: column;">
            <div style="width: fit-content;">
                <table class="table" style="width: 700px;">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th style="width: 20px;text-align: center;">Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php   // LOOP TILL END OF DATA 
                          require_once('php/connection.php');
                          

                          $cust_user = $_SESSION['cust_user'];
                          $res = "SELECT cust_id FROM customer WHERE username = '$cust_user'";
                          $cust_id2 = mysqli_query($conn,$res);
                          $cust_id1 = mysqli_fetch_array($cust_id2);
                          $cust_id = $cust_id1['cust_id'];
                          
                          $_SESSION['cust_id'] = $cust_id;
                          
                          $result = "SELECT * FROM menumaster WHERE cust_id = '$cust_id' AND menumaster_status = 'Active'";
                          $result_ex = mysqli_query($conn,$result);
                          
                          $res_2 = mysqli_fetch_array($result_ex);
                          $res_1 = $res_2['menumaster_id'];
                          $_SESSION['menumaster_id'] = $res_1;
                          

                          $sql_fetch = "SELECT * FROM menuchild WHERE menumaster_id = '$res_1'";

                          $result1=mysqli_query($conn,$sql_fetch);

                            while($rows=$result1->fetch_assoc())
                           {    
                                $item_id = $rows['item_id'];
                               $sql_fetch1 = "SELECT * FROM item WHERE item_id = '$item_id'";
                               $result2=mysqli_query($conn,$sql_fetch1);
                               while($rows1=$result2->fetch_assoc())
                               {
                                
                                
                                                        
                        ?>
                        <tr>
                            <td>


                                <?php echo $rows1['item_name'];?>

                            </td>

                            <td style="width: 90px;">

                                Rs.
                                <?php echo $rows1['price'];?>

                            </td>


                        </tr>
                        <?php
                    }
                }
               
                  ?>

                    </tbody>
                </table>
            </div>
            <div class="row" style="display:flex;justify-content:flex-end;margin:5px 10px ;width: auto;">
                <table style="width: 250px;">
                    <thead>
                        <th></th>
                        <th></th>

                    </thead>
                    <tbody>
                        <tr>
                            <td>

                                <p>Quantity</p>
                            </td>

                            <td style="text-align: end;">
                                <p>
                                    <?php echo $res_2['quantity'];?>
                                </p>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <p><strong>Total</strong></p>
                            </td>

                            <td style="text-align: end;">
                                <p><strong>Rs.
                                        <?php echo $res_2['tot_amount'];?>
                                    </strong></p>

                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="container" style="display: flex;width: 700px;flex-direction: row;justify-content: space-between;">

        <!-- Event Details -->
        <div style="display: flex;flex-direction: column;">
            <div>
                <p style="font-size: 23px;margin: 117px 0 25px 0">Event Details:</p>
            </div>

            <div style="display: flex;justify-content: center;">
                <div style="margin-top: 15px;">
                    <?php 
                if($res_2['v_street'] == NULL)  {
            ?>


                    <button type="button" id="item_add_cart" data-toggle="modal" data-target="#event-add-modal"
                        class="btn-sm" style="border: 1px solid grey;color: grey;text-decoration: none;">Add
                        Event Details</button>

                    <?php
                }
                else    {
                    
            ?>
                    <div style="margin-left: 0px;">
                        <Address style="font-size: 15px">
                            Address:
                            <?php echo $res_2['v_street']; ?>,
                            <?php echo $res_2['v_district']; ?>,
                            <?php echo $res_2['v_pincode']; ?>
                        </Address>
                        <p style="font-size: 15px">Date :
                            <?php echo $res_2['v_date']; ?>
                        </p>
                        <p style="font-size: 15px">Time :
                            <?php echo $res_2['v_time']; ?>
                        </p>
                        <button type="button" id="item_add_cart" data-toggle="modal" data-target="#event-edit-modal"
                            class="btn-sm" style="border: 1px solid grey;color: grey;text-decoration: none;">Edit
                            Details</button>
                    </div>
                        <?php
            }
            ?>
                    </div>
                </div>
            </div>
        





        <!-- Payment Details -->
        <div style="display: flex;flex-direction: column;">
            <div>
                <p style="font-size: 23px;margin: 80px 0 25px 0;">Payment Details:</p>
            </div>

            <div style="display: flex;justify-content: center;margin-left: 0px;">
                <div style="margin-top: 15px;">
                    <?php 
            $payment_exe = "SELECT * FROM card WHERE cust_id = '$cust_id'";
            $payment = mysqli_fetch_assoc(mysqli_query($conn,$payment_exe));
            
            if($payment == NULL)  {
        ?>


                    <button type="button" id="item_add_cart" data-toggle="modal" data-target="#card-add-modal"
                        class="btn-sm" style="border: 1px solid grey;color: grey;text-decoration: none;">Add Card
                        Details</button>

                    <?php
            }
            else    {
                
        ?>
                    <div style="margin-left: 0px;">
                        <Address style="font-size: 15px">
                            Card Details :
                            <?php echo $payment['card_type']; ?>
                            <?php echo $payment['card_number']; ?>
                        </Address>
                        <p style="font-size: 15px">Expiry :
                            <?php echo $payment['expiry']; ?>
                        </p>
                        <button type="button" id="item_add_cart" data-toggle="modal" data-target="#card-edit-modal"
                            class="btn-sm" style="border: 1px solid grey;color: grey;text-decoration: none;">Edit
                            Card</button>
                    </div>
                        <?php
        }
        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Add Event Modal -->

    <div class="modal fade .bd-example-modal-lg" id="event-add-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="php/venue_add.php?mm_id=<?php echo $res_2['menumaster_id'];?>" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Venue Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>

                    </div>

                    <!-- modal body -->

                    <div class="modal-body">


                        <!-- Add District -->

                        <div class="form-group">
                            <label for="venue-district" class="col-form-label">District</label>
                            <input type="text" class="form-control admin-item-input" id="venue-district"
                                name="v_district" maxlength="15" required>
                        </div>

                        <!-- Add Street -->

                        <div class="form-group">
                            <label for="venue-street" class="col-form-label">Street</label>
                            <input type="text" class="form-control admin-item-input" id="venue-street" name="v_street" maxlength="15"
                                required>
                        </div>

                        <!-- Add Pin Code -->

                        <div class="form-group">
                            <label for="venue-pincode" class="col-form-label">Pin Code</label>
                            <input type="text" class="form-control admin-item-input" id="venue-pincode"
                                name="v_pincode" required minlength="6" maxlength="6">
                        </div>

                        <!-- Add Date -->
                        <?php 
                        $Date = date('Y-m-d');
                        ?>
                        <div class="form-group">
                            <label for="venue-date" class="col-form-label">Date of Event</label>
                            <input type="date" class="form-control admin-item-input" min="<?php echo date('Y-m-d', strtotime($Date. ' + 7 days')); ?>" max="<?php echo date('Y-m-d', strtotime($Date. ' + 2 months')); ?>" id="venue-date" name="v_date"
                                required>
                        </div>

                        <!-- Add District -->

                        <div class="form-group">
                            <label for="venue-time" class="col-form-label">Time</label>
                            <input type="time" class="form-control admin-item-input" id="venue-time" name="v_time"
                                required>
                        </div>
                        <!-- Modal footer(buttons) -->

                        <div class="modal-footer">
                            <button type="button" class="btn" id="item_add_cart" data-dismiss="modal"
                                style="border: 2px solid grey;color: grey;width: 80px;">Cancel</button>
                            <button type="submit" class="btn" id="cart-checkout"
                                style="border: 2px solid green;color: green;width: 80px;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Edit Event Modal -->

    <div class="modal fade .bd-example-modal-lg" id="event-edit-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="php/venue_add.php?mm_id=<?php echo $res_2['menumaster_id'];?>" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Venue Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>

                    </div>

                    <!-- modal body -->

                    <div class="modal-body">


                        <!-- Edit District -->

                        <div class="form-group">
                            <label for="venue-district" class="col-form-label">District</label>
                            <input type="text" class="form-control admin-item-input" id="venue-district"
                                name="v_district" value="<?php echo $res_2['v_district'];?>" required>
                        </div>

                        <!-- Edit Street -->

                        <div class="form-group">
                            <label for="venue-street" class="col-form-label">Street</label>
                            <input type="text" class="form-control admin-item-input" id="venue-street" name="v_street"
                                value="<?php echo $res_2['v_street'];?>" required>
                        </div>

                        <!-- Edit Pin Code -->

                        <div class="form-group">
                            <label for="venue-pincode" class="col-form-label">Pin Code</label>
                            <input type="number" class="form-control admin-item-input" id="venue-pincode"
                                name="v_pincode" value="<?php echo $res_2['v_pincode'];?>" required>
                        </div>

                        <!-- Edit Date -->
                        <?php 
                        $Date = date('Y-m-d');
                        ?>

                        <div class="form-group">
                            <label for="venue-date" class="col-form-label">Date of Event</label>
                            <input type="date" class="form-control admin-item-input" id="venue-date" min="<?php echo date('Y-m-d', strtotime($Date. ' + 7 days')); ?>" max="<?php echo date('Y-m-d', strtotime($Date. ' + 2 months')); ?>" name="v_date"
                                value="<?php echo $res_2['v_date'];?>" required>
                        </div>

                        <!-- Edit District -->

                        <div class="form-group">
                            <label for="venue-time" class="col-form-label">Time</label>
                            <input type="time" class="form-control admin-item-input" id="venue-time" name="v_time"
                                value="<?php echo $res_2['v_time'];?>" required>
                        </div>
                        <!-- Modal footer(buttons) -->

                        <div class="modal-footer">
                            <button type="button" class="btn" id="item_add_cart" data-dismiss="modal"
                                style="border: 2px solid grey;color: grey;width: 80px;">Cancel</button>
                            <button type="submit" class="btn" id="cart-checkout"
                                style="border: 2px solid green;color: green;width: 80px;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Add Card Modal -->

    <div class="modal fade .bd-example-modal-lg" id="card-add-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="php/card_add.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Card Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>

                    </div>

                    <!-- modal body -->

                    <div class="modal-body">


                        <!-- Add card number-->

                        <div class="form-group">
                            <label for="card-number" class="col-form-label">Card Number</label>
                            <input class="form-control admin-item-input" id="card-number" minlength="16" maxlength="16"
                                name="c_number" required>
                        </div>

                        <!-- Add card bank name-->

                        <div class="form-group">
                            <label for="card-bname" class="col-form-label">Bank Name</label>
                            <input type="text" class="form-control admin-item-input" id="card-bname" name="c_bname"
                                required>
                        </div>

                        <!-- Add card type-->

                        <div class="form-group">
                            <label for="card-type" class="col-form-label">Card Type</label>
                            <select class="form-control admin-item-input" id="card-type" name="c_type">
                                <option value="Debit">Debit Card</option>
                                <option value="Credit">Credit Card</option>
                            </select>
                        </div>

                        <!-- Add card expiry-->

                        <div class="form-group">
                            <label for="card-expiry" class="col-form-label">Expiry</label>
                            <input type="date" class="form-control admin-item-input" id="card-expiry" name="c_expiry"
                                required min="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d', strtotime($Date. ' + 5 years')); ?>">
                        </div>
                        <!-- Modal footer(buttons) -->

                        <div class="modal-footer">
                            <button type="button" class="btn" id="item_add_cart" data-dismiss="modal"
                                style="border: 2px solid grey;color: grey;width: 80px;">Cancel</button>
                            <button type="submit" class="btn" id="cart-checkout"
                                style="border: 2px solid green;color: green;width: 80px;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Edit Card Modal -->

    <div class="modal fade .bd-example-modal-lg" id="card-edit-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="php/card_edit.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Card Details</h5>
                        <button type="button" class="btn-close" data-dismiss="modal"></button>

                    </div>

                    <!-- modal body -->

                    <div class="modal-body">


                        <!-- Edit card number-->

                        <div class="form-group">
                            <label for="card-number" class="col-form-label">Card Number</label>
                            <input class="form-control admin-item-input" id="card-number" required minlength="16"
                                maxlength="16" name="c_number" value="<?php echo $payment['card_number'];?>">
                        </div>

                        <!-- Edit card bank name-->

                        <div class="form-group">
                            <label for="card-bname" class="col-form-label">Bank Name</label>
                            <input type="text" class="form-control admin-item-input" id="card-bname" name="c_bname"
                                value="<?php echo $payment['bank_name'];?>" required>
                        </div>

                        <!-- Edit card type-->

                        <div class="form-group">
                            <label for="card-type" class="col-form-label">Card Type</label>
                            <select class="form-control admin-item-input" id="card-type" name="c_type">
                                <option value="<?php echo $payment['card_type'];?>" selected>
                                    <?php echo $payment['card_type'];?> Card
                                </option>
                                <?php 
                                if($payment['card_type'] == 'Credit')
                                {
                                    ?>
                                <option value="Debit">Debit Card</option>
                                <?php 
                                }   
                                else    {
                                    ?>
                                <option value="Credit">Credit Card</option>
                                <?php
                                }   ?>
                            </select>
                        </div>

                        <!-- Edit card expiry-->

                        <div class="form-group">
                            <label for="card-expiry" class="col-form-label">Expiry</label>
                            <input type="date" class="form-control admin-item-input" id="card-expiry" required
                                name="c_expiry" value="<?php echo $payment['expiry'];?>"  min="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d', strtotime($Date. ' + 5 years')); ?>">
                        </div>
                        <!-- Modal footer(buttons) -->

                        <div class="modal-footer">
                            <button type="button" class="btn" id="item_add_cart" data-dismiss="modal"
                                style="border: 2px solid grey;color: grey;width: 80px;">Cancel</button>
                            <button type="submit" class="btn" id="cart-checkout"
                                style="border: 2px solid green;color: green;width: 80px;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a href="php/order_action.php" class="btn" id="item_add_cart"
        style="margin: 80px 0 25px 900px;border: 2px solid grey;color: grey;">
        Place Order
    </a>





    <footer class="page-footer font-small pt-4">

        <!-- Footer Text -->
        <div class="container-fluid d-flex justify-content-between " style="padding:0 100px;">


            <!-- footer logo -->
            <div class=" mt-md-0 mt-3 d-flex ">
                <img src="image/logo.png" style="height:80px ;width:70px">
                <div class="col mt-3 mx-2">
                    <h5>Catering</h4>
                        <h5>Management System</h5>
                </div>
            </div>

            <!-- Grid column -Contact info-->
            <div>
                <h5 class=" font-weight-bold">Contact Us</h5>

                <p style="margin-bottom: 5px;"><i class="bi bi-envelope"></i> &emsp;
                    cateringmanagement@gmail.com</p>
                <p><i class="bi bi-telephone"></i> &emsp; 9994600000</p>

            </div>


        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1" style="font-size: 13px;">© 2020 Copyright
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
          window.setTimeout(function () {
            $(".alert-custom").fadeTo(1200, 0).slideUp(500, function () {
              $(this).remove();
            });
          }, 2500);
    
        });
      </script>



</body>

</html>