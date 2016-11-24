<?php
	session_start();
    require_once("coreFunctions.php");
    if($_SESSION['user'])
    {
    	makeHeader("Quiz Created!");
        makeNavBar();
        $conn = db_connect();
        $quizName = $_POST['quizName'];
        $attempts = $_POST['attempts'];
    	if($_COOKIE['template']=="A")
        {
            echo "<div class = 'container'><h3>Quiz Created!<br/> Here is a Preview of Your ".$_COOKIE['qAmount']." Question Quiz.<h3>";
            echo "<form method='post' enctype='multipart/form-data' action='Done.php'>";
            $spit = spitQuestions($_COOKIE['template'],$_COOKIE['qAmount']);
            echo $spit;
            echo "</form>";
            echo "</div>";
            makeQuizA($quizName,$_COOKIE['qAmount'],$attempts);
            $sql = "INSERT INTO Quiz VALUES('".$quizName."',".$_SESSION['facID'].")";
            my_sql_exec($conn,$sql);
        }
        if($_COOKIE['template']=="B")
        { 
            echo "<div class = 'container'><h3>Quiz Created!<br/> Here is a Preview of Your ".$_COOKIE['qAmount']." Question Quiz.<h3>";
            echo "<form method='post' enctype='multipart/form-data' action='Done.php'>";
            $spit = spitQuestions($_COOKIE['template'],$_COOKIE['qAmount']);
            echo $spit;
            echo "</form>";
            echo "</div>";
            makeQuiz($quizName);
            $sql = "INSERT INTO Quiz VALUES('".$quizName."',".$_SESSION['facID'].")";
            my_sql_exec($conn,$sql);
        }
        if($_COOKIE['template']=="C")
        {
            echo "<div class = 'container'><h3>Quiz Created!<br/> Here is a Preview of Your ".$_COOKIE['qAmount']." Question Quiz.<h3>";
            echo "<form method='post' enctype='multipart/form-data' action='Done.php'>";
            $spit = spitQuestions($_COOKIE['template'],$_COOKIE['qAmount']);
            echo $spit;
            echo "</form>";
            echo "</div>";
            makeQuiz($quizName);
            $sql = "INSERT INTO Quiz VALUES('".$quizName."',".$_SESSION['facID'].")";
            my_sql_exec($conn,$sql);
        }
        makeFooter();
    }
    else
    {
    	header("Location:SimpleQLogin.php");
    } 
    //session_unset();
    //session_destroy();
    //exit();
?>