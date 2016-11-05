<?php
    $question8 = "Answer8";
    $Q8 = $_GET['Q8'];
	setcookie($question8,$Q8,time()+60*60*24,"/");
    $progress = "progress";
    $progressValue = "Question 9";
    setcookie($progress,$progressValue,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | Question 9
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
              <strong><p>Question 9</p></strong>
              <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
              <p>What organ is this?</p>
              <input type='radio' value='A' name='Q9' >A. The Trachea<br/>
              <input type='radio' value='B' name='Q9' >B. The Esophagus<br/>
              <input type='radio' value='C' name='Q9' >C. The Ureter<br/>
              <input type='radio' value='D' name='Q9' >D. The Colon<br/>
              <input type='submit' value='Submit Answers' name='submit'>
            </form>
            <?php
                echo "<hr/>";
                if(isset($_POST['submit']) && $_POST['submit']!=NULL)
                {	
                   echo "Submit clicked!<br/>";
                   if($_POST['Q9']=="B")
                    {
                        header("Location:DemoQuiz01-Q10.php?Q9=B");
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