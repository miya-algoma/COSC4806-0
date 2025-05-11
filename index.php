<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
  <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
  <p>Today is <?php echo date("F j, Y, g:i a"); ?></p>
  <a href="logout.php">Logout</a>
</body>
</html>
