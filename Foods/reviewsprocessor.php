<?php
session_start();
include  '../connection.php';
if(!isset($_SESSION['user_id'])){
    $_SESSION['status'] = 'Something went wrong';
    header("location:login.php");
}
$user_id = $_SESSION['user_id'];
echo $user_id;
if (isset($_POST['review'])){
$food_id = $_POST['food_id'];
$comment = $_POST['comment'];
$name=$_POST['name'];
$time = date('H:i:s');
$date=date('Y-m-d');
$sql="insert into reviews (food_id,food_name,user_id,comment,time,date) values('$food_id','$name','$user_id','$comment','$time','$date')";
$sqlrun=mysqli_query($conn,$sql);
if($sqlrun){
    $_SESSION['review']=" Your feedback was received successfully thank you for your feedback";
    header("Location:../reviews.php");
}
}