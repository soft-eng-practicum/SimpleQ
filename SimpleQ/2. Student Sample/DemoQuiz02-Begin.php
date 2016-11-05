<html>
    <head>
    	<title>
        	Demo Quiz 02 | Getting Started
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
        	<h3>Welcome to Demo Quiz 02!</h3>
            <h5/>Answer all questions to the best of your ability!<h5/>
            <hr/>
            <form method='post' enctype='multipart/form-data' action="DemoQuiz02.php">
                Please enter your name<br/> <input type="text" name="name"><br/>
                Please enter your student email address<br/> <input type="text" name="email"><hr/>
                <input type="submit" name="submit" value="Take Quiz">
            </form>
        </div>   
	</body>
</html>     