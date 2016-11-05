<?php
	$fileName="DemoQuiz01Results.txt";
    $data = array($_COOKIE['name']."\t",$_COOKIE['email']."\t",$_COOKIE['quiz']."\t",$_COOKIE['progress']."\t",$_COOKIE['date']."\t",$_COOKIE['time']."\n");    
    file_put_contents($fileName,$data, FILE_APPEND | LOCK_EX);
    
    session_unset();
    session_destroy();
    header("Location:SimpleQList.php");
    exit();
?>