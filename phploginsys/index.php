<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! You are a <?php echo $_SESSION['role']; ?>.</p>
    <a href="admin.php">Admin Page</a><br>
    <a href="logout.php">Logout</a>



</body>
</html>