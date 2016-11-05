<?php
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
        	Demo Quiz 02 Results
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

                        if($_POST['Q1']== "B")
                            $grade += 1;
                        else $miss1 = "*Question 1 ";    
                        if($_POST['Q2']== "D")
                            $grade += 1;
                        else $miss2 = "*Question 2 ";
                        if($_POST['Q3']== "A")
                            $grade += 1;
                        else $miss3 = "*Question 3 ";    
                        if($_POST['Q4']== "A")
                            $grade += 1;
                        else $miss4 = "*Question 4 ";    
                        if($_POST['Q5']== "D")
                            $grade += 1;
                        else $miss5 = "*Question 5 ";
                        if($_POST['Q6']== "C")
                            $grade += 1;
                        else $miss6 = "*Question 6 ";
                        if($_POST['Q7']== "B")
                            $grade += 1;
                        else $miss7 = "*Question 7 ";
                        if($_POST['Q8']== "B")
                            $grade += 1;
                        else $miss8 = "*Question 8 ";
                        if($_POST['Q9']== "B")
                            $grade += 1;
                        else $miss9 = "*Question 9 ";
                        if($_POST['Q10']== "C")
                            $grade += 1;
                        else $miss10 = "*Question 10 ";
                        if($_POST['Q11']== "D")
                            $grade += 1;
                        else $miss11 = "*Question 11 ";
                        if($_POST['Q12']== "B")
                            $grade += 1;
                        else $miss12 = "*Question 12 ";
                        if($_POST['Q13']== "A")
                            $grade += 1;
                        else $miss13 = "*Question 13 ";
                        echo "Quiz Complete!<hr/>Correct Answers: ".$grade."/13<hr/>
                        Questions Missed:<br/>".$miss1."<br/>".$miss2."<br/>".$miss3."<br/>".$miss4."<br/>".$miss5."<br/>"
                        .$miss6."<br/>".$miss7."<br/>".$miss8."<br/>".$miss9."<br/>".$miss10."<br/>".$miss11."<br/>".$miss12."<br/>"
                        .$miss13."<br/>";
                        
                        $progress = $grade."/13 Correct";
                        $progressValue = "Question 10";
                        setcookie($progress,$progressValue,time()+60*60*24,"/");
            ?>
            <hr/>
            <p>Click <a href='KillQuiz2.php'>here</a> to return to the quiz list<p><br/>
        </div>
    </body>
</html>