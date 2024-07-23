<?php
if (isset($_SESSION['user_id'])) {
     if (isset($_SESSION['cart'])) {
          $result_cart = $_SESSION['cart'];
     
}
?>
<div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasCart">
      <div class="offcanvas-header d-flex align-items-center">
      <?php
      if(isset($_SESSION['cart'])){
      ?>
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart</h5>
        <?php
}else{
  ?>
  <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart is Empty......!</h5>
  <br>
  <br><br><br>
  
  <?php
}
        ?>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
          <div>
    
            <div class="mt-4 mb-5">
              <p class="mb-2 fs-6"><i class=""></i> <span class="fw-bolder"></span>
          </p>
              <div class="">
                <div class="" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
    
            <!-- Cart Product-->
            <?php
            if(isset($_SESSION['cart'])){
            $total_amount = 0;
            if (!empty($result_cart)){
                 foreach ($result_cart as $mobile_id => $cart_data) {
                 $total_amount = $total_amount + $cart_data['price']; ?>
            
          
                       <div class="row mx-0 pb-4 mb-4 border-bottom">
              <div class="col-3">
                <picture class="d-block bg-light">
                  <img class="img-fluid" src="../admin-side/mobileimg/<?php echo $cart_data['image']  ?>"
                    alt="<?php echo $cart_data['mobile_name'] ?>">
                </picture>
              </div>
              <div class="col-9">
                <div>
                  <h6 class="justify-content-between d-flex align-items-start mb-2">
                    <?php echo $cart_data['mobile_name'] ?>
                    <a href="action.php?action=remove_book_from_cart&book_id=<?php echo $book_id ?>"><i class="ri-close-line"></i></a>
                    <!-- <a href="action.php?action=remove_book_form_cart&book_id="><i class="ri-close-line"></i></a> -->
                  </h6>
                  <small class="d-block text-muted fw-bolder">In Stock</small>
     
                </div>
                <p class="fw-bolder text-end m-0">$<?php echo number_format($cart_data['price'],2) ?></p>
              </div>
            </div>
            <?php }
            } ?>
    
            <!-- Cart Product-->
           
          <div class="border-top pt-3">
            <div class="d-flex justify-content-between align-items-center">
              <p class="m-0 fw-bolder">Subtotal</p>
              <p class="m-0 fw-bolder">$<?php echo number_format($total_amount,2) ?></p>
            </div>
            
            <a href="checkout.php"
              class="btn btn-orange btn-orange-chunky mt-5 mb-2 d-block text-center">Checkout</a>
           
          </div>
        </div>
      </div>
    </div>
    <?php } else { ?>
     <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasCart">
      <div class="offcanvas-header d-flex align-items-center">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Your Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex flex-column justify-content-between w-100 h-100">
          <div>
    
            <div class="mt-4 mb-5">
              <p class="mb-2 fs-6"><i class=""></i> <span class="fw-bolder"></span>Away Please Login And See Your Cart!
          </p>
              <div class="">
                <div class="" role="progressbar" style="width: 25%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
    
    <?php }
    }else{
      ?>
      
      <?php
    } ?>