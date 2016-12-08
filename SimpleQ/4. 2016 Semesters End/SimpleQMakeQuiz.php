<?php
	session_start();
    require_once("coreFunctions.php");
    makeHeader("Welcome ".$_SESSION['user']."");
    makeNavBar();
    if(isset($_SESSION['user']))
    {
      displayProfile($_SESSION['user']);
    }
    else
      header("Location:SimpleQLogin.php");
    makeFooter();
?>