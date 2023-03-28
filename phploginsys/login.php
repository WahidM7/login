<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
if (isset($_GET['error'])) {
    echo '<p style="color: red;">Username of wachtwoord vals.</p>';
} elseif (isset($_GET['unauthorized'])) {
    echo '<p style="color: red;">Je hebt geen toegang tot deze pagina.</p>';
} elseif (isset($_GET['logged_out'])) {
    echo '<p style="color: green;">Je bent uitgelogd.</p>';
}
?>
<form action="authenticate.php" method="post">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" value="Login">
    <p>Geen account? <a href="register.php">Registreer hier</a>.</p>
</form>
</body>
</html>
