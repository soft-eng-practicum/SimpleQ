<?php
	session_start();
    require_once("coreFunctions.php");
    makeHeader("Edit Quiz");
    makeNavBar();
    if($_SESSION['user'])
    {
      displayQuizzes($_SESSION['facID']);
    }
    else
      header("Location:SimpleQLogin.php");
    makeFooter();
?>