<?php

if($_POST)
{
    $host = "";
    $user = "root";
    $pass = "";
    $db = "xlab"; //our official databasename goes here, just tested it on a local db

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT * from users where username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION['auth'] = 'true';
        header('location:succ.php');
    }
    else
    {
        echo 'Incorrect Username or Password';
    }
}
?>

<h1>Login</h1>

<form method="POST">
    username: <input type="text" name="username" />
    password: <input type="text" name="password" />
    <input type="submit" value = "Login">
</form>
