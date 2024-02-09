<?php
include_once 'config.php';
if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_tax = $_POST['p_tax'];
    $p_dics = $_POST['p_dics'];
    $sql = "INSERT INTO `product`(`p_name`, `p_price`, `p_tax`, `p_dics`) VALUES ('$p_name','$p_price','$p_tax','$p_dics')";
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
