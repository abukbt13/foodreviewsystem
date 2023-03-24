<?php
session_start();
$role=$_SESSION["role"];
if($role!='1'){

    $_SESSION['order']='Login to view this page';
    header('Location:login.php');
}
include 'connection.php';
include 'header.php';
?>
<style>
    body{
        /*background:#ddd;*/
    }
.sidebar{
    width:20vw;height:100vh;background:#F0DDDA;
}
.main_content{
    width:68vw;height:100vh;
}
.link a{
    text-decoration: none;
    font-size: 18px;
    padding: 0.5rem;
}
span{
    /*background: #00A8FF;*/
    padding: 0.6rem;
}

.link a:hover{
    background: whitesmoke;
}

</style>
<div class="mainbody d-flex">
    <div class="sidebar">
       <h3 class="text-center text-primary">Dashboard</h3>
        <div class="form-group ms-4">
            <h4>Food Items</h4>
            <div class="link">
             <span class="">   <a href="Foods/add_food.php" >Add Food Item</a></span><br><br>
                <span class="my-5">   <a href="Foods/view_food.php" >View Food Item</a></span><br><br>
            </div>

        </div>
  <div class="form-group ms-4">
            <h4>Orders</h4>
            <div class="link">
             <span class="">   <a href="Foods/active_orders.php" >Active Orders</a></span><br><br>
                <span class="my-5">   <a href="Foods/cleared_orders.php" >Cleared orders</a></span><br><br>
            </div>

        </div>
       <div class="form-group ms-4">
            <h4>Reviews</h4>
            <div class="link">
             <span class="">   <a href="" >Reviews</a></span><br><br>
            </div>

        </div>


    </div>
    <div class="main_content">
        <table class="table m-2 w-100  px-1 table-responsive-sm table-primary table-hover table-bordered">
            <thead>
            <tr><td class="text-center text-uppercase" colspan="5"> Active Orders</td></tr>
            <tr>
                <th>Transaction_id</th>
                <th>Order for </th>
                <th>User Phone Number</th>
                <th>Time to deliver</th>
                <th colspan="2">Operation</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $ordered_food="select o.transaction_id, o.amount, o.time, u.email,u.phone from ordered_foods o join users u on u.id = o.user_id where o.status =0";
            $ordered_foodrun=mysqli_query($conn,$ordered_food);
            while($rows=mysqli_fetch_assoc($ordered_foodrun)){
                ?>
                <tr>
                    <td><?php echo $rows['transaction_id']?></td>
                    <td><?php echo $rows['email']?></td>
                    <td><?php echo $rows['phone']?></td>
                    <td><?php echo date('H:i:s', strtotime($rows['time'] . ' +1 hour')) ?></td>

                    <td>
                        <a class="btn btn-success" href="http://localhost/Online-Food-Ordering/Foods/view_orders.php?transaction_id=<?php echo $rows['transaction_id']?>&email=<?php echo $rows['email']?>&viewdetails=">View</a>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
</div>
