<?php
//Mark Iya
session_start();
if (!isset($_SESSION['authenticated'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment 1 - Mark Iya</title>
</head>
<body>
    <h1>Assignment 1</h1>
    <p>Student: Mark Iya</p>
    <p>Student Number: 219600000</p>
    <p>Welcome, <?= $_SESSION['username'] ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
