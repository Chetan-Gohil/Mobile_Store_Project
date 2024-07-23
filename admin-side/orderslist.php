<?php
include "header.php";

$sql = "SELECT  order_address.id,  order_address.firstname,
 order_address.id as ord_id,mobile.price, mobile.mobile_name,order_address.lastname, order_address.address,
  order_address.country_id, order_address.state_id, order_address.zipcode,
   order_address.status FROM `order_address`
   INNER JOIN `mobile` on `order_address`.`mobile_id` = `mobile`.`id` 
    INNER JOIN `user` ON `order_address`.`user_id` = `user`.`id`";
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
                  <h5 class="card-title">Orders List</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <!-- <th scope="col">User Name</th> -->
                        <th scope="col">Mobile Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Address</th>
                        <th scope="col">Country</th>
                        <th scope="col">State</th>
                        <th scope="col">Zipcode</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                                             if(mysqli_num_rows($result)){
                                                  while($row = mysqli_fetch_assoc($result)){ 
                                                      ?>
                                                  <tr>
                                                       <td><?php echo $row['id']?></td>
                                                       <td><?php echo $row['mobile_name']?></td>
                                                       <td><?php echo $row['firstname']?></td>
                                                       <td><?php echo $row['lastname']?></td>
                                                       <td><?php echo $row['price']?></td>
                                                       <td><?php echo $row['address']?></td>
                                                       <td><?php echo $row['country_id']?></td>
                                                       <td><?php echo $row['state_id']?></td>
                                                       <td><?php echo $row['zipcode']?></td>

                                                       <td>
                                                         <?php if ($row['status'] == "Pending"){
                                                           $color = "info";
                                                           
                                                         }else if ($row['status'] == "Confirmed"){
                                                          $color = "primary";
                                                         } else if ($row['status'] == "Cancelled"){
                                                           $color = "danger";
                                                         } else if
                                                          ($row['status'] == "Received By Customer"){
                                                           $color = "success";
                                                         }
                                                         ?>
                                                         <div class="d-flex align-items-center text-<?php echo $color ?>">
                                                       <?php echo $row['status']?></td>
                                                 <td>
                                                      <a href="update_order.php?id=<?php echo $row['ord_id'] ?>"class="has-arrow"><i class='bx bx-edit' style="color: green;"></i></a>&emsp;
                                                      <a href="delete_order.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-trash' style="color: red;"></i></a>

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