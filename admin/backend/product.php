<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'config.php';
if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_tax = $_POST['p_tax'];
    $p_dics = $_POST['p_dics'];
    $folder = "./upload/";
    $img = $_FILES['img']['name'];
    $target = $folder . $img;
    move_uploaded_file($_FILES['img']['tmp_name'], $target);
    $sql = "INSERT INTO `product`(`p_name`, `p_price`, `p_tax`, `p_dics`,`img`) VALUES ('$p_name','$p_price','$p_tax','$p_dics','$img')";
    $run = mysqli_query($mysqli, $sql);
    if ($run) {
        header('location:http://localhost/project/admin/product.php');
    } else {
        echo "NOT RUN";
    }
}

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $sql = "DELETE FROM `product` WHERE `id` = '$pid'";
    $run = mysqli_query($mysqli, $sql);
    if ($run) {
        header('location:../all-product.php');
    }
}
