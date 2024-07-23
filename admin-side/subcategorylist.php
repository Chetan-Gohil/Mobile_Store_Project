<?php
include "header.php";

$sql="SELECT category.category_name as category_name,subcategory.name,
subcategory.id FROM `subcategory` join `category` on `subcategory`.
`category_id` = `category`.`id`";
$result = mysqli_query($conn, $sql);

?>


<!-- Top Selling --> <main>
    <div class="container">



        <div class="d-flex justify-content-center py-4">
        
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

<div class="col-12">
              <div class="card top-selling overflow-auto">

               

                <div class="card-body pb-0">
                  <h5 class="card-title">Category List</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">SubCategory Name</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                                             if(mysqli_num_rows($result)){
                                                  while($row = mysqli_fetch_assoc($result)){ ?>
                                                  <tr>
                                                       <td><?php echo $row['id']?></td>
                                                       <td><?php echo $row['name']?></td>
                                                       <td><?php echo $row['category_name']?></td>
                                                 <td>
                                                      <a href="update_subcategory.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-edit' style="color: grren;"></i></a>
                                                      <a href="delete_subcategory.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-trash' style="color: red;"></i></a>

                                                  </tr>

                                                  <?php } }
                                                  else { ?>
                                                                 <tr>
                                                                      <td colspan="8" align="center">No Record Found</td>
                                                  </tr>
                                                  <?php
                                                  }
                                                  ?>
                                                  
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
           
            <?php
            include "footer.php";
            ?>