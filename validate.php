<?php
//Mark Iya - 219600000
//COSC4806 Assignment 1
session_start();

$valid_username = "mark";
$valid_password = "password";

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$_SESSION['username'] = $username;

if ($valid_username === $username && $valid_password === $password) {
    $_SESSION['authenticated'] = 1;
    $_SESSION['failed_attempts'] = 0;
    header("Location: index.php");
} else {
    if (!isset($_SESSION['failed_attempts'])) {
        $_SESSION['failed_attempts'] = 1;
    } else {
        $_SESSION['failed_attempts'] += 1;
    }

    $_SESSION['error'] = "Unsuccessful attempt #" . $_SESSION['failed_attempts'];
    header("Location: login.php");
}
exit();
