
<?php

include "config.php";
 $sql = "SELECT * FROM mobile";
 $result = mysqli_query($conn,$sql);


include "header.php";
// if(isset($_SESSION['user_id'])){
//         $user_id = $_SESSION['user_id'];
//         $delete = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
//         $delete->bind_param("i",$user_id);
//         $delete->execute();
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
    

    

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>welcome to our...</h6>
                  <h4> <br> Mobile Store</h4>
                  <p>where you find the latest and greatest mobile phones from top brands at competitive prices..We understand that choosing the right mobile phones can be overwhelming, which is why we offer a wide variety of options to suit different needs and preferences...!</p>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>checkout new mobile..</h6>
                  <h4>stay connected<br>stay ahead </h4>
                  <p>Our mission is to impower our costomer through  technology by providing them with the letest mobile device and assecories that inhence there daily lives </p>
                  <a href="about.php" class="filled-button">About Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Smarter tech for smarter living</h6>
                  <h4>Your Mobile <br>your passion</h4>
                  <p>"At our mobile store We Believe that Technology should inhence and simplified our daily lives that way we are dedicated to offering the letest and gretest mobile devices "</p>
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span></span>
          </div>
          <div class="col-md-4">
            <a href="contact.php" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
       
          
          <div class="col-md-12">
          <?php

		                if (mysqli_num_rows($result)) {
		              while ($row = mysqli_fetch_assoc($result)) { 
		   
                    ?>
          </div>
          
          <div class="col-md-4" style="border:groove;border-color:black">
          
            <div class="service-item">
              <img style="height: 350px;" src="../admin-side/<?php echo $row['image']?>" alt="">
              <div class="down-content" style="font-size:24px">
              <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center" ></a>
              <p class="fw-bolder m-0 mt-2"><b><?php echo $row['category_name'] ?></b></p>  

              <div style="margin-bottom:10px;"><?php echo $row['mobile_name'] ?>
                
                <p class="fw-bolder m-0 mt-2" style="color:blue;font-size:22px"><b>₹<?php echo $row['price'] ?></b></p>  
                </div>

                <p><?php echo $row['description'] ?></p>
                <a class="filled-button" href="./mobile_details.php?id=<?php echo $row['id'] ?>"> View More</a>
              </div>
            </div>
            <?php }
                                } ?>
            
            <br>
          </div>
          
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know about <em>our company</em></h2>
                <p></p>
                <a href="about.php" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    

 
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div> -->
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
<?php
include "footer.php";
?>