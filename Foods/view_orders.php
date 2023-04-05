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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

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
                                <a class="btn btn-success" href="http://localhost:81/foodreviewsystem/Foods/view_orders.php?transaction_id=<?php echo $rows['transaction_id']?>&email=<?php echo $rows['email']?>&viewdetails=">View</a>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        </div>

</body>
</html>
