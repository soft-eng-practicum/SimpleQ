<?php
	//start a session and set cookies to track answers and a grade 
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
                        if($_POST['Q1']== "A")
                            $grade += 20;
                        else $miss1 = "*Question 1 ";    
                        if($_POST['Q2']== "A")
                            $grade += 20;
                        else $miss2 = "*Question 2 ";
                        if($_POST['Q3']== "D")
                            $grade += 20;
                        else $miss3 = "*Question 3 ";    
                        if($_POST['Q4']== "C")
                            $grade += 20;
                        else $miss4 = "*Question 4 ";    
                        if($_POST['Q5']== "B")
                            $grade += 20;
                        else $miss5 = "*Question 5 ";    
                        echo "Quiz Complete!<hr/>Your score:".$grade."<hr/>
                        Questions Missed:<br/>".$miss1."<br/>".$miss2."<br/>".$miss3."<br/>".$miss4."<br/>".$miss5."<br/>";
            ?>
            <hr/>
            <p>Click <a href='KillQuiz1.php'>here</a> to return to the quiz list<p><br/>
        </div>
    </body>
</html>