<?php
	//start a session and set cookies to track answers and a grade 
?>
<html>
    <head>
    	<title>
        	Demo Quiz 02 | One Stop Shop
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
            <form method="post" enctype="multipart/form-data" action="DemoQuiz02Result.php">
                <strong><p>Queston 1</p></strong>
                <p>This demo is fire.</p>
                <input type='radio' value='A' name='Q1' >A. Strongly Disagree<br/>
                <input type='radio' value='B' name='Q1' >B. Disagree<br/>
                <input type='radio' value='C' name='Q1' >C. Neutral<br/>
                <input type='radio' value='D' name='Q1' >D. Agree<br/>
                <input type='radio' value='E' name='Q1' >E. Strongly Agree<br/><br/>

                <strong><p>Queston 2</p></strong>
                <p>This demo is OP SUPER DUPER fire!</p>
                <input type='radio' value='A' name='Q2' >A. Strongly Disagree<br/>
                <input type='radio' value='B' name='Q2' >B. Disagree<br/>
                <input type='radio' value='C' name='Q2' >C. Neutral<br/>
                <input type='radio' value='D' name='Q2' >D. Agree<br/>
                <input type='radio' value='E' name='Q2' >E. Strongly Agree<br/><br/>

                <strong><p>Queston 3</p></strong>
                <p>I think presentations hurt.</p>
                <input type='radio' value='A' name='Q3' >A. Strongly Disagree<br/>
                <input type='radio' value='B' name='Q3' >B. Disagree<br/>
                <input type='radio' value='C' name='Q3' >C. Neutral<br/>
                <input type='radio' value='D' name='Q3' >D. Agree<br/>
                <input type='radio' value='E' name='Q3' >E. Strongly Agree<br/><br/>

                <strong><p>Queston 4</p></strong>
                <p>I made it to the end</p>
                <input type='radio' value='A' name='Q4' >A. True<br/>
                <input type='radio' value='B' name='Q4' >B. False<br/>
                <input type=submit name="submit "value="Submit Answers">
            </form>
        </div>
    </body>
</html>