<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "xlab";

try
{
    $conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
}
catch(PDOException $e)
{
    die("Connection Failed: ".$e->getMessage());
}
?>