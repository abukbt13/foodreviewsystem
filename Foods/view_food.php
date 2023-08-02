<?php
session_start();
include '../connection.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View food</title>
    <link rel="stylesheet" href="../mycss/style.css">
    <script src="../JS/app.js"></script>
</head>
<body>
<style>
    tr{
        align-items: center;
        text-align: center;
    }
    td{
        text-align: center;

    }
</style>

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
<div class="main_content">

    <?php

    if(isset($_SESSION['food'])){
        ?>
        <div>
            <p class="text-white bg-danger btn-danger p-2"><?php echo "<script>alert('OPERATION MADE SUCCESSFULLY')</script>"; ?> ?</p>
        </div>
        <?php
        unset($_SESSION['food']);
    }
    ?>
    <table class="table m-2 w-100  px-1 table-responsive-sm table-primary table-hover table-bordered">
        <thead>
        <tr><td class="text-center text-uppercase" colspan="6"> Active Orders</td></tr>
        <tr>
            <th>Name</th>
            <th>Food Image</th>
            <th>Price of each single serve</th>
            <th>Stock</th>
            <th colspan="2">Operation</th>
        </tr>
       </thead>
        <tbody>
        <?php
        $orders="select * from items";
        $ordersrun=mysqli_query($conn,$orders);
        while($rows=mysqli_fetch_assoc($ordersrun)){
            ?>
            <tr>
                <td class="text-center"><?php echo $rows['name']?></td>
                <td><img src="fooditems/<?php echo $rows['image']?>" height="100" width="130" alt="food image"></td>
                <td><?php echo $rows['price']?></td>
                <td><?php echo $rows['quantity']?></td>

                <td>
                    <form   method="post" action="edit_food.php">
                        <input type="number" hidden="" name="id" value="<?php echo $rows['id']?>">
                        <button type="submit" name="edit" class="btn btn-success" >Edit</button>
                    </form>
                </td>
                <td>
                    <form   method="post" action="foodprocessor.php">
                        <input type="number" hidden="" name="id" value="<?php echo $rows['id']?>">
                        <button name="delete_food" class="btn btn-success">Delete</button>
                    </form>
                </td>


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

