<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: question28a.php");
    exit();
}

$username = $_SESSION['username'] ?? $_COOKIE['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?> 🎉</h2>
    <p>You are successfully logged in using <?php echo isset($_SESSION['username']) ? "Session" : "Cookie"; ?>.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
