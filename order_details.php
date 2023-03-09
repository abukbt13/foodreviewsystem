<?php

$servername = "localhost";
$server_user = "root";
$server_pass = "Pass2022";
$dbname = "foodorder";
//$name = $_SESSION['name'];
//$role = $_SESSION['role'];
$con=new mysqli("$servername","$server_user","$server_pass","$dbname") or die("mysqli_error");

if(isset($_GET['order_now'])){
    $id=$_GET['id'];
}
$sql="select * from items where id='$id'";
$sqlrun=mysqli_query($con,$sql);
$items=mysqli_fetch_all($sqlrun,MYSQLI_ASSOC);
foreach ($items as $item){
    $price=$item["price"];
    $image=$item["image"];
    $name=$item["name"];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orders</title>
    <link rel="stylesheet" href="css/stylo.css">
</head>
<body>
<style>
    .itemdetails{
        width:100vw;
        height: 90vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        /*background-color: grey;*/
    }
    .item{
        width: 30rem;
        min-height: 40rem;
        max-height: 60rem;
        overflow: scroll;
        padding: 1rem;
        background-color: pink;
    }
</style>
<div class="itemdetails">
    <div class="item">
        <h4 style="text-align: center;text-transform: uppercase;"><?php echo $name; ?></h4>
        <img src="account/items/<?php echo $image ?>" alt="" width="100%" height="300">
        <div>
            <a  class="mt-2 btn btn-danger w-100" href="order.php?id=<?php echo $row['id'] ?>&order_now=">
                Order Now
            </a>
        </div>
        <p class="text-center text-uppercase ">Our happy customers</p>
        <hr>
        <hr>
        <div class="show">
            <p>Wow this food is amazing I really Enjoyed it made may day</p>
        </div> <div class="show">
            <p>
                Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Ab aliquam aut deleniti illum impedit incidunt officia possimus,
                quas quidem, rerum sit suscipit, tempora unde veniam voluptate?
                Aliquid amet at ducimus ex exercitationem iste, libero molestias
                neque odio pariatur placeat porro quae quaerat reiciendis rerum sapiente, temporibus, voluptatum? Architecto dignissimos distinctio eveniet impedit inventore maiores modi molestias quisquam reprehenderit, sunt? Accusantium aliquid asperiores corporis culpa delectus distinctio fuga harum ipsum libero nam nesciunt nulla quaerat quidem repellat reprehenderit suscipit tempore, veritatis voluptate! Accusamus ad alias cum eaque facilis libero magni obcaecati reprehenderit sunt vel! Animi atque consectetur doloremque, sequi sit vel.</p>

            </p>

            </p>
        </div>
    </div>

</div>
</body>
</html>