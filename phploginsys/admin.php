<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['role'] != 'admin') {
    header("Location: login.php?unauthorized=1");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Welkom bij de Admin Pagina</h1>
    <p>als je dit ziet betekent t dat je admin bent woowaahhw :DDDD</p>
    <a href="index.php">Home</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
