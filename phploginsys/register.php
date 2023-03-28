<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<?php
if (isset($_GET['error'])) {
    echo '<p style="color: red;">Error: ' . htmlspecialchars($_GET['error']) . '</p>';
} elseif (isset($_GET['success'])) {
    echo '<p style="color: green;">Account successfully created! You can now <a href="login.php">login</a>.</p>';
}
?>
<form action="create_account.php" method="post">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <label>Confirm Password:</label>
    <input type="password" name="confirm_password" required>
    <br>
    <label>Role:</label>
    <select name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
    <br>
    <input type="submit" value="Register">
</form>
</body>
</html>