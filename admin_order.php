

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


          <div>
            <p style="font-size: 23px;margin: 50px 0 25px 400px;">Order Summary:</p>
        </div>
    
        <div class="container">
            <div class="row" style="display: flex; justify-content: center;flex-direction: column;">
                <div style="width: fit-content;">
                    <table class="table" style="width: 700px;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product</th>
                                <th style="width: 20px;text-align: center;">Price</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php   // LOOP TILL END OF DATA 
                              require_once('php/connection.php');
                              
    
                              
                              $menumaster_id = mysqli_real_escape_string($conn,$_GET['mm_id']);
                              
                              $result = "SELECT * FROM menumaster WHERE menumaster_id = '$menumaster_id'";
                              $result_ex = mysqli_query($conn,$result);
                              $res_2 = mysqli_fetch_array($result_ex);
                              $cust_id = $res_2['cust_id'];
                              
    
                              $sql_fetch = "SELECT * FROM menuchild WHERE menumaster_id = '$menumaster_id'";
    
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
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows1['item_image']); ?>" style="height: 70px;width: 70px;object-fit: fill;">
                                </td>
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
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
    
    
            <!-- Payment Details -->
            <div style="display: flex;flex-direction: column;">
                <div>
                    <p style="font-size: 23px;margin: 80px 0 25px 0;">Card Details:</p>
                </div>
    
                <div style="display: flex;justify-content: center;margin-left: 0px;">
                    <div style="margin-top: 15px;">
                        <?php 
                $payment_exe = "SELECT * FROM card WHERE cust_id = '$cust_id'";
                $payment = mysqli_fetch_assoc(mysqli_query($conn,$payment_exe));
                
               
           
                    
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
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <?php
            $exec = "SELECT * FROM orders WHERE menumaster_id = '$menumaster_id'";
            $exec_ = mysqli_query($conn,$exec);
            $exe = mysqli_fetch_assoc($exec_);

                $order_status = $exe['order_status'];
                if($order_status == 'Ordered')
                {
                    ?>
                    <div>
                        <a href="php/admin_order_cancel.php" style="border: 2px solid red;color: red;margin-left: 1000px;" id="admin-cancel-order" class="btn">Cancel Order</a>
                    </div>
                    <?php
                }
                ?>
      
    



          <hr style="margin-bottom: 10px;">

    <!-- Footer -->
    <footer class="page-footer font-small pt-4">

        

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1" style="font-size: 13px;">© 2020 Copyright
        </div>

    </footer>

    </body>
</html>