<?php
	require_once("coreFunctions.php");
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['facID']);
    session_unset();
    session_destroy();
    makeHeader("You are logged out");
    makeNavBar();
    echo "<div class='container'>
    		<p>You have been successfully logged out.</p><br/>
            <p>Click <a href='Home.php'>here</a> to return home</p>
            </div>";
    makeFooter();
?>