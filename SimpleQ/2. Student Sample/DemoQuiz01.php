<?php
	session_start();
    $cookieLives = "Lives";
    $Lives = 3;
    setcookie($cookieLives,$Lives,time()+60*60*24,"/");
    $cookieName = "name";
    $cookieEmail = "email";
    $nameValue = $_POST['name'];
    $emailValue = $_POST['email'];
    setcookie($cookieName,$nameValue,time()+60*60*24,"/");
    setcookie($cookieEmail,$emailValue,time()+60*60*24,"/");
    $cookieQuiz = "quiz";
    $quizValue = "DemoQuiz01";
    setcookie($cookieQuiz,$quizValue,time()+60*60*24,"/");
    header("Location:DemoQuiz01-Q1.php");
?>