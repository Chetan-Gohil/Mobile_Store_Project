<?php

include("config.php");

if (!isset($_SESSION['user_id'])) {
  header('location:login.php');
}
$id = $_GET['id'];
$status = 'Cancelled';
$query = "UPDATE order_address SET `status`='$status' WHERE `order_address`.`id`='$id'";
if (mysqli_query($conn, $query)) {
    $_SESSION['success'] = "Status update successfully...";
    echo "<script>window.open('show_order.php','_self');</script>";
    exit;
}else {
    $_SESSION['error'] = "Something went wrong...";
    echo "<scipt>window.open('show_order.php','_self');</script>";
    exit;
}
header('location:',$_SERVER['HTTP_REFERER']);

?>