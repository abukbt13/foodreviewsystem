<?php
 session_start();
 ?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'header.php'; ?>
<style>

</style>
<body style="background-image:url('Foods/fooditems/2865fgcjnf.jpeg');background-size: cover;background-color: white;height: 90vh;">
<div class="row d-flex align-items-center justify-content-center">

    <div  style="width: 23rem;" class="form bg-white pt-5 mt-4 mb-3">
        <form action="processor.php" method="post">
            <h2 class="text-center text-info">Login Here</h2>
            <?php

            if(isset($_SESSION['login'])){
                ?>
                <div>
                    <p class="text-white bg-danger btn-danger p-2"><?php echo $_SESSION['login']; ?> ?</p>
                </div>
                <?php
                unset($_SESSION['login']);
            }
            ?>
            <form method="post" action="processor.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" type="password" name="password" class="form-control" >
                </div>
                <button style="background: #ddd;color: blue;" type="submit" name="login" class="btn w-100">Login</button>

                <div class="d-flex justify-content-between">

                   <span>Don't remember password?</span> <a  class="" href="forgetpassword.php">Click here</a>
                </div>
            </form>
            <p class="text-center text-uppercase" > <a  href="register.php">Dont have an Account?</a></p>
    </div>
</div>
</div>
</body>
</html>
