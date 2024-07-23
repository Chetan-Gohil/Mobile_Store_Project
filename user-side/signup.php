<?php

include "config.php";
if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $image = 'not compulsory';
    $type = 'user';
    


    $sql = "SELECT * FROM user WHERE email = '$email'";
    $count = mysqli_query($conn,$sql);

    if($count->num_rows < 1) {
        {
            $query = "INSERT INTO user(`email`,`firstname`,`lastname`,`password`,`image`,`type`) VALUES ('$email','$firstname','$lastname','$password','$image','$type')";
             if(mysqli_query($conn, $query)) {
                 $_SESSION['success'] = "Register Successfully...";
             redirect('login');

             } else {
                 echo "Record Insert UnSuccessFully.." . mysqli_error($conn);
                 exit;
             } 
             mysqli_close($conn);
             } //  else {
             
            //      $_SESSION['error'] = "Password & Confirm Password Does Not Match..";
            //      redirect('signup');
            //      exit;
            //  }
        } else {
            $_SESSION['error'] = "Email Already Exists!";
            redirect('signup');
            exit;
        }
    }

 include "header.php";
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
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Sign Up</h1>
            <span>Create your own account..</span>
          </div>
        </div>
      </div>
    </div>

   

    <div class="callback-form contact-us" style="border-style:double;border-color:blue;width:380px;margin-left:420px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form" align="center">
              <form action="#" method="POST" id="contact">
                  
                 <div class="row">
                      
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name:" name="firstname">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name:" name="lastname">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email:">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Password:">
                           </div>
                      </div>
                      
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           
                      </div>
                     
                 </div>

                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                          
                      </div>

                      <div class="col-sm-6 col-xs-12">
                           
                      </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-12">
                      <input type="submit" name="submit" id="form-submit" class="btn btn-primary"></input>
                  </div>
                 </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Mobile Store</h4>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Thank you</h4>
            <ul class="menu-list">
              <li><a href="#">Thank you for Shopping</a></li>
              <li><a href="#">At our Online Store</a></li>
              <li><a href="#">We Hope you Find Everything</a></li>
              <li><a href="#">you were Looking for and more..</a></li>
              <!-- <li><a href="#">Lacinia ac sapien</a></li> -->
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="index.php">Products</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="add_feedback.php">feedback</a></li>
            </ul>
          </div>
         
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
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
