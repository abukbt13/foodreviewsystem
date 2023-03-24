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
<nav style="background-color: #ddd;" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Aarons and sons invest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="food.php">Foods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admindashboard.php">Dashboard</a>
                </li> <li class="nav-item">
                    <a class="nav-link" href="reviews.php">Reviews</a>
                </li>
                </li> <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
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
        <tr><td class="text-center text-uppercase" colspan="5"> Active Orders</td></tr>
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

</body>
</html>

