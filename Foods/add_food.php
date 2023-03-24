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

</body>
</html>

