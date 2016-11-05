<!DOCTYPE html>

<html> <!--lang="en" xmlns="http://www.w3.org/1999/xhtml"-->
	<head>
		<meta charset="utf-8" />
		<title>
			SimpleQ | HOME 
		</title>
        <!--The following lines introduce the bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
    	<div class="jumbotron">
        	<center><h1>Welcome to the Simple Q</h1></center>
       </div>
       <div class="container">
            <nav class="navbar navbar-inverse"><!--Navigation Bar, copy for each page-->
                <div class="navbar-header">
                  <a class="navbar-brand" href="Home.php">Simple Q</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="SimpleQList.php">Quiz List</a></li>
                  <li><a href="SimpleQAbout.php">About</a></li>
                </ul>
            </nav>
            <div  style="text-align:right" class ="well">
                <form method="post" action="SimpleQList.php"><!--Goes to the list of most recent quizzes-->
                    <input type="text" name="search" placeholder="Search by Faculty">
                    <input type=submit name="submit "value="Find Quiz"><!--Searches for quizzes by Author-->   
                </form>
            </div>
            <center>
            	<h3>Please select one of the following</h3>
                <a href="SimpleQList.php" class="btn btn-info" role="button">Take a Quiz</a>
                <a href="SimpleQLogin.php" class="btn btn-info" role="button">Make a Quiz</a>
                <!--Above is a button link for styling-->
            </center>
        </div>
	</body>
</html>