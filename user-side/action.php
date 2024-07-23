<?php

include 'config.php';



if (isset($_GET['action']) && $_GET['action'] == "checkout_order") {

    if(isset($_SESSION['user_id'])) {
        
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $country_id = $_POST['country_id'];
    $state_id   = $_POST['state_id'];
    $zipcode = $_POST['zipcode'];
    

    // $total_amount = 0;
   

    }
    $user_id = $_SESSION['user_id'];
    $current_date = date("Y-m-d");
    $status = 'Pending';
    $order_no = '0000'.rand(10,1000);

    $query = "INSERT INTO orders(`user_id`,`order_date`,`status`,`order_no`) VALUES ($user_id,'$current_date','$status',$order_no)";
    if($result = mysqli_query($conn,$query)) {
        
        $order_id = mysqli_insert_id($conn);
        

    $query = "INSERT INTO `order_address`(`order_id`,`user_id`,firstname,lastname,`address`,country_id,state_id,zipcode)
    VALUES ($order_id,$user_id,'$firstname','$lastname','$address','$country_id','$state_id','$zipcode')";
    mysqli_query($conn ,$query);
    

    unset($_SESSION['cart']);
    $_SESSION['success'] = "Order completed successfully...";
    redirect('index');
} else {
    $_SESSION['error'] = "Something wrong !..." .mysqli_error($conn);
    redirect('index');
   }
} else {
    redirect('index');
  }




?>  


