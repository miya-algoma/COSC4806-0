<?php
session_start();
if (isset($_SESSION['authenticated'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
  <form method="POST" action="login.php">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
  </form>

  <?php
    $correctUsername = "user123";
    $correctPassword = "pass123";

    if (!isset($_SESSION['failCount'])) {
        $_SESSION['failCount'] = 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $correctUsername && $password === $correctPassword) {
            $_SESSION['authenticated'] = 1;
            $_SESSION['username'] = $username;
            $_SESSION['failCount'] = 0;
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['failCount'] += 1;
            echo "<p style='color:red;'>Login failed. Attempt #" . $_SESSION['failCount'] . "</p>";
        }
    }
  ?>
</body>
</html>
