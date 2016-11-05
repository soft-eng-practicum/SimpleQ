<?php
    $question13 = "Answer13";
    $Q13 = $_GET['Q13'];
	setcookie($question13,$Q13,time()+60*60*24,"/");
    $progress = "progress";
    $progressValue = "Quiz Completed";
    setcookie($progress,$progressValue,time()+60*60*24,"/");
    
    date_default_timezone_set("America/New_York");
    $date = date("m/d/Y");//."\t";
    $time = date("h:i:sa");//."\t";
    $ip = $_SERVER['REMOTE_ADDR'];//."\n";
    $cookieDate = "date";
    $cookieTime = "time";
    setcookie($cookieDate,$date,time()+60*60*24,"/");
    setcookie($cookieTime,$time,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | Complete
        </title>
        <!--The following lines introduce the bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<nav class="navbar navbar-inverse"><!--Navigation Bar, copy for each page-->
            <div class="navbar-header">
              <a class="navbar-brand" href="Home.php">Simple Q</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="SimpleQList.php">Quiz List</a></li>
              <li><a href="SimpleQAbout.php">About</a></li>
            </ul>
        </nav>
        <div class="container" style = "text-align:left">
        	<h3>Quiz Complete!</h3><br/>
            <?php
            		$grade = 0;
                    $miss1 ="";
                    $miss2 ="";
                    $miss3 ="";
                    $miss4 ="";
                    $miss5 ="";
                    $miss6 ="";
                    $miss7 ="";
                    $miss8 ="";
                    $miss9 ="";
                    $miss10 ="";
                    $miss11 ="";
                    $miss12 ="";
                    $miss13 ="";
                    if($_COOKIE['Answer1']== "B")
                    	$grade += 1;
                    else $miss1 = "*Question 1 ";    
                    if($_COOKIE['Answer2']== "D")
                    	$grade += 1;
                    else $miss2 = "*Question 2 ";
                    if($_COOKIE['Answer3']== "A")
                    	$grade += 1;
                    else $miss3 = "*Question 3 ";    
                    if($_COOKIE['Answer4']== "A")
                    	$grade += 1;
                    else $miss4 = "*Question 4 ";    
                    if($_COOKIE['Answer5']== "D")
                    	$grade += 1;
                    if($_COOKIE['Answer6']== "C")
                    	$grade += 1;
                    else $miss6 = "*Question 6 ";
                    if($_COOKIE['Answer7']== "B")
                      $grade += 1;
                    else $miss7 = "*Question 7 ";
                    if($_COOKIE['Answer8']== "B")
                      $grade += 1;
                    else $miss8 = "*Question 8 ";
                    if($_COOKIE['Answer9']== "B")
                      $grade += 1;
                    else $miss9 = "*Question 9 ";
                    if($_COOKIE['Answer10']== "C")
                      $grade += 1;
                    else $miss10 = "*Question 10 ";
                    if($_COOKIE['Answer11']== "D")
                      $grade += 1;
                    else $miss11 = "*Question 11 ";
                    if($_COOKIE['Answer12']== "B")
                      $grade += 1;
                    else $miss12 = "*Question 12 ";
                    if($_COOKIE['Answer13']== "A")
                      $grade += 1;    
                    else $miss13 = "*Question 13 ";   
                    echo "Congratulations ".$_COOKIE['name'].", you made it!<hr/>";
            ?>
            <hr/>
            <p>Click <a href='KillQuiz1.php'>here</a> to return to the quiz list<p><br/>
		</div>
    </body>
</html>    