<?php
include_once 'config.php';
//
if (isset($_POST['enter_cate'])) {
    $c_name = $_POST['c_name'];
    $sql = "INSERT INTO `categories`(`c_name`) VALUES ('$c_name')";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header('location:http://localhost/project/admin/category.php');
    } else {
        echo "NOT INSERT CATEGORY";
    }
}
