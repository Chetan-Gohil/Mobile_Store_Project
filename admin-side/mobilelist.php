<?php

include 'header.php';

$sql = "SELECT category.category_name as category_name,mobile.id,
mobile.image,mobile.mobile_name,mobile.launch_date,mobile.price,mobile.rating,mobile.category_name,mobile.description,mobile.ram,mobile.rom,mobile.front_camera,mobile.rear_camera,mobile.processor,mobile.battery
FROM `mobile` join `category` on `mobile`.`category_name` = `category`.`category_name`
-- join `subcategory` on `mobile`.`subcategory` = `subcategory`.`id`";
$result = mysqli_query($conn, $sql);
// print_r($result);exit;

?>


<div class="page-wrapper">

<div class="page-content">

  
       

<div class="d-flex justify-content-center py-4">
        
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

<div class="col-12">
              <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                
       
             
                <div class="card-body pb-0">
                  <h5 class="card-title">Category List</h5>

                 

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Mobile Name</th>
                        <th scope="col">launch date</th>
                        <th scope="col">price</th>
                        <th scope="col">rating</th>
                        <th scope="col">category</th>
                        <th scope="col">Ram</th>
                        <th scope="col">Rom</th>
                        <th scope="col">Front Camera</th>
                        <th scope="col">Rear Camera</th>
                        <th scope="col">Processor</th>
                        <th scope="col">Battery</th>
                        <th scope="col">description</th>
                        <!-- <th scope="col">subcategory</th> -->
                        <th scope="col">action</th>
 
                      </tr>
                    </thead>
                    <tbody>
                
          
                                      <?php
                                              if (mysqli_num_rows($result)) {
                                                  while ($row = mysqli_fetch_assoc($result)) { ?>
                                                      <tr>
                                                          <td><?php echo $row['id'] ?></td>
                                                          <td>
                                                         <div class="recent-product-img">
                                                              <img src="<?=$row['image'] ?>" width="30px" alt="" >                                                  </div>
                                                       </div>
                                                  
                                                        </td>
                                                  <td>
                                                  <div class="ms-2">
                                                      <h6 class="mb-1 font-14"><?php echo $row['mobile_name'] ?> </h6>
                                                  </div>
                                                  
                                                  </td>
                                                  <td><?php echo $row['launch_date'] ?></td>
                                                  <td><?php echo $row['price'] ?></td>
                                                  <td><?php echo $row['rating'] ?></td>
                                                  <td><?php echo $row['category_name'] ?></td>
                                                  <td><?php echo $row['ram'] ?></td>
                                                  <td><?php echo $row['rom'] ?></td>
                                                  <td><?php echo $row['front_camera'] ?></td>
                                                  <td><?php echo $row['rear_camera'] ?></td>
                                                  <td><?php echo $row['processor'] ?></td>
                                                  <td><?php echo $row['battery'] ?></td>
                                                  <td><?php echo $row['description'] ?></td>
                                                    
                                                <td>
                                                <a href="edit_mobile.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-edit' style="color: green;"></i></a>&emsp;
                                                 <a href="delete_mobile.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-trash' style="color: red;"></i></a>
                                              
                                                  </td>

                                                  </tr>

                                            <?php }
                                              } else { ?>
                                                 <tr>
                                                    <td colspan="8" align="center">No Record Found</td>

                                              </tr>

                                              <?php } ?>

                                        
            </tbody>
                                              </tfoot>
          </table>

        </div>

      </div>
    <?php
    include "footer.php";
    ?>