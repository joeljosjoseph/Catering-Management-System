<?php
require_once('php/cartAddItem.php');
?>
<html lang="en">

<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Management | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

                <a href="home.php"><img src="image/logo.png" style=" height:80px ;width:70px;"></a>
                <div style="margin:auto">

                    <!-- Search Bar -->

                    <form class="d-flex input-group" style="width:900px;height: 30px;"  method="POST" action="search.php">
                        <input class="form-control" style="font-size: small;border-right:white" id="admin-item-input" autocomplete="off" name="search" type="Search"
                            placeholder="Search " aria-label="Search">
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
                    <a href="php/signin_check.php"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="50px"
                            color="grey" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
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
                    </li>
                </ul>
            </div>

            <!-- Navbar -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                <ul class="navbar-nav navbar-nav-scroll d-flex " id="navbar-nav"
                    style="--bs-scroll-height: 100px;margin:10px 0;align-items:flex-end;">
                    <li class="nav-item" id="nav_1">
                        <a class="nav-link" href="home.php">Home</a>

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
        <h4 style="margin-right: 900px;margin-top: 30px;font-weight: 500;margin-bottom: 50px;">Your Orders</h4>
        <?php
        if( isset($_SESSION['ordered']) )
        {
            ?>
            <div class="alert alert-success alert-custom" role="alert" style="width: 1200px;" style="text-align: center;">
            <?php echo $_SESSION['ordered'];
            ?>
            </div>
            <?php
        
                unset($_SESSION['ordered']);   
        }    

        if( isset($_SESSION['ordercancel']) )
        {
            ?>
            <div class="alert alert-danger alert-custom" role="alert" style="width: 1200px;" style="text-align: center;">
            <?php echo $_SESSION['ordercancel'];
            ?>
            </div>
            <?php
        
                unset($_SESSION['ordercancel']);   
        }  
        $cust_id = $_SESSION['cust_id'];
        $query = "SELECT * FROM menumaster WHERE cust_id = '$cust_id' AND menumaster_status = 'Inactive' ORDER BY menumaster_id DESC";
        $query_e = mysqli_query($conn,$query);
        
        if(mysqli_num_rows($query_e))
        {
        ?>
        <div style="display: flex;">
            <table class="table" style="width: 1200px;background-color: white ;">
                <thead>
                    <th>Order Date</th>
                    <th>Order Details</th>
                    <th>Venue Details</th>
                    <th>Order Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
        while($rows=$query_e->fetch_assoc())
        { 
            
            $mm_id = $rows['menumaster_id'];
            $query1 = "SELECT * FROM orders WHERE menumaster_id = '$mm_id' ";
            $query1_ = mysqli_query($conn,$query1);
            $query_exe = mysqli_fetch_assoc($query1_);
            $_SESSION['order_id'] = $query_exe['order_id'];

            $query2 = "SELECT item_id FROM menuchild WHERE menumaster_id = '$mm_id'";
            $query2_ = mysqli_query($conn,$query2);
            $query2_exe = mysqli_num_rows($query2_);
            
            ?>
                    <tr style="height: 150px;">
                        <td>
                            <p style="font-size: 16px">
                                <?php echo $query_exe['order_date'];?>
                            </p>
                        </td>
                        <td>
                            <p style="font-size: 16px">
                                <?php echo $query_exe['order_id'];?><br>
                                Total Amount : Rs
                                <?php echo $rows['tot_amount'];?><br>
                                Total Items :
                                <?php echo $query2_exe; ?>
                            </p>
                        </td>
                        <td>
                            <p style="font-size: 16px">
                                <?php echo $rows['v_street']; ?>,
                                <?php echo $rows['v_district']; ?>,
                                <?php echo $rows['v_pincode']; ?>
                                <br>
                                Date :
                                <?php echo $rows['v_date']; ?>
                            </p>

                        </td>
                        <?php
                        if($query_exe['order_status'] == 'Ordered')
                        {
                            ?>
                        <td>
                            <p style="color: goldenrod;"><?php echo $query_exe['order_status'];?></p>
                        </td>
                        <?php
                    }
                    else if($query_exe['order_status'] == 'Delivered')
                    {
                        ?>
                        <td>
                            <p style="color: green;"><?php echo $query_exe['order_status'];?></p>
                        </td>
                        <?php
                    }
                    else
                    {
                     ?>
                     <td>
                        <p style="color: red;"><?php echo $query_exe['order_status'];?></p>
                    </td>    
                    <?php
                    }
                    ?>
                        <td>
                            <a href="order_view.php?mm_id=<?php echo $mm_id;?>" class="btn"
                                style="border: 2px solid grey;font-size: 14px;">View Order</a>
                            <?php
                            if($query_exe['order_status'] == 'Ordered')
                            {
                                ?><br>
                            <a href="php/order_cancel.php" class="btn"
                                style="border: 2px solid red;color:red;font-size: 14px;margin-top: 10px;">Cancel
                                Order</a>
                            <?php
                            }
                            ?>

                        </td>

                        <?php
        }

        ?>
                </tbody>
            </table>
        </div>
        <?php
    }
    else
    {
        ?>
        <div class="container" style="background-color: white;width: 1200px; margin-top: 20px;">
            <h4 style="margin-right: 900px;margin-top: 30px;">Cart</h4>
            <img src="https://www.graphicsprings.com/filestorage/stencils/9f2ebf8b33cd9c545eb7170be3c2f1fa.png?width=500&height=500"
                style="height:300px;width:300px;">
            <h3>No Orders Yet</h3>
            <p style="font-size: 17px;margin-bottom: 30px;font-weight: 300;">Search through our items create your own Menu.</p>
            <a href="shopFood.php" class="btn" id="item_add_cart" style="margin-bottom: 50px;border: 2px solid grey;">Shop
                Now</a>
        </div>
        <?php
    }
    ?>
    </div>

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