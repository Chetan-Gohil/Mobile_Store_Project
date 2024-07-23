<<?php
include "header.php";

if(isset($_POST['submit'])){
	$id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$file = $_FILES['image'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    
	if($fileerror == 0){
		if($filename !=""){	
			$destfile = 'imageup/'.$filename;
			if(move_uploaded_file($filepath,$destfile)){
			    $query = "UPDATE user SET `image`='$destfile',`firstname`='$firstname',`lastname`='$lastname' WHERE user.id='$id'";
				if(mysqli_query($conn,$query)){
					$_SESSION['success'] = "Data Update Successfully";
				   // header('location:index.php');
				   
				}else{
					echo "Record Update Unsuccessfully".mysqli_error($conn);
					exit;
				} 
				mysqli_close($conn);
			}
	}
	}else{
        $query = "UPDATE user SET `firstname`='$firstname',`lastname`='$lastname' WHERE user.id='$id'";
        if(mysqli_query($conn,$query)){
            $_SESSION['success'] = "Data Update Successfully";
           // header('location:index.php');
           
        }else{
            echo "Record Update Unsuccessfully".mysqli_error($conn);
            exit;
        } 
        mysqli_close($conn);
    }
    
}

include "sidebar.php";
?>

<div class="wrapper">

<div class="page-wrapper">
<main id="main" class="main">
  

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div>
			<div class="page-content">
                <form action="" method="POST" enctype="multipart/form-data">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
                    <?php if(isset($_SESSION['error'])){ ?>
											<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
											  <div class="text-white"><?php echo $_SESSION['error'];
											             unset($_SESSION['error']); ?></div>
											  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>			 
											</div>
											<?php } ?>
                                            <?php if(isset($_SESSION['success'])){ ?>
											<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
											  <div class="text-white"><?php echo $_SESSION['success'];
											             unset($_SESSION['success']); ?></div>
											  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>			 
											</div>
											<?php } ?>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profile</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body p-5">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="<?php echo $admin_data['image'] ?>" name="image" id="image" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
                                                <li class="row mb-3"><span><?php echo $admin_data['firstname'] ?></span></li>
										</div>
										<div class="col-sm-12">
												<label for="inputFirstName" class="form-label">Profile Picture</label>
												<input type="file" class="form-control" name="image" id="image" placeholder="Jhon">
											</div>
										<hr class="my-4" />
									</div>
</div>
											
								</div>
							</div>

							<div class="col-lg-8">
								<div class="card">
									<div class="card-body p-5">
										<div class="row mb-3">
											<div class="col-sm-12">
												<h6 class="mb-2">First Name</h6>
											</div>
											<div class="col-sm-12 text-secondary">
												<input type="text" class="form-control" value="<?php echo $admin_data['firstname'] ?>" name="firstname" id="firstname"  />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-12">
												<h6 class="mb-2">Last Name</h6>
											</div>
											<div class="col-sm-12 text-secondary">
												<input type="text" class="form-control" value="<?php echo $admin_data['lastname'] ?>" name="lastname" id="lastname" />
											</div><br><br><br>
                                            <input type="hidden" name="id" value="<?php echo $_SESSION['admin_id']; ?>" />
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
                                               
												<input type="submit" name="submit" class="btn btn-primary px-4" value="Save Changes" />
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
                    </form>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




</html>
</body>


