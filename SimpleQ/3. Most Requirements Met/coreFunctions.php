<?php
    function makeHeader($title)
    {
      ?>
          <html> <!--lang="en" xmlns="http://www.w3.org/1999/xhtml"-->
          <head>
              <meta charset="utf-8" />
              <title>
                  <?php echo $title;?> 
              </title>
              <!--The following lines introduce the bootstrap-->
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          </head>
          <body>               
      <?php      		
    }
    }
    
    function makeJumbotron($jumbo)
    {
    	?>
        	<div class="jumbotron">
                  <center><h1><?php echo $jumbo;?></h1></center>
             </div>
        <?php
    }
    
    function makeNavBar() //Navigation Bar for each page
    {
      ?>
          <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                <a class="navbar-brand" href="Home.php">Simple Q</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="SimpleQList.php">Quiz List</a></li>
                <li><a href="SimpleQAbout.php">About</a></li>
              </ul>
              <?php
                  if($_SESSION['user'])
                  {
                   echo "<ul class=\"nav navbar-nav navbar-right\">
                          <li><a href=\"SimpleQMakeQuiz.php\"><span class=\"glyphicon glyphicon-user\"></span> Make Quiz</a></li>
                          <li><a href=\"Logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout&nbsp</a></li>
                        </ul>";
                  }
                  else
                  {
                  	echo "<ul class=\"nav navbar-nav navbar-right\">
                          <li><a href=\"SimpleQLogin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login&nbsp</a></li>
                          </ul>";
                  }
              ?>
          </nav>
      <?php
    }
    
    function makeSearchBar()
    {
    	?>
            <div  style="text-align:right" class ="well">
                    <form method="post" action="SimpleQList.php"><!--Goes to the list of most recent quizzes-->
                        <input type="text" name="search" placeholder="Search by Faculty">
                        <input type=submit name="submit "value="Find Quiz"><!--Searches for quizzes by Author-->   
                    </form>
            </div>
        <?php
    }
    
    function makeFooter()
    {		
        echo "	</div>
            </body>
        </html> ";
    }
    
    function makeLink($url, $title)
    {
    	echo "<a href=".$url.">".$title."</a><br/>";
    }
    
    function inputQuestions($template,$qAmount)
    {
    	echo "Name your quiz: <input type='text' name='quizName'><hr/>";
        if($template == "A")
        {
        	echo "Enter the amount of attempts: <input type='text'name='attempts'><hr/>";
            for($i=0;$i<$qAmount;$i++)
            {
                $j= $i+1;
                echo "Upload Image for Question ".$j.": <input type='file' name='myfile".$j."'>";
                echo "Enter Question ".$j.": <input type='text'name='Q".$j."'><br/>";
                echo "Enter Answer A: <input type='text'name='Q".$j."A'><br/>";
                echo "Enter Answer B: <input type='text'name='Q".$j."B'><br/>";
                echo "Enter Answer C: <input type='text'name='Q".$j."C'><br/>";
                echo "Enter Answer D: <input type='text'name='Q".$j."D'><hr/>";
                echo "Correct Answer : 
                <select id='correct' name='correct".$j."'>                      
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                    <option value='D'>D</option>
				</select><hr/>";
            }
        }
        if($template == "B")
        {
        	for($i=0;$i<$qAmount;$i++)
            {
                $j= $i+1;
                echo "Upload Image for Question ".$j.": <input type='file' name='myfile".$j."'>";
                echo "Enter Question ".$j.": <input type='text'name='Q".$j."'><br/>";
                echo "Enter Answer A: <input type='text'name='Q".$j."A'><br/>";
                echo "Enter Answer B: <input type='text'name='Q".$j."B'><br/>";
                echo "Enter Answer C: <input type='text'name='Q".$j."C'><br/>";
                echo "Enter Answer D: <input type='text'name='Q".$j."D'><hr/>";
                echo "Correct Answer : 
                <select id='correct' name='correct".$j."'>                      
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                    <option value='D'>D</option>
				</select><hr/>";
            }
        }
        else if($template == "C")
        {
        	echo "Upload image for the quiz: <input type='file' name='myfile'><hr/>";
            for($i=0;$i<$qAmount;$i++)
            {
                $j= $i+1;
                echo "Enter Question ".$j.": <input type='text'name='Q".$j."'><br/>";
                echo "Enter Answer A: <input type='text'name='Q".$j."A'><br/>";
                echo "Enter Answer B: <input type='text'name='Q".$j."B'><br/>";
                echo "Enter Answer C: <input type='text'name='Q".$j."C'><br/>";
                echo "Enter Answer D: <input type='text'name='Q".$j."D'><hr/>";
                echo "Correct Answer : 
                <select id='correct' name='correct".$j."'>                      
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                    <option value='D'>D</option>
				</select><hr/>";
            }
        }
        echo "<input type='submit' name='submit' value='Create Quiz!'>";
    }
    
    function spitQuestions($template,$qAmount)
    {
    	$vomit = "";

        if($template == "A" || $template == "B")
        {
            for($i=0;$i<$qAmount;$i++)
            {
                $j=$i+1;
                $pic = uploadfile('myfile'.$j);
                $vomit = $vomit."<strong><p>Question ".$j."</p></strong>
                           <img src='".$pic."' style='width:500px;height:400px'><br/>
                           <p>".$_POST['Q'.$j]."</p>
                           <input type='radio' value='A' name='Q".$j."' >A. ".$_POST['Q'.$j.'A']."<br/>
                           <input type='radio' value='B' name='Q".$j."' >B. ".$_POST['Q'.$j.'B']."<br/>
                           <input type='radio' value='C' name='Q".$j."' >C. ".$_POST['Q'.$j.'C']."<br/>
                           <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/>
                           <hr/>";
            }  
		}
        if($template == "C")
        {
        	$pic = uploadfile('myfile');
            $vomit = $vomit."<img src='".$pic."' style='width:500px;height:400px'><hr/>";
            for($i=0;$i<$qAmount;$i++)
            {
                $j=$i+1; 
                $vomit = $vomit."<strong><p>Question ".$j."</p></strong>
                           <p>".$_POST['Q'.$j]."</p>
                           <input type='radio' value='A' name='Q".$j."' >A. ".$_POST['Q'.$j.'A']."<br/>
                           <input type='radio' value='B' name='Q".$j."' >B. ".$_POST['Q'.$j.'B']."<br/>
                           <input type='radio' value='C' name='Q".$j."' >C. ".$_POST['Q'.$j.'C']."<br/>
                           <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/>
                           <hr/>";
            }
        }
        return $vomit;
    }
    
    function makeQuiz($quizName)
    {
    	//Quiz Begin Page
        $file = fopen($quizName."-Begin.php","w+") or die("Unable to open ".$quizName.".php");
        $content = "
        		   <?php
                   		require_once('coreFunctions.php');
                   		makeHeader('".$quizName." | Getting Started');
                        makeNavBar();
                        	?>
                            	<div class='container' style = 'text-align:left'>  
                                    <h3>Welcome to ".$quizName."!</h3>
                                    <h5/>Answer all questions to the best of your ability!<h5/>
                                    <hr/>
                                    <form method='post' enctype='multipart/form-data' action='".$quizName.".php'>
                                        Please enter your name<br/> <input type='text' name='name'><br/>
                                        Please enter your student email address<br/> <input type='text' name='email'><hr/>
                                        <input type='submit' name='submit' value='Take Quiz'>
                                    </form>
                                </div>   
                            <?php
                        makeFooter();
                   ?>
        		   ";
        fwrite($file,$content);
        fclose($file);
        
        //Main quiz page
        $file = fopen($quizName.".php","w") or die("Unable to open ".$quizName.".php");
        $content = "<?php
                        	require_once('coreFunctions.php');
                            session_start();
                            \$cookieName = 'name';
                            \$cookieEmail = 'email';
                            \$nameValue = \$_POST['name'];
                            \$emailValue = \$_POST['email'];
                            setcookie(\$cookieName,\$nameValue,time()+60*60*24,'/');
                            setcookie(\$cookieEmail,\$emailValue,time()+60*60*24,'/');
                            \$cookieQuiz = 'quiz';
                            \$quizValue = '".$quizName."';
                            setcookie(\$cookieQuiz,\$quizValue,time()+60*60*24,'/');
                            makeHeader('".$quizName."');
                            makeNavBar();
                            ?>
                              <div class='container' style = 'text-align:left'>
                                <form method='post' enctype='multipart/form-data' action='".$quizName."-Done.php'>";
                                	
        fwrite($file,$content);
        fclose($file);
        
        $spit = spitQuestions($_COOKIE['template'],$_COOKIE['qAmount']);
        $newContent = $spit."			<input type='submit' value='Submit Answers' name='submit'>
                                </form>
                              </div>
                            <?php
                            makeFooter();
                            ?>";
        $file = $quizName.".php";             
        file_put_contents($file, $newContent, FILE_APPEND);
        fclose($file);
        
        //Quiz Done Page
        $file = fopen($quizName."-Done.php","w") or die("Unable to open ".$quizName."-Done.php");
        $content = "<?php
        				require_once('coreFunctions.php');
                        date_default_timezone_set('America/New_York');
                        \$date = date('m/d/Y');
                        \$time = date('h:i:sa');
                        \$ip = \$_SERVER['REMOTE_ADDR'];
                        \$cookieDate = 'date';
                        \$cookieTime = 'time';
                        setcookie(\$cookieDate,\$date,time()+60*60*24,'/');
                        setcookie(\$cookieTime,\$time,time()+60*60*24,'/');
                        makeHeader('".$quizName." | Results');
                        makeNavBar();
                        ?>
                        <div class= container style = text-align:left>
                        <h4>Congratulations <?php echo \$_COOKIE[\"name\"];?>, you made it!</h4><hr/>
                        
        			";
        fwrite($file,$content);
        fclose($file);
        
        $check = checkAnswers($_COOKIE['template'],$_COOKIE['qAmount']);
        $newContent = $check."
        					<hr/><p>To return to the quiz list, click <?php makeLink('".$quizName."-Kill.php','here'); echo '</p><br/>';?> 
                        	</div>	
                            <?php
                            makeFooter();
                            ?>";
        $file = $quizName."-Done.php";             
        file_put_contents($file, $newContent, FILE_APPEND);
        fclose($file);
        
        //Kill Quiz Page
        $file = fopen($quizName."-Kill.php","w") or die("Unable to open ".$quizName."-Kill.php");
        $content = "<?php
        			require_once('coreFunctions.php');
        			\$conn = db_connect(); 
                    \$sql = \"INSERT INTO Results VALUES('\".\$_COOKIE['name'].\"','\".\$_COOKIE['email'].\"','\".\$_COOKIE['quiz'].\"',
    				'\".\$_COOKIE['date'].\"','\".\$_COOKIE['time'].\"','\".\$_COOKIE['progress'].\"')\";                  
    				my_sql_exec(\$conn, \$sql);
                    \$file1 = fopen(\$_COOKIE['quiz'].\"-Results.php\",\"w\") or die(\"Unable to open \".\$_COOKIE['quiz'].\"-Results.php\");
                    \$content = \"
                    <?php
                    require_once('coreFunctions.php');
                    makeHeader('Results for \".\$_COOKIE['quiz'].\"');
                    makeNavBar();
                    ?>
                    <div class='container'>
                    <table border=1>
                    <caption style='text-align:center;'><b>Results for \".\$_COOKIE['quiz'].\"</b></caption>
                    <tr><td>Name </td><td>Email </td><td>Quiz </td><td>Date </td><td>Time </td><td>Progress </td></tr>
                    <?php
                    displayQuizResults('\".\$_COOKIE['quiz'].\"');
                    ?>
                    </table>
                    </div>
                    <?php
                    makeFooter();
                    ?>
                    \";
                    fwrite(\$file1,\$content);  
                    fclose(\$file1);
                    session_unset();
                    session_destroy();
                    header('Location:SimpleQList.php');
                    exit();
        			?>";
       fwrite($file,$content);  
       fclose($file);
       
       //Results Page
       /*$file = $quizName."-Results.php";  
       $newContent="";
       file_put_contents($file, $newContent, FILE_APPEND);
       fclose($file);*/
    }
   
   	function makeQuestionsA($quizName,$qAmount,$attempts)
    {
    	for($i=0;$i<$qAmount;$i++)
        {
        	$j=$i+1;
            $k = $j+1;
            $l = "Q".$k;
            if($j == $qAmount)
            {
            	$l = "Done";
            }
            $pic = uploadfile('myfile'.$j);
            $file = fopen($quizName."-Q".$j.".php","w") or die("Unable to open ".$quizName."-Q".$j.".php");
            $content = "<?php
                                require_once('coreFunctions.php');
                                session_start();
                                \$progress = \"progress\";
                                \$progressValue = \"Question ".$j."\";
                                setcookie(\$progress,\$progressValue,time()+60*60*24,\"/\");
                                makeHeader('".$quizName." | Question ".$j."');
                                makeNavBar();
                                ?>
                                  <div class='container' style = 'text-align:left'>
                                    <form method='post' enctype='multipart/form-data' action=\"<?php echo \$_SERVER['SELF']?>\">                     
                					<strong><p>Question ".$j."</p></strong>
                                    <img src='".$pic."' style='width:500px;height:400px'><br/>
                                      <p>".$_POST['Q'.$j]."</p>
                                      <input type='radio' value='A' name='Q".$j."' >A. ".$_POST['Q'.$j.'A']."<br/>
                                      <input type='radio' value='B' name='Q".$j."' >B. ".$_POST['Q'.$j.'B']."<br/>
                                      <input type='radio' value='C' name='Q".$j."' >C. ".$_POST['Q'.$j.'C']."<br/>
                                      <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/>
                                      <input type='submit' value='Next Question' name='submit'>
                                    </form>
                                  </div>  
                                <?php
                                echo \"<hr/>\";
                                if(isset(\$_POST['submit']) && \$_POST['submit']!=NULL)
                                {	
                                   echo \"Submit clicked!<br/>\";
                                   if(\$_POST['Q".$j."']==".$_POST['correct'.$j].")
                                    {
                                        header(\"Location:".$quizName."-".$l.".php?Q".$j."=".$_POST['correct'.$j]."\");
                                    }
                                    else
                                    {
                                        echo \"<hr/>Wrong answer, try again<br/>\";
                                        \$_COOKIE['Lives']--;
                                        \$cookieLives = \"Lives\";
                                        setcookie(\$cookieLives,\$_COOKIE['Lives'],time()+60*60*24,\"/\");

                                        echo \"Chances left: \".\$_COOKIE['Lives'];
                                        if(\$_COOKIE['Lives']==0)
                                        {
                                          header(\"Location:".$quizName."-Fail.php\");
                                        }
                                    }
                                }
                            	?>
                                ";

            fwrite($file,$content);
            fclose($file);
        }
    }
   	
    function makeQuizA($quizName,$qAmount,$attempts)
    {
    	//Quiz Begin Page
        $file = fopen($quizName."-Begin.php","w+") or die("Unable to open ".$quizName.".php");
        $content = "
        		   <?php
                   		require_once('coreFunctions.php');
                   		makeHeader('".$quizName." | Getting Started');
                        makeNavBar();
                        	?>
                            	<div class='container' style = 'text-align:left'>  
                                    <h3>Welcome to ".$quizName."!</h3>
                                    <h5/>You have ".$attempts." attempts to get through all ".$qAmount." questions before having to start over.<h5/>
                                    <hr/>
                                    <form method='post' enctype='multipart/form-data' action='".$quizName.".php'>
                                        Please enter your name<br/> <input type='text' name='name'><br/>
                                        Please enter your student email address<br/> <input type='text' name='email'><hr/>
                                        <input type='submit' name='submit' value='Take Quiz'>
                                    </form>
                                </div>   
                            <?php
                        makeFooter();
                   ?>
        		   ";
        fwrite($file,$content);
        fclose($file);
        
        //Setup quiz page
        $file = fopen($quizName.".php","w") or die("Unable to open ".$quizName.".php");
        $content = "<?php
                    require_once('coreFunctions.php');
                    session_start();
                    \$cookieLives = \"Lives\";
                    \$Lives = ".$attempts.";
                    setcookie(\$cookieLives,\$Lives,time()+60*60*24,\"/\");
                    \$cookieName = \"name\";
                    \$cookieEmail = \"email\";
                    \$nameValue = \$_POST['name'];
                    \$emailValue = \$_POST['email'];
                    setcookie(\$cookieName,\$nameValue,time()+60*60*24,\"/\");
                    setcookie(\$cookieEmail,\$emailValue,time()+60*60*24,\"/\");
                    \$cookieQuiz = \"quiz\";
                    \$quizValue = '".$quizName."';
                    setcookie(\$cookieQuiz,\$quizValue,time()+60*60*24,\"/\");
                    header(\"Location:".$quizName."-Q1.php\");
                	?>";
        
        fwrite($file,$content);
        fclose($file);
        
        //Main quiz page
        makeQuestionsA($quizName,$qAmount,$attempts);   
        
        //Quiz Fail Page
        $file = fopen($quizName."-Fail.php","w") or die("Unable to open ".$quizName."-Done.php");
        $content = "<?php
        				require_once('coreFunctions.php');
                        date_default_timezone_set('America/New_York');
                        \$date = date('m/d/Y');
                        \$time = date('h:i:sa');
                        \$ip = \$_SERVER['REMOTE_ADDR'];
                        \$cookieDate = 'date';
                        \$cookieTime = 'time';
                        setcookie(\$cookieDate,\$date,time()+60*60*24,'/');
                        setcookie(\$cookieTime,\$time,time()+60*60*24,'/');
                        makeHeader('".$quizName." | Sorry!');
                        makeNavBar();
                        ?>
                        <div class= container style = text-align:left>
                        <h3>Awww!</h3><br/>
                        <hr/>
                        <p>Too many missed questions. You are out of attempts, but don't quit <?php echo \$_COOKIE['name'];?>! Try again.<p><br/>
                        <hr/><p>To return to the quiz list, click <?php makeLink('".$quizName."-Kill.php','here'); echo '</p><br/>';?>
                        </div>	
                        <?php
                        makeFooter();
                        ?>";
        fwrite($file,$content);
        fclose($file);
        
        //Quiz Done Page
        $file = fopen($quizName."-Done.php","w") or die("Unable to open ".$quizName."-Done.php");
        $content = "<?php
        				require_once('coreFunctions.php');
                        \$question".$qAmount." = \"Answer".$qAmount."\";
                        \$Q".$qAmount." = \$_GET['".$qAmount."'];
                        setcookie(\$question".$qAmount.",\$Q".$qAmount.",time()+60*60*24,\"/\");
                        \$progress = \"progress\";
                        \$progressValue = \"Quiz Completed\";
                        setcookie(\$progress,\$progressValue,time()+60*60*24,\"/\");
                        date_default_timezone_set('America/New_York');
                        \$date = date('m/d/Y');
                        \$time = date('h:i:sa');
                        \$ip = \$_SERVER['REMOTE_ADDR'];
                        \$cookieDate = 'date';
                        \$cookieTime = 'time';
                        setcookie(\$cookieDate,\$date,time()+60*60*24,'/');
                        setcookie(\$cookieTime,\$time,time()+60*60*24,'/');
                        makeHeader('".$quizName." | Results');
                        makeNavBar();
                        ?>
                        <div class= container style = text-align:left>
                        <h4>Congratulations <?php echo \$_COOKIE[\"name\"];?>, you made it!</h4><hr/>
                   		<p>To return to the quiz list, click <?php makeLink('".$quizName."-Kill.php','here'); echo '</p><br/>';?> 
                        </div>	
                        <?php
                        makeFooter();
                        ?>";
        fwrite($file,$content);
        fclose($file);
        
        //Kill Quiz Page
        $file = fopen($quizName."-Kill.php","w") or die("Unable to open ".$quizName."-Kill.php");
        $content = "<?php
        			require_once('coreFunctions.php');
        			\$conn = db_connect(); 
                    \$sql = \"INSERT INTO Results VALUES('\".\$_COOKIE['name'].\"','\".\$_COOKIE['email'].\"','\".\$_COOKIE['quiz'].\"',
    				'\".\$_COOKIE['date'].\"','\".\$_COOKIE['time'].\"','\".\$_COOKIE['progress'].\"')\";                  
    				my_sql_exec(\$conn, \$sql);
                    \$file1 = fopen(\$_COOKIE['quiz'].\"-Results.php\",\"w\") or die(\"Unable to open \".\$_COOKIE['quiz'].\"-Results.php\");
                    \$content = \"
                    <?php
                    require_once('coreFunctions.php');
                    makeHeader('Results for \".\$_COOKIE['quiz'].\"');
                    makeNavBar();
                    ?>
                    <div class='container'>
                    <table border=1>
                    <caption style='text-align:center;'><b>Results for \".\$_COOKIE['quiz'].\"</b></caption>
                    <tr><td>Name </td><td>Email </td><td>Quiz </td><td>Date </td><td>Time </td><td>Progress </td></tr>
                    <?php
                    displayQuizResults('\".\$_COOKIE['quiz'].\"');
                    ?>
                    </table>
                    </div>
                    <?php
                    makeFooter();
                    ?>
                    \";
                    fwrite(\$file1,\$content);  
                    fclose(\$file1);
                    session_unset();
                    session_destroy();
                    header('Location:SimpleQList.php');
                    exit();
        			?>";
       fwrite($file,$content);  
       fclose($file);
    }
    
    function checkAnswers($template, $qAmount)
    {
    	$puke = "<?php \$grade=0;";
        if($template == 'B' || $template == 'C')
        {
        	for($i=0;$i<$qAmount;$i++)
            {
                $j=$i+1;
                $puke = $puke."
                \$miss".$j." = ''; 
                if(\$_POST['Q".$j."'] == ".$_POST['correct'.$j].") 
                \$grade += 1;
                else \$miss".$j." = '*Question ".$j."';";
                              
            }  
             $answers = showAnswers($qAmount);
             $puke = $puke.$answers."
             \$progress = 'progress';
             \$progressValue = \$grade.'/".$qAmount." Correct';
             setcookie(\$progress,\$progressValue,time()+60*60*24,'/');
             ?>";
        }
        
        if($template == 'A')
        {
        	echo "To be created<br/>";
        }
        
        return $puke;
    }
    
    function showAnswers($qAmount)
    {
    	$wrong = "";
        for($i=0;$i<$qAmount;$i++)
        {
          $j=$i+1;
          $wrong = $wrong."'.\$miss".$j.".'<br/>";

        } 
        $content = "echo 'Quiz Complete!<hr/>Correct Answers: '.\$grade.'/".$qAmount."<hr/> Questions Missed:<br/>
        			".$wrong."';";
       return $content;             
    }
    
    function uploadfile($myfile)
    {
        $dir = "Images/";
        $file = $dir . basename($_FILES[$myfile]['name']);
        if($_FILES[$myfile]['size']<50000000) //In Bytes, ie 50MB
        {
          $size = getimagesize($_FILES[$myfile]["tmp_name"]);
          if($size != 0)
          {
            $filetype = pathinfo($file,PATHINFO_EXTENSION);
            if(strcasecmp($filetype,"jpg")==0 || strcasecmp($filetype,"png")==0 || strcasecmp($filetype,"gif")==0)
            {
              if(!file_exists($file))
              {
                if(move_uploaded_file($_FILES[$myfile]["tmp_name"],$file))
                {                
                    return $file;
                }
                  else echo "Uploading failed";
              }
              else 
              {
              	//echo "File already exists<br/>"; 
                return $file;
              }
            }
            else echo "Wrong file types<br/>";
          }
          else echo "Not an image file<br/>";
        }
        else echo "file is too big<br/>";

        return NULL;
    }
      
    function db_connect()
    {
    	$serverName = "localhost";
        $userName = "alvinuity";
        $password = "";
        $dbname = "my_alvinuity";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        
        if(!$conn)
          die("connection failed: ".mysqli_connect_error());
          
        return $conn;                  
    }
    
    function my_sql_exec($conn, $sql)
    {
      $result = mysqli_query($conn, $sql);
      if($result)
        echo "";
      else
        echo "Error: ".$sql."<br/>".mysqli_error($conn)."<br/>";
      return $result;
    }
    
    function displayAllQuizzes()
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Quiz;";
        $result = my_sql_exec($conn,$sql);
        $numQuizzes = mysqli_num_rows($result);
        if($numQuizzes == "0") echo "<p>There are no quizzes available.</p><br/>";
        while($row = mysqli_fetch_row($result))
        {
        	makeLink($row[0]."-Begin.php",$row[0]); echo "<br/>";
        }
    }
    
    function displayLogin()
    {
    ?>
    	<div class="container">
                <form action="<?php echo $_SERVER['SELF']?>" method="post">
                  <table border=0>
                      <tr>
                          <td>Please type your username:</td>
                          <td><input type="text" name="user"></td>
                      </tr>
                      <tr>
                          <td>Please type your password:</td>
                          <td><input type="password" name="password"></td>   
                      </tr>
                      <tr><td><input type="submit" value="Log in" name="submit"></td></tr>
                  </table>
                </form>
                <hr/>
                <p>Forgot your password? Click <a href="ForgotPassword.php">here</a> to reset.</p>
                <p>Click <a href="CreateAccount.php">here</a> to create an account.</p><br/>
            </div>
           <?php 
            if(isset($_POST['submit']) && $_POST['submit']!=NULL)
            {
                session_start();
                $username = $_POST['user'];
                $password = $_POST['password'];
                
                if(validateUser($username,$password))
                {
                  $_SESSION['user'] = $username;
                  $facID = getFacID($username);
                  $_SESSION['facID'] = $facID;
                  //echo "The username is ".$_SESSION['user']."<br/>";
                  //echo "The facID is ".$_SESSION['facID']."<br/>";
                  header("Location:SimpleQMakeQuiz.php");
                }
                else
                {
                	echo "<div class=\"container\"><hr/><p>Invalid username or password.</p><br/></div>";
                }
              
            }
    }
    
    function displayProfile($username)
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Faculty WHERE facID=".$_SESSION['facID'].";";
        $result = my_sql_exec($conn,$sql);
 
        echo "<div style='text-align:center'>";      
        while($row = mysqli_fetch_row($result))
        {
            	echo "<h1>Welcome ".$row[4]."!</h1>";
        }
        echo "<h6>Here, the user can elect to either edit an existing quiz or create a new one.</h6>";
        //echo "<p>The user only has access to the quizzes they have created</p>";
        while($row = mysqli_fetch_row($result))
        {
            if($row[6])
            	echo "<img src='".$row[6]."' style='width:500px;height:400px'><br/><br/>";
        }
        echo "<a href='SimpleQuizEdit.php' class='btn btn-info' role='button'>Edit Quiz</a>&nbsp&nbsp
              <a href='Step1.php' class='btn btn-info' role='button'>New Quiz</a><br/>
              <hr/>
              <p>Your Quiz Results</p>
              <hr>";
      	
        $sql = "SELECT * FROM Quiz WHERE facID=".$_SESSION['facID'].";";
        $result = my_sql_exec($conn,$sql);
        $numQuizzes = mysqli_num_rows($result);
        if($numQuizzes == "0") echo "<p>There are no quizzes available.</p><br/>";
        while($row = mysqli_fetch_row($result))
        {
            echo "<a href='".$row[0]."-Results.php' class='btn btn-info' role='button'>View ".$row[0]." Results</a><br/><br/>";
        }
      echo "</div>";
    }
    
    function displayRegistration()
    {
    	?>
        <div class = "container" style="left-margin:50%">
        	<form method=post enctype="multipart/form-data" action="<?php echo $_SERVER['SELF'];?>">
            	<table border = 0>
                	<tr><td>Username:</td><td><input type=text name=username></td></tr>
                    <tr><td>Password:</td><td><input type=password name=passwd></td></tr>
                    <tr><td>Confirm Password:</td><td><input type=password name=passwd2></td></tr>
                    <tr><td>First Name</td><td><input type=text name=fname></td></tr>
                    <tr><td>Last Name</td><td><input type=text name=lname></td></tr>
                    <tr><td>Email</td><td><input type=text name=email></td></tr>
                    <tr><td>Profile Picture</td><td><input type="file" name="myfile"></td></tr>
                    <tr><td><input type="submit" value="Create Account" name="submit"></td></tr>
                </table>
            </form>
        </div>
        <?php
        if($_POST['passwd'] != $_POST['passwd2'])
    	{
            echo "Password does not match<br/>";
            exit();
    	}
        if(isset($_POST['username']) && $_POST['username']!=NULL)
        {
            $conn = db_connect();

            //verify is the table already created
            $sql = "SHOW TABLES LIKE 'Faculty';";
            $result = my_sql_exec($conn, $sql);
            if(mysqli_num_rows($result) <= 0) //table does not exist!!!
            {
                $sql = "CREATE TABLE Faculty(
                        facID INT NULL AUTO_INCREMENT,
                        userName VARCHAR(255) NOT NULL,
                        passWord VARCHAR(255) NOT NULL,
                        email VARCHAR(320) NOT NULL,
                        firstName VARCHAR(255) NOT NULL,
                        lastName VARCHAR(255) NOT NULL,
                        picture VARCHAR(255),
                        PRIMARY KEY(facID)
                        )";

                my_sql_exec($conn, $sql);
            }

            //verify if the id aready registered
            $sql = "SELECT * from Faculty WHERE userName = '" .trim($_POST['username'])."';";
            $result = my_sql_exec($conn, $sql);
            if(mysqli_num_rows($result) <= 0) //username does not exist
            {
                $file = uploadfile("myfile");
                $sql = "INSERT INTO Faculty 
                        VALUES('','".$_POST['username']."','".sha1($_POST['passwd'])."',
                        '".$_POST['email']."','".$_POST['fname']."', 
                        '".$_POST['lname']."', '".$file."');";
                my_sql_exec($conn, $sql);

                echo "Registration done successfully<br/>";
                echo "Click <a href='SimpleQLogin.php'>here</a> to log in<br/>";
            }
            else
            {
                echo "Username already in use, try another.<br/>";
            }
        }
    }
    
    function displayPassReset()
    {
    	?>
        <div class="container">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                Reset your password by:<br/>
                <input type="radio" name="resetby" value="username" checked>Username<br/>
                <input type="radio" name="resetby" value="email">Email<br/>
                Type your Username or Email here: <input type="text" name="idORemail"><br/>
                <input type="submit" name="submit">
            </form>
        </div>
        <?php
        if(isset($_POST['submit']))//if submit is clicked
        {
          $conn = db_connect();
	
          if($_POST['resetby']=="username")
          {
            $sql="SELECT * FROM Faculty WHERE userName='".$_POST['idORemail']."'";
          }
          else if($_POST['resetby']=="email")
          {
            $sql="SELECT * FROM Faculty WHERE email='".$_POST['idORemail']."'";
          }

          $result = my_sql_exec($conn, $sql);
          if($row = mysqli_fetch_row($result)) //Found id or email
          {
            $to = $row[3];//email address in database 
            $subject = "Reset password";
            $txt = "Your username is: ".$row[1].".\r\n\r\n".
              "Click the following link to reset your password".":\r\n\r\n".
              "http://alvinuity.altervista.org/SimpleQ/ResetPassword.php?id=".$row[0].
              "&sand=".sha1($row[2]);
            //&sand refers to an encrypted password shown in the url
            $headers = "From: SimpleQ.com";
            mail($to, $subject, $txt, $headers);

            echo "<hr/>Please check your email to reset your password";
          }
          else
            echo "Incorrect information provided, try again.<br/>";
        }
    }
    
    function displayResetForm()
    {
    	$id = $_GET['id'];
        $sand = $_GET['sand'];

        if($id!=NULL && $sand!=NULL)
        {
            $conn = db_connect();

            $sql = "SELECT * FROM Faculty WHERE facID ='".$id."';";  
            $result = my_sql_exec($conn, $sql);

            if($row = mysqli_fetch_row($result))
            {
                if(sha1($row[2])==$sand)
                {
    				?>
                    <div class="container">
                    <form method=post action="PasswordReset.php">
                        Your ID# is: <?php echo $row[0];?>
                        <input type=hidden name=id value="<?php echo $row[0];?>"><br/>
                        Enter new password: <input type=password name=newpassword><br/>
                        Confirm new password: <input type=password name=newpassword2><br/>
                        <input type=submit name=submit><br/>
                    </form>
                    <hr/>
      				<?php
                }
                else
                    echo "Wrong password.<br/></div>";
            }
            else
                echo "Wrong ID provided<br/></div>";
    	}
    }
    
    function newPassword()
    {
    	if($_POST['newpassword']!=$_POST['newpassword2'])
        {
            echo "Passwords do not match<br/>";
            exit();
        }

        $conn = db_connect();

        $sql = "SELECT * FROM Faculty WHERE facID ='".$_POST['id']."';";  
        $result = my_sql_exec($conn, $sql);

        if(mysqli_num_rows($result) > 0)//ID found
        {
            $sql = "UPDATE Faculty SET passWord='".sha1($_POST['newpassword'])."' WHERE facID='".$_POST['id']."';";
            if(my_sql_exec($conn, $sql))
            {
                echo "<h3>Password has been successfully reset.</h3><br/>";
            }
            else
                echo "<h3>Failed to reset password.</h3><br/>";
        }
        else
            "<h3>ID was not found, try again.</h3>";
    }
    
    function validateUser($username,$password)
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Faculty WHERE userName='".$username."' AND passWord='".sha1($password)."';";
        $result = my_sql_exec($conn, $sql);
        if(!$result)
        	return 0;
        if(mysqli_num_rows($result)==1) 
        	return 1; //true
        else
        	return 0; //false
    }
    
    function displayQuizResults($quizName)
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Results WHERE quizName='".$quizName."';";
        $result = my_sql_exec($conn,$sql);
        
        $numQuizzes = mysqli_num_rows($result);
        if($numQuizzes == "0") echo "<p>There are no results available.</p><br/>";
        while($row = mysqli_fetch_row($result))
        {
            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>"
    		.$row[2]."</td><td>".$row[3]."</td><td>".$row[4]
            ."</td><td>".$row[5]."</td></tr>";
        }
    }
    
    function db_result_to_array($result)
    {
        $res_array = array();
        for($count=0;$row=mysqli_fetch_assoc($result);$count++)
        {
        	$res_array[$count] = $row;
		}
        return $res_array;
    }
    
    function getFacID($username)
    {
    	$conn = db_connect();
        $sql = "SELECT facID FROM Faculty WHERE userName='".$username."';"; 
        $result = my_sql_exec($conn, $sql);
        
        if(!$result) return false;
        $num_facs = mysqli_num_rows($result);
        if($num_facs == 0) return false;
        $row = mysqli_fetch_object($result);

        return $row->facID;
    }
    
    
?>