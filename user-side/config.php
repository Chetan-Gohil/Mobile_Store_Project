<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "mobile_store2";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn->connect_error){
    die ("connection failed.." .$conn->connect_error);
}
// echo "Connected Successfully";

function redirect($page = null) {
    if($page !="") {
        header("location:".$page.".php"); exist;
    } else  {
        header("location:index.php"); exist;
    }
}


?>