<html>
	<head>
    	<title>
        	SimpleQ 
        </title>
        <!--The following lines introduce the bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
	<body style="text-align:center">
    	<nav class="navbar navbar-inverse"><!--Navigation Bar, copy for each page-->
                <div class="navbar-header">
                  <a class="navbar-brand" href="Home.php">Simple Q</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="SimpleQList.php">Quiz List</a></li>
                  <li><a href="SimpleQAbout.php">About</a></li>
                </ul>
            </nav>
        <?php
        	$username = $_POST['user'];
            $password = $_POST['password'];
            if($username =="Daaps" && $password =="Daaps")
            {
            	echo "<h1>Welcome $username</h1>";
                echo "<h6>Here, the user can elect to either edit an existing quiz or create a new one.</h6>";
        		echo "<p>The user only has access to the quizzes they have created</p>";
                echo "<a href='SimpleQuizEdit.php' class='btn btn-info' role='button'>Edit Quiz</a>&nbsp&nbsp
                	  <a href='SimpleQNew.php' class='btn btn-info' role='button'>New Quiz</a>";
            }
            else
             header("Location:SimpleQLogin.php");
        ?>
    	
        
        
    </body>
</html>
