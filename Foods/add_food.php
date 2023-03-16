<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link rel="stylesheet" href="../CSS/style.css">
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
<style>
    .content{
        background-color: #0dcaf0;
        width: 100vw;
        height: 100vh;
    }
</style>
<form class="formValidate" id="formValidate1" method="post" action="foodprocessor.php" enctype="multipart/form-data">
    <div class="content d-flex align-items-center justify-content-center">
        <div class="thecontent">
        <div class="">
            <h4 class="header text-center">Add Item</h4>
        </div>
       <div class="form-group"></div>
        <input type="text" name="name" required class="form-control"  placeholder="Enter Name">
           <div class="form-group">
               <label>Price</label><br>
                <input type="number" name="price" class="form-control" required placeholder="Enter Price">
           </div>
            <div class="form-group">
                <label>quantity</label><br>
                <input type="number" name="quantity" class="form-control" required="" placeholder="Enter Quantity">
            </div>
            <div class="form-group">
                <label>category</label><br>
                 <input required="" type="text" name="category"class="form-control"  placeholder="Enter Category">
            </div>
            <div class="form-group">
                <label class="ms-4">Image</label><br>
              <input type="file" required="" class="form-control" name="image">
            </div>
            <div class="input-field col s12">
                <button class="btn btn-success" type="submit" name="add_item">Add food Item

                </button>
            </div>
        </div>

    </div>


    </div>
</form>

</body>
</html>

