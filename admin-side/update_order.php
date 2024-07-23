<?php

include "header.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE order_address SET `status`='$status' WHERE `order_address`.`id`='$id'";
    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = "Status update successfully...";
        echo "<script>window.open('orderslist.php','_self');</script>";
        exit;
    }else {
        $_SESSION['error'] = "Somthing went wrong...";
        echo "<scipt>window.open('update_order.php','_self');</script>";
        exit;
    }
}
?>
<?php 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  

    $sql = "SELECT * FROM order_address where id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
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

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Update Order</h5>
                    <!-- <p class="text-center small">Enter your username & password to login</p> -->
                  </div>

                  <form class="" action="" method="POST" novalidate>

                    

                    <div class="col-12">
                      <label for="yourName" class="form-label"></label>
                      <select class="form-select" id="status" name="status">
                          <option value="">select</option>
                          <option value="Pending">Pending</option>
                          <option value="Confirmed">Confirmed</option>
                          <option value="Cancelled">Cancelled</option>
                          <option value="Received By Customer">Received By Customer</option>
</select>
        `            </div><br>

                    
                    </div>
                    <div class="col-12">
                      <input type="hidden"  name="id" value="<?php echo $id ?>"/>
                      <div class="form-group" align="center">
                      <input type="submit" name="submit" class="btn btn-primary"/>
                    </div>
                    
                  </form>

                </div>
              </div>

              <div class="credits">
                

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