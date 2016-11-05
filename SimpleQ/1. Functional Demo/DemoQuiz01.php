<?php
	session_start();
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | The Break Down
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
        <form method='post' enctype='multipart/form-data' action='DemoQuiz01-Q2.php'>
        	<strong><p>Queston 1</p></strong>
        	<img src='Images/Picture1.jpg' alt='Trache Picture 1' style='width:500px;height:400px'><br/>
            <p>In the body, what shape is this organ?</p>
            <input type='radio' value='A' name='Q1' >A. Tubular, like a cylander<br/>
            <input type='radio' value='B' name='Q1' >B. Spherical, like a ball<br/>
            <input type='radio' value='C' name='Q1' >C. Rectangular<br/>
            <input type='radio' value='D' name='Q1' >D. Cuboid<br/>
            <input type='submit' value='Next Question' name='submit'>
        </form>
        </div>
    </body>
</html>