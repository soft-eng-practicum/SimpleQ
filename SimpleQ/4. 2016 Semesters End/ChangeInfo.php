<?php
	session_start();
    require_once("coreFunctions.php");
    makeHeader("".$_SESSION['user']." | Account Settings");
    makeNavBar();
    if(isset($_SESSION['user']))
    {
    	changeInformation($_GET['option']);    
    }
    else
      header("Location:SimpleQLogin.php");
    makeFooter();
?>