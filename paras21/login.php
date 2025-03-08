<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "password123")
    {
        $_SESSION['username']= $username;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "Invalid username or password.";
    }
}
?>
<form method="POST" action="">
    <inout type="text" name="username" placeholder="username" required>
    <inout type="text" name="password" placeholder="password" required>
    <button type="submit">Login</button>
</form>