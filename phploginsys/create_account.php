<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$role = $_POST['role'];

if ($password !== $confirm_password) {
    header("Location: register.php?error=Wachtwoord matched niet");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: register.php?error=Username bestaat al");
    exit;
}

//$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $role);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: register.php?success=1");
?>
