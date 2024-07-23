
<?php
include "header.php";
$sql = "SELECT * FROM feed_back";
$result = mysqli_query($conn,$sql);
include "sidebar.php";
?>
<div class="page-wrapper">
<div class="card radius-10">
					

<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Feedback</h5>
							</div>
							
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
                                            <?php if(isset($_SESSION['success'])){ ?>
											<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
											  <div class="text-white"><?php echo $_SESSION['success'];
											             unset($_SESSION['success']); ?></div>
											  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>			 
											</div>
											<?php } ?>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Email</th>
										<th>Message</th>
										<th>Action</th>
																			</tr>
								</thead>
								<tbody>
                                             <?php
                                             if(mysqli_num_rows($result)){
                                                  while($row = mysqli_fetch_assoc($result)){ ?>
                                                  <tr>
                                                       <td><?php echo $row['id']?></td>
                                                       <td><?php echo $row['username']?></td>
                                                       <td><?php echo $row['email']?></td>
                                                       <td><?php echo $row['massage']?></td>
                                                 <td>
                                                      <a href="delete_feedback.php?id=<?php echo $row['id'] ?>"class="has-arrow"><i class='bx bx-trash' style="color: red;"></i></a>

                                                  </tr>

                                                  <?php } }
                                                  else { ?>
                                                                 <tr>
                                                                      <td colspan="8" align="center">No Record Found</td>
                                                  </tr>
                                                  <?php
                                                  }
                                                  ?>
                                        <div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
                    <?php
                    include "footer.php";
                    ?>