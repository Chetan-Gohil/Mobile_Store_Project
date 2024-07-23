<?php

include "config.php";

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "Delete from category where id=$id";

    $result=mysqli_query($conn,$sql);
    $_SESSION['success'] = "category Delete Successfully...";
    header("location:catagorylist.php");exit;
} else {
    $_SESSION['error'] = "Something Went Wrong...";
    header("location:catagorylist.php"); exit;
}
?>