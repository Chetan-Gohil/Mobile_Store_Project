<?php
   include "config.php";
   
   if (isset($_SESSION['user_id'])) {
       include "header.php";
       
       $sql = "SELECT order_address.id,mobile.price,mobile.image, mobile.mobile_name, order_address.order_date,
         order_address.status FROM `order_address`
         INNER JOIN `mobile` on `order_address`.`mobile_id` = `mobile`.`id` 
          where order_address.user_id =" .$_SESSION['user_id'];
          
   
          $result = mysqli_query($conn ,$sql);
   
   
   
    ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
      <title>PHPJabbers.com | Free Mobile Store Website Template</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="assets/css/fontawesome.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/owl.css">
      <style>
        .table td, .table th{
          vertical-align:middle;
        }
      </style>
   </head>
   <body>
      <!-- ***** Preloader Start *****
         <div id="preloader">
             <div class="jumper">
                 <div></div>
                 <div></div>
                 <div></div>
             </div>
         </div>  
          ***** Preloader End ***** -->
      <!-- Header -->
      <!-- Header -->
      <!-- Page Content -->
      <div class="page-heading header-text">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Your Orders</h1>
               </div>
            </div>
         </div>
      </div>
      <br><br>
      <div class="row">
      <div class="col-xl-12 d-flex">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <div>
               <h5 class="mb-1">Your Orders</h5>
            </div>
         </div>
         <div class="table-responsive mt-4">
            <table class="table align-middle mb-0 table-hover" id="Transaction-History">
               <thead style="background-color: #e9e7e7;">
                  <tr>
                     <center>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Order date</th>
                        <th>Status</th>
                        <th>Action</th>
                     </center>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     if (mysqli_num_rows($result)) {
                         while ($row = mysqli_fetch_assoc($result)) {
                         ?>
                  <tr>
                     <td>
                        <div class="recent-product-img">
                           <img src="../admin-side\<?=$row['image'] ?>" width="50" alt="" >                                                  
                        </div>
         </div>
         </td>
         <td>
         <div class="ms-2">
         <h6 class="mb-1 font-14"><?php echo $row['mobile_name'] ?> </h6>
         </div>
         </td>
         <td>₹<?php echo $row['price'] ?></td>
         <td><?php echo $row['order_date'] ?></td>
         <td>
         <?php if ($row['status'] == "Pending"){
            $color = "info";
            
            }else if ($row['status'] == "Confirmed"){
            $color = "primary";
            } else if ($row['status'] == "Cancelled"){
            $color = "danger";
            } else if
            ($row['status'] == "Received By Customer"){
            $color = "success";
            }
            ?>
         <div class="d-flex align-items-center text-<?php echo $color ?>">
         <?php echo $row['status'] ?></td>
          <!-- <td><a href="update_category.php" class="has-arrow"><i class='bx bx-edit' style="color: green;"></i></a>&emsp;</td> -->
         <td>
          <?php if ($row['status'] != "Cancelled") { ?>
            <a class="btn btn-danger" href="user_cancel_order.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure to cancel order?')">Cancel</a></td>
          <?php } ?>
         </tr>
         <?php }
            } else { ?>
         <tr>
         <td colspan="8" align="center">No Record Found</td>
         </tr>
         <?php } ?>
         </tbody>
         </tfoot>
         </table>
         </div>
         <?php
         include "footer.php";
         ?>
      </div>
      <?php
         }else {
           redirect("login");
         }
         ?>