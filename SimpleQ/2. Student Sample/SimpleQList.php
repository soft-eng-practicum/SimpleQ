<html>
    <head>
    	<title>
        	SimpleQ | Quiz List
        </title>
        <!--The following lines introduce the bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<div>
            <nav class="navbar navbar-inverse"><!--Navigation Bar, copy for each page-->
                <div class="navbar-header">
                  <a class="navbar-brand" href="Home.php">Simple Q</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="SimpleQList.php">Quiz List</a></li>
                  <li><a href="SimpleQAbout.php">About</a></li>
                </ul>
            </nav>
        </div>       
        <div style = "text-align:center">
            <?php
                $searchBy = $_POST['search'];
                if(isset($_POST['submit']) && $_POST['submit']=!NULL)//if $searchBY has created quizzes, show those quizzes only
                {
                    echo "This is where you would see the quizzes by their creator";
                }
                else
                {
                    echo "<h2>Latest Quizzes</h2><hr/>";
                    echo "<a href=DemoQuiz01-Begin.php>Quiz Type A</a><br/><br/>";
                    echo "<a href=DemoQuiz02-Begin.php>Quiz Type B</a><br/><br/>";
                    echo "<hr/>";
                    echo "<a href='https://goo.gl/forms/S9uXwj03vzydQMn52'>Please take our short survey</a><br/><br/>";
                }
            ?>
        </div>
    </body>
</html>