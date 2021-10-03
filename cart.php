<?php
require_once('php/cartAddItem.php');
?>


<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Management | Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/Home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                            placeholder="Search " aria-label="Search" >
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
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
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

                <!-- Dropdown menu  -->


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
                        <a class="nav-link" href="feedback.php ">Feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php   // LOOP TILL END OF DATA 
    require_once('php/connection.php');
    

    $cust_user = $_SESSION['cust_user'];
    $res = "SELECT cust_id FROM customer WHERE username = '$cust_user'";
    $cust_id2 = mysqli_query($conn,$res);
    $cust_id1 = mysqli_fetch_array($cust_id2);
    $cust_id = $cust_id1['cust_id'];
    
    $_SESSION['cust_id'] = $cust_id;
    
    $result = "SELECT menumaster_id FROM menumaster WHERE cust_id = '$cust_id' AND menumaster_status='Active'";
    $result_ex = mysqli_query($conn,$result);
    
    $res_2 = mysqli_fetch_array($result_ex);
    $res_1 = $res_2['menumaster_id'];
    $subtotal = 0.0;
    $tax = 0.0;
    $total = 0.0;

    if( isset($_SESSION['itemremove']) )
    {
        ?>
        <div class="container">
            <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="border: 2px solid green;text-align: center;">
        <?php echo $_SESSION['itemremove'];
        ?>
            </div>
        </div>
        <?php
    
            unset($_SESSION['itemremove']);
                
        }
    
    

    $sql_fetch = "SELECT * FROM menuchild WHERE menumaster_id = '$res_1'";

    $result1=mysqli_query($conn,$sql_fetch);
    if(mysqli_num_rows($result1))
    {
?>

    <div class="container">
        <h4 style="margin-right: 900px;margin-top: 30px;font-weight: 500;">Cart</h4>
        <div class="row" style="display: flex; justify-content: center;">
            <?php
                if( isset($_SESSION['itemexists']) )
                {
                    ?>
                    <div class="alert alert-danger alert-custom" role="alert" style="width: 75%;" style="border: 2px solid green;text-align: center;">
                    <?php echo $_SESSION['itemexists'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['itemexists']);
                
                }
                if( isset($_SESSION['itemadded']) )
                {
                    ?>
                    <div class="alert alert-success alert-custom" role="alert" style="width: 75%;" style="border: 2px solid green;text-align: center;">
                    <?php echo $_SESSION['itemadded'];
                    ?>
                    </div>
                    <?php
                
                        unset($_SESSION['itemadded']);
                
                }
                ?>
            <div class="col ">
                <table class="table" id="cart-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th></th>
                            <th style="width: 400px;">
                            <th>
                            <th></th>
                            <th class="text-center">Price</th>

                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            while($rows=$result1->fetch_assoc())
                           {    
                                $item_id = $rows['item_id'];
                               $sql_fetch1 = "SELECT * FROM item WHERE item_id = '$item_id'";
                               $result2=mysqli_query($conn,$sql_fetch1);
                               while($rows1=$result2->fetch_assoc())
                               {
                                $total = $total + $rows1['price'];
                                
                                                        
                        ?>
                        <tr>
                            <td class="col-sm-8 col-md-6" style="vertical-align:middle">
                                <div class="media d-flex">
                                    <a class="thumbnail pull-left"
                                        href="item.php?item_id=<?php echo $rows1['item_id']; ?>">
                                        <img class="media-object"
                                            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows1['item_image']); ?>"
                                            style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body" style="vertical-align:middle">
                                        <h5 class="media-heading m-1 ml-1">
                                            <?php echo $rows1['item_name'];?>
                                        </h5>

                                    </div>
                                </div>
                            </td>
                            <td>
                            <td>
                            <td>
                            <td></td>
                            <td class="col-sm-1 col-md-1 text-center" style="vertical-align:middle">
                                <strong>
                                    <?php echo $rows1['price'];?>
                                </strong>
                            </td>

                            <td class="col-sm-1 col-md-1" style="vertical-align:middle">
                                <a href="php/cartremoveitem.php?item_id=<?php echo $rows1['item_id'];?>" class="btn"
                                    id="btn-cart" style="border: 2px solid red;color: red;">
                                    Remove
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                $tot = 10 * $total;
               
                  ?>

                    </tbody>
                </table>
                <form action="checkout.php">
                    <div class="row" style="display:flex;justify-content:flex-end;margin:5px 15px ;">
                        <table style="width: 360px;">
                            <thead>
                                <th></th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>

                                        <label for="quantity">Quantity </label>
                                    </td>
                                    <td style="width: 100px;"></td>
                                    <td>
                                        <input type="number" id="quantity" name="quantity" min="10" max="1000" required
                                            class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td style="width: 20px;"></td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>


                                    </td>
                                    <td></td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label style="margin-top: 10px;"><strong>Total</strong></label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <div type="text" name="total" id="total"
                                            style="max-width: 90px; margin-top: 25px;">
                                            <p type="text" name="total" id="total" style="max-width: 70px;"><strong>Rs:
                                                    <?php echo $tot ?>
                                                </strong></p>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>


                            <div
                                style="display:flex;justify-content:flex-end;width: 100%; margin-top: 2rem; margin-left: 25px;">
                                <a href="home.php" class="btn btn-default" type="button"
                                    style="text-decoration: none;color: inherit;" id="cart-continue">
                                    Continue Shopping</a>
                                </td>
                                <td>
                                    <button type="submit" class="btn" id="cart-checkout"
                                        style=" margin-left: 25px;color: green;border: 2px solid green;">
                                        Checkout
                                    </button>
                                </td>
                            </div>
                            </tr>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    }
    else    {
        ?>

    <div class="container" style="background-color: white;width: 1200px; margin-top: 20px;">
        <h4 style="margin-right: 900px;margin-top: 30px;">Cart</h4>
        <img src="https://www.graphicsprings.com/filestorage/stencils/9f2ebf8b33cd9c545eb7170be3c2f1fa.png?width=500&height=500"
            style="height:300px;width:300px;">
        <h3>Your cart is empty</h3>
        <p style="font-size: 17px;margin-bottom: 30px;font-weight: 300;">Create a menu for your special occasion</p>
        <a href="shopFood.php" class="btn" id="item_add_cart" style="margin-bottom: 50px;border: 2px solid grey;">Shop
            Now</a>
    </div>


    <?php
    }
        ?>





    <!-- Footer -->
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

                <p style="margin-bottom: 5px;"><i class="bi bi-envelope"></i> &emsp; cateringmanagement@gmail.com</p>
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
            $('#quantity').on('blur', function () {
                var quantity = $(this).val();
                console.log(quantity);
                var total = '<?php echo $total;?>';

                if (quantity) {
                    console.log('test');
                    $.ajax({
                        type: 'POST',
                        url: 'php/cart_total.php',
                        data: ({
                            'quantity': quantity,
                            'total': total
                        }),

                        success: function (html) {
                            $('#total').html(html);
                            console.log(quantity);
                            console.log(total);
                        }
                    });
                }
            });


        });
    </script>
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