<?php

$servername = "localhost";
$server_user = "root";
$server_pass = "Pass2022";
$dbname = "foodorder";
//$name = $_SESSION['name'];
//$role = $_SESSION['role'];
$con=new mysqli("$servername","$server_user","$server_pass","$dbname") or die("mysqli_error");

if(isset($_GET['order_now'])){
    $id=$_GET['id'];
   echo $id;
}
$sql="select * from items where id='$id'";
$sqlrun=mysqli_query($con,$sql);
$items=mysqli_fetch_all($sqlrun,MYSQLI_ASSOC);
foreach ($items as $item){
    $price=$item["price"];
    $image=$item["image"];
    $name=$item["name"];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orders</title>
</head>
<body>
<style>
    .itemdetails{
        width:100vw;
        height:100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        /*background-color: grey;*/
    }
    .item{
        /*width: 20rem;*/
        /*background-color: pink;*/
    }
</style>
<div class="itemdetails">
    <div class="item">
        <h4 style="text-align: center;text-transform: uppercase;"><?php echo $name; ?></h4>
        <img src='06406e392e701e4.57357176regfd.jpeg' alt="" width="100" height="100">
<!--        --><?php //echo $image ?>
    </div>

</div>
</body>
</html>