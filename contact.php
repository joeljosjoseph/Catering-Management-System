<!DOCTYPE html>
<html lang="en">

<!--HEAD-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catering Management | contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/Home.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
  <!--header-->

  <nav class="navbar navbar-expand-lg navbar-light " style="flex-direction: column;display: flex; ">

    <!-- division 1 -->

    <div id="container-1 " class="w-100">
      <div class="d-flex justify-content-between w-100 " style="padding-left: 37px;">

        <!-- Logo -->

        <a href="contact.php"><img src="image/logo.png" style=" height:80px ;width:70px;"></a>
        <div style="margin:auto">

          <!-- Search Bar -->

          <form class="d-flex input-group" style="width:900px;height: 30px;" method="POST" action="search.php">
            <input class="form-control" style="font-size: small;border-right:white" type="Search" name="search" placeholder="Search "
              aria-label="Search" id="admin-item-input" autocomplete="off">
            <button class="input-group-text" type="submit" style="background-color: white;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg></button>
              </form>
        </div>

        <!-- Custom Menu and Profile -->

        <div style="margin: auto 0 auto 0;padding-right: 30px;">
          <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg"
              style="height: 30px;width:50px;padding-right:10px;color:grey" fill="currentColor" class="bi bi-cart"
              viewBox="0 0 16 16">
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg></a>
          <a href="signIn.php"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="50px" color="grey"
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
        <ul class="navbar-nav navbar-nav-scroll d-flex " id="navbar-nav"
          style="--bs-scroll-height: 100px;margin:10px 0;align-items:flex-end;">
          <li class="nav-item" id="nav_1">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>

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

  <!--section 1 image-->
  <div class="container" style="width: 100%;">
    <img src="image/contact.jpg"
      style="height:500px;width:1519px;object-fit: cover;min-width:fit-content;filter: brightness(75%);">

    <!--  contact us details-->
    <div style="display:flex;width:100%;justify-content: center;position: absolute;top: 500px;margin-bottom: 90px;">
      <div>
        <div style="background-color: white;padding: 50px;width: 500px;margin-right: 70px;">
          <p style="font-size: 19px;margin-bottom: 40px;margin-left: 10px;font-weight: 500;">CheckOut Our Social Media :</p>



          <p><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png" style="width:25px;height:25px">
            cateringservice</p>
          <p><img src="https://img.icons8.com/fluency/50/000000/facebook-new.png" style="width:25px;height:25px">
            cateringms</p>
          <p><img src="https://img.icons8.com/color/48/000000/youtube-play.png" style="width:25px;height:25px">
            cateringservice</p>
          <p style="margin-left: 2px;"><img
              src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-gmail-social-media-justicon-flat-justicon.png"
              style="width:20px;height:20px"> cateringservice@gmail.com</p>
          <p style="margin-left: 2px;"><img
              src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-gmail-social-media-justicon-flat-justicon.png"
              style="width:20px;height:20px"> cateringms@gmail.com</p>

        </div>
      </div>

      <div>
        <div style="background-color: white; padding: 50px;width: 500px;text-align: center;">
            <img src="https://img.icons8.com/color/48/000000/address--v2.png"/>
          <p style="font-size: 19px;margin-bottom: 20px;font-weight: 500;">Location:</p>
          <div style="margin-left: 20px;">
            <p  style="margin-bottom: 10px;font-size: 17px;">Jawahar Nagar ,</p>
            <p  style="margin-bottom: 10px;font-size: 17px;">Kadavanthara , Ernakulam,</p>
            <p style="margin-bottom: 10px;font-size: 17px;">Kerala , 682020</p>
          </div>
          <img src="https://img.icons8.com/ios/50/000000/phone.png" style="margin-top: 30px;max-width: 50px;max-height: 50px;"/>
          <p style="font-size: 19px;margin: 10px;font-weight: 500;">Contact our personnel:</p>
          <div style="display: flex;flex-direction: row;justify-content: center;">
          <img src="https://img.icons8.com/office/16/000000/whatsapp--v2.png" style="width:20px;height:20px;margin-top: 10px;">
          <p style="font-size: 18px;margin: 6px 0 5px 3px;">
            9048228641</p>
            </div>
            <div style="display: flex;flex-direction: row;justify-content: center;">
          <img src="https://img.icons8.com/office/16/000000/whatsapp--v2.png" style="width:20px;height:20px;margin-top: 10px;">
          <p style="font-size: 18px;margin: 6px 0 5px 3px;">
            9048221222</p>
          </div>
          <div style="display: flex;flex-direction: row;justify-content: center;">
            <img src="https://img.icons8.com/material-two-tone/24/000000/phone.png" style="width:20px;height:20px;margin-top: 10px;">
            <p style="font-size: 18px;margin-top: 6px;margin-left: 3px;">
              0484-2113109999</p>
            </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Footer -->
    <footer class="page-footer font-small pt-4" style="margin-top: 440px;">

        

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1" style="font-size: 13px;">© 2020 Copyright
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         
</body>

</html>