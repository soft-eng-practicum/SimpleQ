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
        	<h3>Awww!</h3><br/>
            <hr/>
            <p>Too many missed questions. You are out of attempts, but don't quit <?php echo $_COOKIE['name'];?>! Try again.<p><br/>
            <p>Click <a href='KillQuiz1.php'>here</a> to return to the quiz list<p><br/>
		</div>
    </body>
</html>    