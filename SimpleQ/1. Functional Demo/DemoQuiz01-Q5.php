<?php
	//session_start();
    $question4 = "Answer4";
    $Q4 = $_POST['Q4'];
	setcookie($question4,$Q4,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | Question 5
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
            <form method='post' enctype='multipart/form-data' action='DemoQuiz01-Done.php'>
              <strong><p>Queston 5</p></strong>
              <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
              <p>What tissue do we see under the basement membrane?</p>
              <input type='radio' value='A' name='Q5' >A. Bone<br/>
              <input type='radio' value='B' name='Q5' >B. Cartilage<br/>
              <input type='radio' value='C' name='Q5' >C. Blood<br/>
              <input type='radio' value='D' name='Q5' >D. Ligaments<br/>
              <input type='submit' value='Submit Answers' name='submit'>
            </form>
		</div>
    </body>
</html>    