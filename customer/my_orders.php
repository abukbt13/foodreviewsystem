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
<body><style>
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
            <a class="nav-link" href="../reviews.php">Reviews</a>
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
                    <a class="btn btn-success" href="my_orders.php?transaction_id='.$row['transaction_id'].'&view_myorders=">View this order</a>
                 </tr>
           ';
        }
        }

        ?>

        </tbody>
    </table>
</div>

</body>