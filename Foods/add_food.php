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
</head>
<body style="background-size: cover; background-image: url('fooditems/6997g.jpeg')">
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
<style>
    .content{

        width: 100vw;
        height: 100vh;
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
          <p class="text-center p">Name of the Food</p>
            <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;"type="text" name="name" required class="form-control"  placeholder="Enter Name">
        </div>
       <div class="form-group">
               <p class="text-center p">Price</p>
                <input type="number" name="price" class="form-control" required placeholder="Enter Price">

       </div>
            <div class="form-group">
                <p class="text-center p">Quantity</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" type="number" name="quantity" class="form-control" required="" placeholder="Enter Quantity">
            </div>
            <div class="form-group">
                <p class="text-center p">Category of Food</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" required="" type="text" name="category"class="form-control"  placeholder="Enter Category">
            </div>
            <div class="form-group">
                <p class="text-center p">Food Image</p>
                <input style="border:none; border-bottom: 2px solid #00A8FF; border-radius: 0px;" type="file" required="" class="form-control" name="image">
            </div>
            <div class="form-group d-flex justify-content-center mt-1">
                <button style="background: #ddd;" class="btn  w-100" type="submit" name="add_item">Add food Item

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

