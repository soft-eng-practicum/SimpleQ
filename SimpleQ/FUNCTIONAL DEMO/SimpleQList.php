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
                else//else show all of the latest quizzes created by all faculty
                {
                    echo "<h2>Latest Quizzes</h2><hr/>";
                    echo "<a href=DemoQuiz01.php?quiz=1>Demo Quiz</a><br/><br/>";
                    echo "<a href=DemoQuiz02.php>Demo Quiz 2</a><br/><br/>";
                }
            ?>
        </div>
    </body>
</html>
