<?php
    include 'config.php';
    include "header.php" ;

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];

    $query = "INSERT INTO feed_back (username,email,massage) VALUES ('$username','$email','$massage')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = "Feedback Submitted Successfully...";
        echo "<script>window.open('index.php','_self');</script>";
        exit;

    } else {
        echo "Feedback Error" .mysqli_error($conn);
        exit;
    }
    mysqli_close($conn);
}


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
    
  <!-- Page Content -->
  <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Feedback</h1>
            <span>Plz Share Your experience..</span>
          </div>
        </div>
      </div>
    </div>

    
<div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>Feedback</em></h2>
             
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="username" type="text" class="form-control" id="name" placeholder="Full Name" pattern="[a-zA-Z]{1,}"required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                 
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="massage" rows="6" class="form-control" id="massage" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" id="form-submit" name="submit" class="btn btn-primary">                   </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <?php 
    include "footer.php";
     ?>