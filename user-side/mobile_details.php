<?php

include "config.php";
include "header.php";

if(isset($_POST['submit'])) {

    if(isset($_SESSION['user_id'])) {

        $mobile_id = $_GET['id'];
        $user_id  = $_SESSION['user_id'];
        
        $query = "select id,image,mobile_name,price,subcategory from mobile where id=".$mobile_id;
        $result = mysqli_query($conn, $query);
        if (!empty($result) && $result->num_rows > 0 ) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['cart'][$mobile_id] = $row;

            $_SESSION['cart'][$mobile_id] = $row;

            $_SESSION['success'] = "Mobile Added into Cart";
            redirect('index');
        } else {
            $_SESSION['error'] = "Error! Mobile not Found";
            redirect('index');
        }
        } else {
            echo "<script>window.open('login.php','_self'); </script>";
            exit;
        }
    
    }
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql="SELECT * FROM mobile where id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if(empty($row)) {
        redirect('index');
    }
} else {
    redirect('index');
}
//
if(isset($_SESSION['user_id'])){ 
$user_id = $_SESSION['user_id'];
$mobile_id = $_GET['id'];
if(isset($_POST['buy_now'])){
  
  $update_city = mysqli_query($conn, "INSERT INTO `cart`(`mobile_id`, `user_id`) VALUES ('$mobile_id','$user_id')");
  
  echo "<script>window.open('checkout.php','_self'); </script>";
 
}

}
if(isset($_POST['buy_now']) && !isset($_SESSION['user_id'])){
  echo "<script>window.open('login.php','_self'); </script>";

}

// if(isset($_POST['add_cart'])){
  
//   $update_city = mysqli_query($conn, "INSERT INTO `cart`(`mobile_id`, `user_id`) VALUES ('$mobile_id','$user_id')");
  
//   // echo "<script>window.open('checkout.php','_self'); </script>";
 
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

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
    
    
    

    <!-- Page Content -->
    <div class="page-heading header-text" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><small>₹<sup></sup><?php echo $row['price'] ?></small> &nbsp; <sup></sup></h1>
           
          </div>
        </div>
      </div>
    </div>

    <div class="services" >
      <div class="container" >
        <div class="row">
          <div class="col-md-7">
            <div style="border-style:groove;border-color:green;width:340px">
              <img style="height: 350px;" width="300px" src="../admin-side/<?php echo $row['image']?>" style="height: 550px;" alt="" class="img-fluid wc-image">
            </div>
 </div>

          <div class="col-md-5" style="border-style:double;border-color:#546111">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading"><BR><BR><BR>
              <h4><?php echo $row['category_name'] ?></h4><br>

                <h3><?php echo $row['mobile_name'] ?></h3>
              </div>

              <div class="content">
                <p><?php echo $row['description'] ?></p>
              </div>
              <div class="content">
                <p>RAM : <?php echo $row['ram'] ?></p>
              </div>
              <div class="content">
                <p>ROM : <?php echo $row['rom'] ?></p>
              </div>
              <div class="content">
                <p>Front Camera : <?php echo $row['front_camera'] ?></p>
              </div>
              <div class="content">
                <p>Rear Camera : <?php echo $row['rear_camera'] ?></p>
              </div>
              <div class="content">
                <p>Processor : <?php echo $row['processor'] ?></p>
              </div>
              <div class="content">
                <p>Battery : <?php echo $row['battery'] ?></p>
              </div>
              <div class="content">
                <p>Price : <?php echo $row['price'] ?></p>
              </div>

            </div>

            <br>
           
          
           

            <br>

            <form action="" method="post">
              <div class="row">
                
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                   
                  </div>
                </div>
            
                  <div class="form-group" style="border-style:dotted;border-color:green">





                  <!-- <a href="mobilecart.php?"class="filled-button">Add to Cart</a> -->
                    <input type="submit" name="buy_now" value="Buy Now" class="filled-button">
                  </div>
                </div>
              </div>
            </form>

            <br>
          </div>
        </div>

        <br>

        <!-- <h4>Description</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illum necessitatibus adipisci cum dolor quam magnam similique quasi iure blanditiis?</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum minus reprehenderit, porro alias pariatur perferendis, eaque possimus fugit doloribus perspiciatis.</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur expedita, blanditiis soluta, laudantium veritatis esse nulla quasi praesentium ea architecto vero. Nemo nesciunt veritatis maxime accusamus ipsa optio inventore rem cupiditate vero vitae cumque necessitatibus nisi, sapiente possimus perspiciatis, corporis!</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ratione animi aliquid, non ipsum soluta similique rerum commodi! Ullam quam cupiditate reiciendis a labore. Eos rerum deserunt, sequi dolores vitae consectetur harum animi officiis id vel similique qui, laborum corrupti fuga maiores maxime! Quasi, asperiores nobis accusamus similique est modi totam corporis perferendis consequuntur ea tempore, corrupti provident quos quo.</p> -->



        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
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

  </body>
</html>
<?php  ?>