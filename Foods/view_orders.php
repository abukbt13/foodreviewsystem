<?php
include '../connection.php';
if(isset($_GET['viewdetails'])){
    $email=$_GET['email'];
//    echo $email;
    $transaction_id = $_GET['transaction_id'];
    $orders="select * from orders where transaction_id='$transaction_id'";
    $ordersrun=mysqli_query($conn,$orders);
//    echo mysqli_num_rows($ordersrun);
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image" class="rounded-3" href="order.jpg" >
    <title>Active orders</title>
    <link rel="stylesheet" href="../mycss/style.css">
    <script src="../JS/app.js"></script>
</head>

<body>
<style>
    .head{
        background: rgba(10,10,10,1);
        color: white;
        width: 100%;
        z-index: 1;
    }
    @media screen and (max-width: 500px) and (min-width: 200px) {
        .head{
            background: rgba(10,10,10,1);
            color: white;
            width: 100%;
            padding: 1rem;
            z-index: 1;
        }
    }

    ul li:hover{
        padding-left: 1rem;
        background: rgba(23,87,255,0.4);
    }
</style>
<div id="main_nav" class="d-flex sticky-top head container-fluid justify-content-between align-items-center">
    <a class="navbar-brand "  href="index.php">Aarons and sons invest</a>
    <ul id="navbar" class="d-md-flex d-lg-flex d-none  list-unstyled">
        <li class="nav-item mx-3 mt-3 px-2 py-2">
            <a class="nav-link active" aria-current="page" href="../food.php">Foods</a>
        </li>

        <li class="nav-item mx-3 mt-3 px-2 py-2">
            <a class="nav-link" href="./../reviews.php">Reviews</a>
        </li>
        <li class="nav-item mx-3 mt-3 px-2 py-2">
            <a class="nav-link" href="../dashboard.php">Dashboard</a>
        </li>
        </li>
        <li class="nav-item mx-3 mt-3 px-2 py-2">
            <a class="nav-link" href="../logout.php">Logout</a>
        </li>
    </ul>
    <div style="position: absolute;top:1.1rem;right: 1rem;" id="show" style="font-size: 29px;"> <i class="bi d-sm-block d-md-none d-lg-none bi-list"></i></div>


</div>
</div>

<div class="d-flex w-100 justify-content-center">
        <table class="table w-50 mx-3 px-1 table-responsive-sm table-primary table-hover table-bordered">
            <thead>
            <tr>
                <td colspan="2" class="text-center text-uppercase">Orders of <span class="bg-primary text-white;"> <?php echo $email ?></span></td>
            </tr>
            <tr>
                <th>Name of item</th>
                <th>Price</th>
<!--                <th>Price</th>-->
            </tr>

            </thead>
            <tbody>
            <?php
            while($rows=mysqli_fetch_assoc($ordersrun)){
                ?>
            <tr>
            <td><?php echo $rows['name']?></td>
            <td><?php echo $rows['price']?></td>
<!--            <td>--><?php //echo $rows['date']?><!--</td>-->

            <?php
            }
            ?>
                <tr><td colspan="2">
                    <form action="foodprocessor.php" method="post">
                        <input type="number" hidden="" name="transaction_id" value="<?php echo $transaction_id?>">
                    <button name="clear_order" class="btn w-100 btn-primary">Clear order</button>
                </form>
                </td>

            </tr>
            </tbody>

        </table>
</div>
        <div class="w-75 d-flex justify-content-center">
            <table class="table  w-50 table-responsive-sm table-primary table-hover table-bordered">


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
                    $ordered_food="select o.transaction_id, o.status, o.amount, o.time, u.email,u.phone from ordered_foods o join users u on u.id = o.user_id where o.transaction_id !='$transaction_id' and o.status='0' ";
                    $ordered_foodrun=mysqli_query($conn,$ordered_food);
                    while($rows=mysqli_fetch_assoc($ordered_foodrun)){
                        ?>
                        <tr>
                            <td><?php echo $rows['transaction_id']?></td>
                            <td><?php echo $rows['email']?></td>
                            <td><?php echo $rows['phone']?></td>
                            <td><?php echo date('H:i:s', strtotime($rows['time'] . ' +1 hour')) ?></td>

                            <td>
                                <a class="btn btn-success" href="view_orders.php?transaction_id=<?php echo $rows['transaction_id']?>&email=<?php echo $rows['email']?>&viewdetails=">View</a>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        </div>
<script>
    const main_nav = document.getElementById('main_nav')
    const show = document.getElementById('show')
    const navbar = document.getElementById('navbar')
    show.addEventListener('click',()=>{
        navbar.classList.toggle('d-none')
        main_nav.classList.toggle('flex-column')
        main_nav.classList.toggle('align-items-center')
    })
</script>
</body>
</html>
