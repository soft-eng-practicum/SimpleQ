<?php
    $question1 = "Answer1";
    $Q1 = $_GET['Q1'];
	setcookie($question1,$Q1,time()+60*60*24,"/");
    $progress = "progress";
    $progressValue = "Question 2";
    setcookie($progress,$progressValue,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | Question 2
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
            <form method='post' enctype='multipart/form-data' action="<?php echo $_SERVER['SELF']?>">
              <strong><p>Queston 2</p></strong>
              <img src='Images/Picture1Letters.jpg' alt='Trachea Picture 1' style='width:500px;height:400px'><br/>
              <p>Where do you find the lumen?</p>
              <input type='radio' value='A' name='Q2' >A<br/>
              <input type='radio' value='B' name='Q2' >B<br/>
              <input type='radio' value='C' name='Q2' >C<br/>
              <input type='radio' value='D' name='Q2' >D<br/>
              <input type='submit' value='Next Question' name='submit'>
            </form>
            <?php
                echo "<hr/>";
                if(isset($_POST['submit']) && $_POST['submit']!=NULL)
                {	
                   echo "Submit clicked!<br/>";
                   if($_POST['Q2']=="D")
                    {
                        header("Location:DemoQuiz01-Q3.php?Q2=D");
                    }
                    else
                    {
                        echo "<hr/>Wrong answer, try again<br/>";
                        $_COOKIE['Lives']--;
                        $cookieLives = "Lives";
						setcookie($cookieLives,$_COOKIE['Lives'],time()+60*60*24,"/");
                        echo "Chances left: ".$_COOKIE['Lives'];
                        
                        if($_COOKIE['Lives']==0)
                        {
                        	header("Location:DemoQuiz01-Fail.php");
                        }
                    }
                }
            ?>
		</div>
    </body>
</html>        