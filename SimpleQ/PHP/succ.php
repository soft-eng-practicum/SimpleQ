<?php
session_start();
if(!$_SESSION)
{
    header('location:userauth.php');
}
?>
<h1>Yea but it worked though. </h1>
<a href = "logout.php">Click me to logout son.</a>