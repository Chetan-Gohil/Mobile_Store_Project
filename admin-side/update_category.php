<?php
include "header.php";

if(isset($_POST['submit']) && isset($_POST['id']) && $_POST['id'] != "") {
  $id = $_POST['id'];
    $category = $_POST['category'];
    $sql_category = "SELECT * FROM category WHERE category_name='$category'";
    $count = mysqli_query($conn,$sql_category);

    if($count->num_rows < 1) {
        $query = "update category set category_name='$category' where id = $id";
        if(mysqli_query($conn, $query)) {
            $_SESSION['success'] = "Data Updated Successfully...";
            echo "<script>window.open('catagorylist.php','_self');</script>";exit;
        } else {
            $_SESSION['error'] = "Something Went Wrong...";
        }
    } else {
        $_SESSION['error'] = "Catagory is already exists!";
    }

}

?>

<?php

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql="SELECT * FROM category where id= $id";
  $result=mysqli_query($conn,$sql);
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
              
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Edit Category</h5>
                    
                  </div>

                  <form class="" action="" method="POST" novalidate>

                  

                    <div class="col-12">
                      <label for="yourName" class="form-label">Mobile Category</label>
                      <input type="text" name="category" id="category" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your Category</div>
                    </div>

                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  
                    <div class="col-12">
                      <input class="btn btn-primary w-100" type="submit" name="submit" value="Save Changes"/>
                    </div>
                   
                  </form>

                </div>
              </div>
              <?php
              include 'footer.php';
              ?>
          

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