<?php
session_start();
include '../connection.php';
$user_id=$_SESSION["user_id"];
if(isset($_GET['view_myorders'])) {
    $transaction_id = $_GET['transaction_id'];
    $orders = "select * from orders where transaction_id='$transaction_id' && user_id='$user_id'";
    $ordersrun = mysqli_query($conn, $orders);
//echo mysqli_num_rows($ordersrun);
//    echo $transaction_id;
}
    ?>
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

<div class="row  d-flex justify-content-center">

<table class="w-50 table table-bordered table-hover table-primary">
    <tr><td colspan="2" class="text-center text-uppercase bg-secondary">My orders</td></tr>
<tr>
<td>Item name</td>
<td>Price</td>
</tr>

    <?php
while($row=mysqli_fetch_assoc($ordersrun)){
?>
    <tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['price'];?></td>
    </tr>
<?php
}
    ?>


</table>
</div>
<div class="w-75 d-flex justify-content-center">
    <table class="table  w-50 table-responsive-sm table-primary table-hover table-bordered">


        <table class="table table-responsive-sm table-primary table-hover table-bordered">
            <thead>
            <tr>
                <td colspan="4" class="text-center">Other Orders That you Have</td></tr>
            <tr>
                <th>Transaction id</th>
                <th>Total amount</th>
                <th>Date of order</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
        <?php

        $data="select * from ordered_foods where user_id='$user_id' && transaction_id!='$transaction_id'";
        $datarun=mysqli_query($conn,$data);
        $rows=mysqli_fetch_all($datarun,MYSQLI_ASSOC);
                            $num=mysqli_num_rows($datarun);
        if($num>0){


        foreach ($rows as $row){
            echo'
           
            
                <tr class="mx-1 p-2">
                <td>'.$row['transaction_id'].'</td>
                <td>'.$row['amount'].'</td>
                <td>'.$row['date'].'</td>
                <td>
                    <a class="btn btn-success" href="http://localhost/Online-Food-Ordering/customer/my_orders.php?transaction_id='.$row['transaction_id'].'&view_myorders=">View this order</a>
                 </tr>
           ';
        }
        }

        ?>

        </tbody>
    </table>
</div>

</body>