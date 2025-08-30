<?php
session_start();

$valid_username = "admin";
$valid_password = "admin";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "Both fields are required.";
    } elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .container {
            width: 300px; margin: 100px auto; padding: 20px;
            background: white; border-radius: 10px; box-shadow: 0 0 10px gray;
        }
        input[type=text], input[type=password] {
            width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px;
        }
        input[type=submit] {
            width: 100%; background: blue; color: white; border: none; padding: 10px;
            border-radius: 5px; cursor: pointer;
        }
        input[type=submit]:hover { background: darkblue; }
        .error { color: red; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Login Form</h2>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required>
        
        <label>Password:</label>
        <input type="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>
    
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
</div>

</body>
</html>
