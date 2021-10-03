<!DOCTYPE html>
<?php
require_once('php/connection.php');
session_start();

function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $search=test_input($_POST["search"]);
  }

$sql_search="SELECT * FROM item WHERE LOWER(item_Name) LIKE LOWER('%$search%') OR LOWER(description) LIKE LOWER('%$search%') OR subcategory_id IN (SELECT subcategory_id FROM sub_category WHERE LOWER(subcategory_name) LIKE LOWER('%$search%') OR category_id IN (SELECT category_id FROM category WHERE LOWER(category_name) LIKE LOWER('%$search%')))";
$sql_search_ = mysqli_query($conn,$sql_search)
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
    <link href="css/shopFood.css" rel="stylesheet">
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

    <!-- products section -->
    <div class="container" style="width: 80%;">
        <div class="d-flex flex-row" id="sort-results-div">
            <div class="ml-auto mr-lg-4">
               
            </div>
        </div>
        <div class="row d-flex" id="item-card-1" style="justify-content: space-evenly;flex-wrap: wrap;">
            
            <?php  

            if(mysqli_num_rows($sql_search_))
            {
                $resultno = mysqli_num_rows($sql_search_);
                ?>
                <h4 style="margin-left:150px; margin-top: 10px;">Products</h4>
                <p style="margin-left: 180%;">Search Results : <?php echo $resultno ?> </p>
                <?php
                while($row1=$sql_search_->fetch_assoc())
                { 
                    ?>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card" style="height: 333px;margin:20px;width: 250px;" id="explore-item">
                    <a href="item.php?item_id=<?php echo $row1['item_id']; ?>">
                     <img class="card-img-top" style="height:190px;width:240px;object-fit:fill;margin: 4px;"
                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['item_image']); ?>">
                    </a>
                        <div class="card-body">
                            <a href="item.php?item_id=<?php echo $row1['item_id']; ?>" style="text-decoration: none;color: inherit;">
                        <p style="font-size: 18px;font-weight: bold;margin-left: 20px;"><?php echo $row1['item_name'];?>
                            
                        </p>
                            </a>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted" style="margin-left: 20px;"> Rs <?php echo $row1['price'] ?> 
                            </div>
                            
                        </div>
                        <a href="cart.php?item_id=<?php echo $row1['item_id']; ?>" role="button"
                            class="btn w-100 rounded my-2" type="submit">Add to cart</a>

                    </div>
                </div>
            </div>
        
            <?php 
        }
    }
    else {
        ?>
        <div class="container" style="width: 80%;height: 500px;justify-content: initial;">
            <img src="image/search.gif" style="margin-top: 100px;"/>
            <p style="font-size: 24px;font-weight: 400;margin-top: 100px;">No Search Results</p>
        </div>
        <?php
    }
    ?>

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