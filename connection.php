<?php
//session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "2022";
$dbname = "foodorder";
//$name = $_SESSION['name'];
//$role = $_SESSION['role'];
$conn=new mysqli("$servername","$server_user","$server_pass","$dbname") or die("mysqli_error");

?>