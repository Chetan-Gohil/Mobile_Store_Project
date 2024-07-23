<?php

include "config.php";

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "Delete from mobile where id=$id";

    $result=mysqli_query($conn,$sql);
    $_SESSION['success'] = "Mobile Delete Successfully...";
    header("location:mobilelist.php");exit;
} else {
    $_SESSION['error'] = "Something Went Wrong...";
    header("location:mobilelist.php"); exit;
}
?>