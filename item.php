<!DOCTYPE html>
<?php
require_once('php/item_action.php');
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
                        <input class="form-control" style="font-size: small;border-right:white" name="search"id="admin-item-input" autocomplete="off" type="Search"
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
    <?php
    $item_image = $_SESSION['item_image'];
    ?>

    <div style="display: flex;width: 100%;min-height: 500px;">
        <div style="width: 70%;display: flex;justify-content: space-around;">
            <img class="card-img-top" style="height:300px;width:300px;object-fit:cover;margin-top: 40px;object-position: 0px 20%;"
                            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item_image); ?>">
        </div>
        <?php 
            $subcat_id = $_SESSION['subcat_id'];
            $query = "SELECT * FROM sub_category WHERE subcategory_id = '$subcat_id'";
            $query_exe = mysqli_query($conn,$query);
            $query_ = mysqli_fetch_assoc($query_exe);

            $cat_id = $query_['category_id'];
            $query1 = "SELECT * FROM category WHERE category_id = '$cat_id'";
            $query1_exe = mysqli_query($conn,$query1);
            $query1_ = mysqli_fetch_assoc($query1_exe);
            ?>
        <div style="width: 100%;display: flex;justify-content: flex-start;flex-direction: column;">
            <p style="margin: 20px 35px;font-size: 15px;"><?php echo $query1_['category_name']; ?>-><?php echo $query_['subcategory_name'];?></p>
            <div style="min-height: 200px;">
            <div style="max-width: 500px;">
                <p style="font-size: 54px;font-weight: bold; margin:  0 0 0 2rem ;">
                    <?php echo $_SESSION['item_name']; ?>
                </p>
            </div>
            <p style="margin: 0 37px;font-size: 15px;">Veg/Non-veg</p>
            <p style="margin: 15px 35px;font-size: 30px;font-weight: bold;">Rs 
                <?php echo $_SESSION['price']; ?>
            </p>
            <p style="margin: 30px 37px;font-size: 18px;">
                <?php echo $_SESSION['description']; ?>
            </p>
            </div>
            <div style="display: flex;">
            <a href="cart.php?item_id=<?php echo $_SESSION['item_id']; ?>" role="button" id="item_add_cart"
                class="btn btn-lg " style="width: 150px;margin-left: 36px;margin-top:20px;border: 2px solid grey;">Add to Cart</a>
            </div>
        </div>

    </div>






    <hr style="margin-bottom: 10px;">

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



</body>

</html>