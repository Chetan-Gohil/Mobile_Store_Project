<?php
include "header.php";

$sql = "SELECT * FROM category";
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
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                                             if(mysqli_num_rows($result)){
                                                  while($row = mysqli_fetch_assoc($result)){ ?>
                                                  <tr>
                                                       <td><?php echo $row['id']?></td>
                                                       <td><?php echo $row['category_name']?></td>
                                                 <td>
                                                      <a href="update_category.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-edit' style="color: green;"></i></a>&emsp;
                                                      <a href="delete_category.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-trash' style="color: red;"></i></a>

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