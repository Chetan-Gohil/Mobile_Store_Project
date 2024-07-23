<?php
include('config.php');
include "header.php";
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $sql = "select * from user where email='$email'";
   $result = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($result);
   if ($count)  {
       $row = mysqli_fetch_assoc($result);
       $_SESSION['userid'] = $row['id'];
     header('location:change_password.php');
   } else {
       $_SESSION['error'] = "Email not found";
   }
}

?>


<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <!-- <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a> -->
              </div><!-- End Logo -->

              <form action="" method="POST" >

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Forget Password??</h5>
                    <p class="text-center small">Enter your Registered Email ID</p>
                  </div>
                  <?php

                  

                    ?>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Email ID</label>
                      <input type="Email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <br>
                    
                    <div class="col-12">
                      <input type="submit" name="submit" class="btn btn-primary w-100"   value="Submit"/>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>