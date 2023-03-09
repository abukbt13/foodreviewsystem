<?php
include '../includes/connect.php';

if(isset($_POST['add_item'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $filename = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];

    $image_new_name = uniqid(10, 11111) . $filename;


    $sql = "INSERT INTO items (name, price,image) VALUES ('$name', $price,'$image_new_name')";
    $sql_run = mysqli_query($con, $sql);
    if ($sql_run) {
        session_start();
        move_uploaded_file($filetmp, "../items/" . $image_new_name);
        $_SESSION['status'] = "You have successfully added an item";
        header("location: ../admin-page.php");
    } else {
        $_SESSION['status'] = "An error occurred. Please try again with correct details";
        header("location: ../admin-page.php");
    }
}
