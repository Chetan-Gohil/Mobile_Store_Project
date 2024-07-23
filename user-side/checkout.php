<?php

include("config.php");

if (!isset($_SESSION['user_id'])) {
  header('location:login.php');
}
$user_id = $_SESSION['user_id'];

$select_user = $conn->prepare("SELECT * FROM `cart` Where user_id = ? ");
$select_user->bind_param("i",$user_id);
$select_user->execute();
$result = $select_user->get_result();
  if($result->num_rows > 0){
            while($fetch_details = $result->fetch_assoc()){
              $mobile_id = $fetch_details['mobile_id'];
        
              $select_user = $conn->prepare("SELECT * FROM `mobile` Where id = ? ");
              $select_user->bind_param("i",$mobile_id);
              $select_user->execute();
              $result = $select_user->get_result();
              if($result->num_rows > 0){
                  while($fetch_details = $result->fetch_assoc()){
  
          // $mobile_name = $fetch_details['mobile_name'];
          // $image = $fetch_details['image'];
          // $price = $fetch_details['price'];
          



if(isset($_POST['submit'])){

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $address = $_POST['address'];
 $country_id = $_POST['country_id'];
 $state_id   = $_POST['state_id'];
 $zipcode = $_POST['zipcode'];
 $status = 'Pending';
 $order_no = '0000'.rand(10,1000);
 $current_date = date("Y-m-d");
 

 $query = "INSERT INTO `order_address`(firstname,lastname,`address`,country_id,state_id,zipcode,user_id,status,order_no,mobile_id,order_date)
    VALUES ('$firstname','$lastname','$address','$country_id','$state_id','$zipcode','$user_id','$status',$order_no,'$mobile_id','$current_date')";
  if(mysqli_query($conn,$query)){
      $delete_query = "DELETE FROM `cart` WHERE user_id = $user_id";
      $delete = mysqli_query($conn,$delete_query);
     $_SESSION['success'] = "Data Insert Successfully";

     header('location:index.php');
    

    
 }else{
     echo "Record Insert Unsuccessfully".mysqli_error($conn);
     exit;
 }
}
include "header.php";
// if(isset($_GET['id'])) {
//   $id = $_GET['id'];

//   $sql="SELECT * FROM mobile where id= $id";
//   $result = mysqli_query($conn, $sql);
//   $row = mysqli_fetch_array($result);
// }
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
  </head>

  <body>
---------

-------
  
  

    
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
            <h1>Checkout</h1>
            <span>Thanks for Shopping...</span>
          </div>
        </div>
      </div>
    </div><br><br>
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
            <?php
        
          ?>
           <div class="col-md-7" style="border:double;border-color:#612325">
              <img style="height: 350px;" src="../admin-side/<?php echo $fetch_details['image'];?>" alt="" class="img-fluid wc-image">
            </div>
                  </div>

            <br>

           

            <br>
          </div>

          <div class="col-md-5" style="border-style:groove;border-color:blue">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
              <h4><?php echo $fetch_details['category_name'] ?></h4><br>

         <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center" href="./mobile_details.php?id=<?php echo $fetch_details['id']; ?>"><?php echo $fetch_details['mobile_name']; ?></a>

</div>

<div class="content">
<p><?php echo $fetch_details['description'] ?></p>
</div>
<div class="content">
<p>RAM : <?php echo $fetch_details['ram'] ?></p>
</div>
<div class="content">
<p>ROM : <?php echo $fetch_details['rom'] ?></p>
</div>
<div class="content">
<p>Front Camera : <?php echo $fetch_details['front_camera'] ?></p>
</div>
<div class="content">
<p>Rear Camera : <?php echo $fetch_details['rear_camera'] ?></p>
</div>
<div class="content">
<p>Processor : <?php echo $fetch_details['processor'] ?></p>
</div>
<div class="content">
<p>Battery : <?php echo $fetch_details['battery'] ?></p>
</div>
<div class="content">
<p>Price : <?php echo $fetch_details['price'] ?></p>
</div>

              </div>
            </div>
  <form action="" method="post">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  
                </div>
              </div>

              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
          <?php

                  }
                }
              }
                
                }
// ?>
        </div>
        

    <div class="callback-form contact-us" style="border-style:groove;border-color:green;width:650px;margin-left:320px;height:620px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form">
              <form action="" id="contact" method="POST" >
                 <div class="row">
                      
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Name:" name="firstname" pattern="[a-zA-Z]{1,}" required>
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Firstname:" name="lastname" pattern="[a-zA-Z]{1,}"required>
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address:" name="address" required>
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Country" name="country_id" pattern="[a-zA-Z]{1,}"required>
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="state" name="state_id" pattern="[a-zA-Z]{1,}"required>
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Zip:" name="zipcode" pattern="[0-9]{6,6}"required>
                           </div>
                      </div>
                      
                 </div>

                 

                 <div class="row">
                   
                   <div class="col-lg-12">
                      <input type="submit" name="submit" value="Finish" id="form-submit" class="btn btn-primary" />
                  </div>
                 </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include "footer.php" ?>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
<?php
          
        
  
  // }
  // }
?>

  </body>
</html>