<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include_once 'config.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `users`  WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($mysqli, $select);
    if (mysqli_num_rows($run) > 0) {
        session_start();
        $_SESSION['email'] = $email;
        // $_SESSION['name']=
        header('location:../index.php');
    } else {
        session_start();
        $_SESSION['loginmsg'] = "Failed to login please try again";
        echo "Failed";
    }
}
