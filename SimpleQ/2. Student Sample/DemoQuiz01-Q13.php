<?php
    $question12 = "Answer12";
    $Q12 = $_GET['Q12'];
	setcookie($question12,$Q12,time()+60*60*24,"/");
    $progress = "progress";
    $progressValue = "Question 13";
    setcookie($progress,$progressValue,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | Question 13
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
              <strong><p>Question 13</p></strong>
              <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
              <p>Why does this organ have cartilage?</p>
              <input type='radio' value='A' name='Q13' >A. To hold the trachea open while you breathe<br/>
              <input type='radio' value='B' name='Q13' >B. To protect the lungs from food you eat<br/>
              <input type='radio' value='C' name='Q13' >C. To aid in digestion<br/>
              <input type='radio' value='D' name='Q13' >D. To make mucous for the mucociliary escalator<br/>
              <input type='submit' value='Submit Answers' name='submit'>
            </form>
            <?php
                echo "<hr/>";
                if(isset($_POST['submit']) && $_POST['submit']!=NULL)
                {	
                   echo "Submit clicked!<br/>";
                   if($_POST['Q13']=="A")
                    {
                        header("Location:DemoQuiz01-Done.php?Q13=A");
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