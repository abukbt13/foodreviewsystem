<?php
session_start();
include '../connection.php';

if(!isset($_SESSION['user_id'])){
    $_SESSION['status'] = 'Something went wrong';
    header("location:index.php");
}
if(isset($_POST['add_item'])){
    session_start();
    $user_id=$_SESSION['user_id'];
$name=$_POST['name'];
$price=$_POST['price'];
$category=$_POST['category'];
$quantity=$_POST['quantity'];

$filename=$_FILES['image']['name'];
$filetmp=$_FILES['image']['tmp_name'];

$photo_new_name= rand(10,11111).$filename;


$sql = "INSERT INTO items (name,price,category,quantity,image,user_id) values ('$name','$price','$category','$quantity','$photo_new_name','$user_id')";
$sql_run = mysqli_query($conn,$sql);
if ($sql_run){
move_uploaded_file($filetmp,"fooditems/".  $photo_new_name);
$_SESSION['status']="You have successfully added an item";
header("location:../admindashboard.php");
}
else {
$_SESSION['status']="An error occurred. Please try again with correct details";
    header("location:./admindashboard.php");
}
}
if(isset($_POST['confirm_order'])){
    $user_id=$_SESSION['user_id'];
    $totalminprice=$_POST['totalminprice'];
    $transactionid=$_POST['transactionid'];
    $date = date('d-m-y');
    $time = date('H:i:s');
    if($_POST['time']==null){
        $time = date('H:i:s');
    }
    else{
        $time =$_POST['time'];
    }


    $sql="update orders  set  transaction_id = '$transactionid', status='1' where user_id = '$user_id'";
    $sqlrun=mysqli_query($conn,$sql);
    if($sqlrun){
        $save="insert into ordered_foods  (user_id,transaction_id,amount,time,date) values('$user_id','$transactionid','$totalminprice','$time','$date')";
        $saverun=mysqli_query($conn,$save);
        if($saverun){
            $_SESSION['status']="You have ordered food successfully";
            header("location:../dashboard.php");
        }
    }

}