<?php
//Mark Iya
session_start();
if (isset($_SESSION['authenticated'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>

    <form action="validate.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
