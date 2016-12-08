<?php
	session_start();
    require_once("coreFunctions.php");
    makeHeader("".$_SESSION['user']." | Account Settings");
    makeNavBar();
    if(isset($_SESSION['user']))
    {
      displaySettings($_SESSION['facID']);
    }
    else
      header("Location:SimpleQLogin.php");
    makeFooter();
?>