<?php

include "config.php";

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "Delete from feed_back where id=$id";

    $result=mysqli_query($conn,$sql);
    $_SESSION['success'] = "feedbacklist Delete Successfully...";
    header("location:feedbacklist.php");exit;
} else {
    $_SESSION['error'] = "Something Went Wrong...";
    header("location:feedbacklist.php"); exit;
}
?>