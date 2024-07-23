<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header class="">
      <nav class="navbar navbar-expand-lg">
         <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Mobile Store<em></em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto active">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
             
             

              <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
                
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="about.php" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.html">About Us</a>
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    <a class="dropdown-item" href="terms.html">Terms</a>
                </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              
              
              <?php
              if(isset($_SESSION['user_id'])){
              ?>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
                
              <!-- </li>
              <li><a class="nav-link" href="checkout.php">My Cart</a></li> -->
              <?php
              }else{
              ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>
              <?php

              }

              ?>
              <li class="nav-item">
                <a class="nav-link" href="add_feedback.php">Feedback</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="show_order.php">orders</a>
                <span class="sr-only">(current)</span>

              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>