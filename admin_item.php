<?php
require_once('php/item_action.php');
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

    <form action="php/admin_item_update.php" method='POST'>
    <div style="display: flex;width: 100%;min-height: 500px;">
      <div style="width: 70%;display: flex;justify-content: space-around;">
        <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($_SESSION['item_image']); ?>" alt="Card image cap"
          style="height: 300px;width: fit-content;margin-top: 15%;">
      </div>
      <div style="width: 100%;display: flex;justify-content: flex-start;flex-direction: column;">
        
        <div style="min-height: 200px;">
          <div style="max-width: 500px;">
            <input id="admin-item-input" name="itemname"
              style="font-size: 54px;font-weight: bold; margin:  70px 0 0 2rem ; border: 0;background-color: rgba(0, 0, 0, 0);"
              value="<?php echo $_SESSION['item_name']; ?>">

          </div>
          <p style="margin: 0 37px;font-size: 15px;">Veg/Non-veg</p>
          <div style="display: flex;flex-direction: row;">
            <div>
          <p style="margin: 15px 0 0 35px;font-size: 30px;font-weight: bold;width: fit-content;">Rs</p>
        </div>
        <div>
          <input id="admin-item-input" name="price"
            style="margin: 15px 0;font-size: 30px;font-weight: bold;border: 0;background-color: rgba(0, 0, 0, 0);"
            value=" <?php echo $_SESSION['price']; ?>">
          </div>
          </div>
          <br>

          <input id="admin-item-input" name="description"
            style=" margin: 20px 37px;font-size: 18px;border: 0;background-color: rgba(0, 0, 0, 0);" value="<?php echo $_SESSION['description']; ?>">

        </div>
        
        <div style="display: flex;">
          <?php if($_SESSION['item_status']=='Active')    {
                    ?>
          <a href="php/admin_item_deactivate.php?item_id=<?php echo $_SESSION['item_id']; ?>" role="button"
            id="item_add_cart" class="btn btn-lg "
            style="min-width: 150px;margin-left: 36px;margin-top:20px;border: 2px solid red;color: red;">DeActivate</a>
          <?php }
                else {
                    ?>
          <a href="php/admin_item_activate.php?item_id=<?php echo $_SESSION['item_id']; ?>?subcat_id=<?php echo $_SESSION['subcat_id']?>"
            role="button" id="item_add_cart" class="btn btn-lg "
            style="min-width: 150px;margin-left: 36px;margin-top:20px;border: 2px solid green;color: green;">Activate</a>
          <?php }
                ?>

          <input name="updateitem" type="submit" class="btn btn-lg" id="item_add_cart"
            style="min-width: 150px;margin-left: 36px;margin-top:20px;border: 2px solid grey;" value="Update Item">
        </div>
      </div>
    </form>

    </div>






    <hr style="margin-bottom: 10px;">

    <!-- Footer -->
    <footer class="page-footer font-small pt-4">



      <!-- Copyright -->
      <div class="footer-copyright text-center py-1" style="font-size: 13px;">© 2020 Copyright
      </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>



</body>

</html>