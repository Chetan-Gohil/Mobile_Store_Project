<?php

include "header.php";
// include "config.php";

if(isset($_POST['submit'])) {
    $file = $_FILES['image'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    $mobile_name = $_POST['mobile_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];   
    $launch_date = $_POST['launch_date'];
    $category_name = $_POST['category_name'];    
    $front_camera = $_POST['front_camera'];    
    $rear_camera = $_POST['rear_camera'];    
    $processor = $_POST['processor'];    
    $rating = 0;
	$ram = $_POST['ram'];
	$rom = $_POST['rom'];
	$battery = $_POST['battery'];

    if ($fileerror == 0) {

        if ($filename != ""){
            $destfile = 'mobileimg/' . $filename;
            if (move_uploaded_file($filepath,$destfile)) {
                $query = "INSERT INTO mobile(`image`,`mobile_name`,`description`,`price`,`launch_date`,`category_name`,`processor`,`front_camera`,`rear_camera`,`rating`,`ram`,`rom`,`battery`) VALUES
				('$destfile','$mobile_name','$description','$price','$launch_date','$category_name','$processor','$front_camera','$rear_camera','$rating','$ram','$rom','$battery')";
				
				

                    if(mysqli_query($conn,$query)) {
                        $_SESSION['success'] = "mobile Insert Successfully...";
                        echo "<script>window.open('mobilelist.php','_self');</script>";
                        exit;
                    }else {
                        $_SESSION['error'] = "Error ! somthing wrong..." ;
                        echo "<script>window.open('add_mobile.php','_self');</script>";
                        exit;
                    }
                    mysqli_close($conn);
            }
        }




		
    }
}
include "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    


<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">mobile Add</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Mobile</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New Mobile</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
							<form class="row g-3" action="" method="POST" enctype="multipart/form-data">

						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
                                <?php
                                if (isset($_SESSION['error'])){ ?>
                                 <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                                     <div class="text-white"><?php echo $_SESSION['error']; ?></div>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" area-label="close"></button>
                                </div>     

                                <?php
                                  unset ($_SESSION['error']);
                                }
                                  ?>


								<label for="inputProductTitle" class="form-label">Mobile Title</label>
								<input type="text" class="form-control" id="inputProductTitle" name="mobile_name" placeholder="Enter mobile Title">
							  </div>
                              
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control" name="description"id="inputProductDescription" rows="3"></textarea>
							  </div>

							 

							  <div class="mb-3">
								<label for="inputFirstname" class="form-label">Mobile Image</label>
								<input type="file" class="form-control" name="image" id="profile" placeholder="jhon" required>                                
							  </div>
                            
						  

						   <div class="col-md-6">
									<label for="inputProductram" class="form-label">RAM</label>
									<input type="text" class="form-control" id="inputPrice" name="ram" placeholder="  Enter Mobile Ram">
								  </div> <br>

								  <div class="col-md-6">
									<label for="inputproductrom" class="form-label">ROM</label>
									<input type=" text" class="form-control" id="inputPrice" name="rom" placeholder=" Enter Mobile Rom ">
								  </div><br>
								 
								  </div>
							</div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
							  <div class="col-md-6">
									<label for="inputproductrom" class="form-label">Processor</label>
									<input type=" text" class="form-control" id="inputPrice" name="processor" placeholder=" Enter Processor ">
								  </div><br>
								  
								  <div class="col-md-6">
									<label for="inputproductrom" class="form-label">Front Camera</label>
									<input type=" text" class="form-control" id="inputPrice" name="front_camera" placeholder=" Enter Front Camera ">
								  </div><br>
								  
								  <div class="col-md-6">
									<label for="inputproductrom" class="form-label">Rear Camera</label>
									<input type=" text" class="form-control" id="inputPrice" name="rear_camera" placeholder=" Enter Rear Camera ">
								  </div><br>

								   <div class="col-md-6">
									<label for="inputPrice" class="form-label">battery</label>
									<input type="text" class="form-control" id="inputPrice" name="battery" placeholder="battery..">
								  </div> 
								<div class="col-md-6">
									<label for="inputPrice" class="form-label">Price</label>
									<input type="text" class="form-control" id="inputPrice" name="price" placeholder="00.00">
								  </div>

								 

								 

								  <div class="mb-3"><br>
									<label for="inputProductTitle" class="form-label">launch_Date</label>
									<input type="text" class="form-control" name="launch_date" id="inputProductTitle" placeholder="dd/mm/yy">
								  </div>
								 
								  
								  <div class="mb-3">
									  <label for="input
									  ProductTitle" class="form-label">Category</label>
									  <select class="form-select" id="category_name" onchange="my_fun(this.value);" name="category_name"  required>
									  <option disabled selected>Choose the Category</option>
										  <?php $q = "select * from category";
										  $result1 = mysqli_query($conn , $q);
										  foreach ($result1 as $value) { 
										  ?>
											<option value="<?php echo $value['category_name'] ?>"><?php echo $value['category_name'] ?> </option> <br><br>
										<?php  } ?>
									 
									  </select>
                                      
								  </div>


								  

							
								<?php

								?>
								  
								  <div class="col-12">
									  <div class="d-grid">
                                         <input type="submit" class="btn btn-primary" name="submit" value="Add mobile"></input>
									  </div>
								  </div>
							  </div> 
						  </div>
						  </div>
									</form>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>

			</div>
		</div>




</body>

</html>

           