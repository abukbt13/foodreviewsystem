<?php
session_start();
include '../connection.php';
if(isset($_POST['edit'])){
    $id=$_POST['id'];
  $item="select * from items where id='$id'";
  $itemrun=mysqli_query($conn,$item);
    $items = mysqli_fetch_all($itemrun, MYSQLI_ASSOC);
    foreach ($items as $itemself){
      $name=$itemself['name'];
      $id=$itemself['id'];
      $price=$itemself['price'];
      $quantity=$itemself['quantity'];
      $image=$itemself['image'];
      $category=$itemself['category'];
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link rel="stylesheet" href="../mycss/style.css">
    <script src="../JS/app.js"></script>
</head><style>
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
<style>
    .content{

        width: 100vw;
        /*height: 100vh;*/
    }
    .p{
        color:yellow;
        font-size: 18px;
    }
</style>
<form class="formValidate" id="formValidate1" method="post" action="foodprocessor.php" enctype="multipart/form-data">

    <div class="content d-flex align-items-center justify-content-center">
        <div class="thecontent">
            <div class="form-group">
                <h4 class="text-center text-secondary">Upload a Food Item here</h4>
                <hr>
            </div>
            <div class="form-group">
                <input type="number" name="id" hidden="" value="<?php echo $id;?>">
                <p class="text-center">Name of the Food</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;"type="text" name="name" required class="form-control"  placeholder="Enter Name" value="<?php echo $name;?>">
            </div>
            <div class="form-group">
                <p class="text-center ">Price</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" type="number" name="price" class="form-control" required placeholder="Enter Price"  value="<?php echo $price;?>">

            </div>
            <div class="form-group">
                <p class="text-center ">Quantity</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" type="number" name="quantity" class="form-control" required="" placeholder="Enter Quantity"  value="<?php echo $quantity;?>">
            </div>
            <div class="form-group">
                <p class="text-center ">Category of Food</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" required="" type="text" name="category"class="form-control"  placeholder="Enter Category"  value="<?php echo $category;?>">
            </div>
            <div class="form-group">
                <p class="text-center ">Food Image</p>
                <input type="text" hidden="" name="initialpicture" value="<?php echo $image;?>">
                <img src="fooditems/<?php echo $image;?>" width="290" height="290" alt="image"><br>
                <p>Change food image</p>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group d-flex justify-content-center my-2">
                <button style="background: #ddd;" class="btn mt-2 mb-4 w-100" type="submit" name="updatefood_item">Update  food item

                </button>
            </div>
        </div>

    </div>


    </div>
</form>
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

