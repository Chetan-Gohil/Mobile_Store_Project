<?php
include "header.php";

if(isset($_POST['submit'])) {
    $category = $_POST['category'];
    $sql_category = "SELECT * FROM category WHERE category_name='$category'";
    $count = mysqli_query($conn,$sql_category);

    if($count->num_rows < 1) {
        $query = "INSERT INTO category (category_name) VALUES ('$category')";
        if(mysqli_query($conn, $query)) {
            $_SESSION['success'] = "Data Insert Successfully...";
            echo "<script>window.open('catagorylist.php','_self');</script>";exit;
        } else {
            echo "Record Insert Unsuccessfully" . mysqli_error($conn);
            exit;
        }
        mysqli_close($conn);
    } else {
        $_SESSION['error'] = "catagory is already exists!";
    }

}

?>


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
               
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Add Category</h5>
                    <!-- <p class="text-center small">Enter your username & password to login</p> -->
                  </div>

                  <form class="" action="" method="POST" novalidate>

                 

                    <div class="col-12">
                      <label for="yourName" class="form-label">Mobile Category</label>
                      <input type="text" name="category" id="category" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your Category</div>
                    </div>

                   
                    </div>
                    <div class="col-12">
                      <input class="btn btn-primary w-100" type="submit" name="submit" value="Save Changes"/>
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
  </main>End #main -->

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