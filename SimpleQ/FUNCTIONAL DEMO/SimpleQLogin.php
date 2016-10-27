<html> <!--lang="en" xmlns="http://www.w3.org/1999/xhtml"-->
	<head>
		<meta charset="utf-8" />
		<title>
			SimpleQ | Login 
		</title>
        <!--The following lines introduce the bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
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
            <form action="SimpleQMakeQuiz.php" method="post"><!--Log in form to allow all valid users to access thier account for quiz creation-->
                Please type your username:
                <input type="text" name="user"><br/>
                Please type your password: &nbsp
                <input type="password" name="password"> <br/>   
                <input type="submit" value="Log in" name="submit">&nbsp   
            </form>
        </div>
	</body>
</html>
