<?php
session_start();
if(!isset($_SESSION['role'])){

    $_SESSION['order']='Login to view this page';
    header('Location:login.php');
}

include 'header.php';
?>
<style>
.sidebar{
    width:30vw;height:100vh;background:grey;
}
.main_content{
    width:68vw;height:100vh;background:pink;
}
</style>
<div class="mainbody d-flex">
    <div class="sidebar">
       <h1 style="text-align: center; border-bottom: solid 2px white;">Dashboard</h1>
        <h4>Food Items</h4>
        <div class="form-group">
            <a href="Foods/add_food.php" class="btn btn-primary">Add Food Item</a>
        </div>
        <div class="form-group mt-2">
            <a class="btn btn-primary">View Food Item</a>
        </div>
        <h4>Order</h4>
        <div class="form-group">
            <a class="btn btn-primary">Active Orders</a>
        </div>
        <div class="form-group mt-2">
            <a class="btn btn-primary">Cleared Orders</a>
        </div>
        <h4>Order</h4>
        <div class="form-group">
            <a class="btn btn-primary">Active Orders</a>
        </div>
        <div class="form-group mt-2">
            <a class="btn btn-primary">Cleared Orders</a>
        </div>
        <h4>Reviews</h4>
        <div class="form-group">
            <a class="btn btn-primary">New reviews</a>
        </div>
        <div class="form-group mt-2">
            <a class="btn btn-primary">Active reviews</a>
        </div>
    </div>
    <div class="main_content">
        we are
    </div>
</div>
