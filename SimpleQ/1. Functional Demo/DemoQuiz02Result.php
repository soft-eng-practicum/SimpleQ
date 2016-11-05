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
        <div class="container" style = "text-align:center">     
        <?php
	    //Based on the selections from the form, the user's grade will increment accordingly by the value of each question
	    //and posted
            $grade = 0;   
            if($_POST['Q1']== "E")
              $grade += 25;
            if($_POST['Q2']== "E")
              $grade += 25;
            if($_POST['Q3']== "D")
              $grade += 25;
            if($_POST['Q4']== "B")
              $grade += 25;

            echo "<hr/>";
            echo "Your grade is a ".$grade."<br/>";
            echo "Click <a href=SimpleQList.php>here</a> to return to the quiz list<br/>";
        ?>
        </div>
    </body>
</html>
