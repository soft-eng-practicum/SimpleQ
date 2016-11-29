<?php
    /*
    	name: makeHeader
        parameters: String $title
        return void;
    */
    function makeHeader($title)
    {
      ?>
          <html> <!--lang="en" xmlns="http://www.w3.org/1999/xhtml"-->
          <head>
              <meta charset="utf-8" />
              <title>
                  <?php echo $title;?> 
              </title>
              <!--The following lines introduce the bootstrap>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
          	  <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          	  <style>
                  body, h1, h2, h3, h4, h5, h6 
                  {
                      font-family: "Lato", sans-serif;
                  }
                  .w3-navbar, h1, button 
                  {
                      font-family: "Montserrat", sans-serif;
                  }
                  .fa-anchor, .fa-coffee 
                  {
                      font-size: 200px;
                  }
            </style>
          </head>
          <body>               
      <?php      		
    }
    
    /*
    	name: makeJumbotron
        parameters: String $jumbo
        return void;
    */
    function makeJumbotron($jumbo)
    {
    	?>
        	<div class="jumbotron">
                  <center><h1><?php echo $jumbo;?></h1></center>
             </div>
        <?php
    }
    
    /*
    	name: makeNavBar
        parameters: null
        return void;
    */
    function makeNavBar() //Navigation Bar for each page
    {
      ?>
              <!-- Navbar -->
              <div>     <!--div class="w3-top"-->
                  <ul class="w3-navbar w3-black w3-card-2 w3-left-align w3-large">
                      <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                          <a class="w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                      </li>
                      <li><a href="Home.php" class="w3-padding-large w3-white">SQ</a></li>
                      <li class="w3-hide-small"><a href="SimpleQList.php" class="w3-padding-large w3-hover-white">Quiz List</a></li>
                      <li class="w3-hide-small"><a href="SimpleQAbout.php" class="w3-padding-large w3-hover-white">About</a></li>
                      <li class="w3-hide-small"><a href="Tutorial.php" class="w3-padding-large w3-hover-white">Help</a></li>

                  <?php
                  if(isset($_SESSION['user']))
                  {
                    echo "	<li class=\"w3-hide-small\"><a href=\"SimpleQMakeQuiz.php\" class=\"w3-padding-large w3-hover-white\"> Make a Quiz</a></li>
                              <li class=\"w3-hide-small\"><a href=\"AccountSettings.php\" class=\"w3-padding-large w3-hover-white\"> Account Settings</a></li>
                              <li class=\"w3-hide-small\"><a href=\"Logout.php\" class=\"w3-padding-large w3-hover-white\">Logout&nbsp</a></li>    
                          </ul>";
                  }
                  else
                  {
                    echo "<li class=\"w3-hide-small\"><a href=\"SimpleQLogin.php\" class=\"w3-padding-large w3-hover-white\">Login</a></li>
                          </ul>";
                  }
                  ?>
                  <!-- Navbar on small screens -->
                  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
                      <ul class="w3-navbar w3-right-align w3-large w3-black">
                          <li><a class="w3-padding-large" href="SimpleQList.php">Quiz List</a></li>
                          <li><a class="w3-padding-large" href="SimpleQAbout.php">About</a></li>
                      </ul>
                  </div>
              </div>
      <?php
      //echo  "The user is ".$_SESSION['user'];    
    }
    
    /*
    	name: makeSearchBar
        parameters: null
        return void;
    */
    function makeSearchBar()
    {
    	?>
            <div style="text-align:center" class ="well">
                <form method="post" action="SimpleQList.php"><!--Goes to the list of most recent quizzes-->
                  <input type="text" name="search" placeholder="Search by Faculty">
                  <input type=submit name="submit "value="Find Quiz"><!--Searches for quizzes by Author-->   
                </form>
            </div>
        <?php
    }
    
    /*
    	name: makeFooter
        parameters: null
        return void;
    */
    function makeFooter()
    {		
        ?>
        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-opacity">
            <div class="w3-xlarge w3-padding-32">
                <a href="https://github.com/soft-eng-practicum/myXLab" class="w3-hover-text-indigo"><i class="fa fa-github"></i></a>
                <p>Our Github</p>
                <hr>              
            </div>
            	Except where otherwise noted, this website is licensed under a <br/>
                <a rel="license" href="https://creativecommons.org/licenses/by-nc-nd/4.0/">
                Creative Commons Attribution 3.0 Unported License</a>.
        </footer>

        <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() 
        {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) 
            {
                x.className += " w3-show";
            } 
            else 
            {
                x.className = x.className.replace(" w3-show", "");
            }
        }
        </script> 
        <?php  
            echo "	</div>
                </body>
            </html> ";       
    }
    
    /*
    	name: makeLink
        parameters: String $url, String $title
        return void;
    */
    function makeLink($url, $title)
    {
    	echo "<a href=".$url.">".$title."</a><br/>";
    }
    
    /*
    	name: inputQuestions
        parameters: String $template, Int $qAmount
        return void;
    */
    function inputQuestions($template,$qAmount)
    {
    	echo "Name your quiz: <input type='text' name='quizName'><hr/>";
        if($template == "A")
        {
        	echo "Enter the amount of attempts: <input type='text'name='attempts'><hr/>";
            for($i=0;$i<$qAmount;$i++)
            {
                $j= $i+1;
                echo "Upload  a (.jpg, .gif or .png) Image for Question ".$j.": <input type='file' name='myfile".$j."'>";
                echo "Enter Question ".$j.": <input type='text'name='Q".$j."'><br/>";
                echo "Enter Answer A: <input type='text'name='Q".$j."A'>
                *Enter a Hint: <input type='text'name='HintQ".$j."A'><br/>";
                echo "Enter Answer B: <input type='text'name='Q".$j."B'>
                *Enter a Hint: <input type='text'name='HintQ".$j."B'><br/>";
                echo "Enter Answer C: <input type='text'name='Q".$j."C'>
                *Enter a Hint: <input type='text'name='HintQ".$j."C'><br/>";
                echo "Enter Answer D: <input type='text'name='Q".$j."D'>
                *Enter a Hint: <input type='text'name='HintQ".$j."D'><hr/>";
                echo "Correct Answer : 
                <select id='correct' name='correct".$j."'>                      
                    <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                    <option value='D'>D</option>
				</select>
                <hr/>";
            }
        }
        if($template == "B")
        {
        	for($i=0;$i<$qAmount;$i++)
            {
                $j= $i+1;
                echo "Upload a (.jpg, .gif or .png) Image for Question ".$j.": <input type='file' name='myfile".$j."'>";
                echo "Enter Question ".$j.": <input type='text'name='Q".$j."'><br/>";
                echo "Enter Answer A: <input type='text'name='Q".$j."A'>
                *Enter a Hint: <input type='text'name='HintQ".$j."A'><br/>";
                echo "Enter Answer B: <input type='text'name='Q".$j."B'>
                *Enter a Hint: <input type='text'name='HintQ".$j."B'><br/>";
                echo "Enter Answer C: <input type='text'name='Q".$j."C'>
                *Enter a Hint: <input type='text'name='HintQ".$j."C'><br/>";
                echo "Enter Answer D: <input type='text'name='Q".$j."D'>
                *Enter a Hint: <input type='text'name='HintQ".$j."D'><hr/>";
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
        	echo "Upload a (.jpg, .gif or .png) image for the quiz: <input type='file' name='myfile'><hr/>";
            for($i=0;$i<$qAmount;$i++)
            {
                $j= $i+1;
                echo "Enter Question ".$j.": <input type='text'name='Q".$j."'><br/>";
                echo "Enter Answer A: <input type='text'name='Q".$j."A'>
                *Enter a Hint: <input type='text'name='HintQ".$j."A'><br/>";
                echo "Enter Answer B: <input type='text'name='Q".$j."B'>
                *Enter a Hint: <input type='text'name='HintQ".$j."B'><br/>";
                echo "Enter Answer C: <input type='text'name='Q".$j."C'>
                *Enter a Hint: <input type='text'name='HintQ".$j."C'><br/>";
                echo "Enter Answer D: <input type='text'name='Q".$j."D'>
                *Enter a Hint: <input type='text'name='HintQ".$j."D'><hr/>";;
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
    
     /*
    	name: spitQuestions
        parameters: String $template, Int $qAmount
        return void;
    */
    function spitQuestions($template,$qAmount)
    {
    	$vomit = "";

        if($template == "A" || $template == "B")
        {
            for($i=0;$i<$qAmount;$i++)
            {
                $j=$i+1;
                $pic = uploadfile('myfile'.$j);
                if($pic!=NULL)
                {
                	
                    echo $pic."<br/>";
                    $vomit = $vomit."<strong><p>Question ".$j."</p></strong>
                               <img src='".$pic."' style='width:500px;height:400px'><br/>
                               <p>".$_POST['Q'.$j]."</p>
                               <input type='radio' value='A' name='Q".$j."' >A. ".$_POST['Q'.$j.'A']."<br/>
                               <input type='radio' value='B' name='Q".$j."' >B. ".$_POST['Q'.$j.'B']."<br/>
                               <input type='radio' value='C' name='Q".$j."' >C. ".$_POST['Q'.$j.'C']."<br/>
                               <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/>
                               <hr/>";
                }
                else
                {
                	$vomit = $vomit."<strong><p>Question ".$j."</p></strong><br/>
                               <p>".$_POST['Q'.$j]."</p>
                               <input type='radio' value='A' name='Q".$j."' >A. ".$_POST['Q'.$j.'A']."<br/>
                               <input type='radio' value='B' name='Q".$j."' >B. ".$_POST['Q'.$j.'B']."<br/>
                               <input type='radio' value='C' name='Q".$j."' >C. ".$_POST['Q'.$j.'C']."<br/>
                               <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/>
                               <hr/>";
                }
            }  
		}
        if($template == "C")
        {
        	$pic = uploadfile('myfile');
            if($pic!=NULL)
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
    
     /*
    	name: checkAnswer
        parameters: String $template, Int $qAmount
        return void;
    */
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
                else 
                {
                	if(\$_POST['Q".$j."'] == \"A\") 
                    {
                    	\$miss".$j." = '*Question ".$j.": ".$_POST['HintQ'.$j.'A']."';
                    }
                    if(\$_POST['Q".$j."'] == \"B\") 
                    {
                    	\$miss".$j." = '*Question ".$j.": ".$_POST['HintQ'.$j.'B']."';
                    }
                    if(\$_POST['Q".$j."'] == \"C\") 
                    {
                    	\$miss".$j." = '*Question ".$j.": ".$_POST['HintQ'.$j.'C']."';
                    }
                    if(\$_POST['Q".$j."'] == \"D\") 
                    {
                    	\$miss".$j." = '*Question ".$j.": ".$_POST['HintQ'.$j.'D']."';
                    }
                }";
                              
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
    
     /*
    	name: showAnswers
        parameters: Int $qAmount
        return void;
    */
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
    
     /*
    	name: makeQuiz
        parameters: String $quizName
        return void;
    */
    function makeQuiz($quizName)
    {
    	//Quiz Begin Page
        $file = fopen($quizName."-Begin.php","w+") or die("Unable to open ".$quizName.".php");
        $content = "
        		   <?php
                   		require_once('coreFunctions.php');
                   		session_start();
                        makeHeader('".$quizName." | Getting Started');
                        makeNavBar();
                        	?>
                            	<div class='container' style = 'text-align:left'>  
                                    <h3>Welcome to ".$quizName."!</h3>
                                    <h4>Created by: ".$_SESSION['user']."</h4>
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
                        session_start();
                        date_default_timezone_set('America/New_York');
                        \$date = date('m/d/Y');
                        \$time = date('h:i:sa');
                        \$ip = \$_SERVER['REMOTE_ADDR'];
                        \$cookieDate = 'date';
                        \$cookieTime = 'time';
                        setcookie(\$cookieDate,\$date,time()+60*60*24,'/');
                        setcookie(\$cookieTime,\$time,time()+60*60*24,'/');
                        makeHeader('".$quizName." | Results');
                        ?>
                        <br/>
                        <br/>
                        <div class= container style = text-align:left>
                        <h4>Congratulations <?php echo \$_COOKIE[\"name\"];?>, you made it!</h4><hr/>
                        
        			";
        fwrite($file,$content);
        fclose($file);
        
        $check = checkAnswers($_COOKIE['template'],$_COOKIE['qAmount']);
        $newContent = $check."
        					<hr/><p>To return to SimpleQ, click <?php makeLink('".$quizName."-Kill.php','here'); echo '</p><br/>';?> 
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
                    session_start();
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
                    setcookie(\"name\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"email\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"quiz\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"date\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"time\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"progress\",\"dsdd\",time()-60*60*24,\"/\");
                    header('Location:SimpleQList.php');
        			?>";
       fwrite($file,$content);  
       fclose($file);
       
    }
   
   	 /*
    	name: makeQuestionsA
        parameters: String $quizName, Int $qAmount, Int $attempts
        return void;
    */
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
            if($pic!=NULL)
            {
            	$file = fopen($quizName."-Q".$j.".php","w") or die("Unable to open ".$quizName."-Q".$j.".php");
                $content = "<?php
                                    require_once('coreFunctions.php');
                                    session_start();
                                        \$progress = \"progress\";
                                        \$progressValue = \"Question ".$j."\";
                                        setcookie(\$progress,\$progressValue,time()+60*60*24,\"/\");
                                        if(\$_COOKIE['Lives'] < 1)
                                        {
                                            header(\"Location:".$quizName."-Fail.php\");
                                        }
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
                                              <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/><br/>
                                              <input type='submit' value='Next Question' name='submit'>
                                            </form>
                                          </div>  
                                        <?php
                                        if(isset(\$_POST['submit']) && \$_POST['submit']!=NULL)
                                        {	
                                           if(\$_POST['Q".$j."']==".$_POST['correct'.$j].")
                                            {
                                                header(\"Location:".$quizName."-".$l.".php?Q".$j."=".$_POST['correct'.$j]."\");
                                            }
                                            else
                                            {
                                                echo '<div class=container>';
                                                echo \"<hr/>Wrong answer, try again<br/>\";
                                                if(\$_POST['Q".$j."']==\"A\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'A']."</br>\";
                                                }
                                                if(\$_POST['Q".$j."']==\"B\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'B']."</br>\";
                                                }
                                                if(\$_POST['Q".$j."']==\"C\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'C']."</br>\";
                                                }
                                                if(\$_POST['Q".$j."']==\"D\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'D']."</br>\";
                                                }
                                                \$_COOKIE['Lives']--;
                                                \$cookieLives = \"Lives\";
                                                setcookie(\$cookieLives,\$_COOKIE['Lives'],time()+60*60*24,\"/\");

                                                echo \"Chances left: \".\$_COOKIE['Lives'];
                                                echo '</div>';
                                                if(\$_COOKIE['Lives'] < 1)
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
            else
            {
            	$file = fopen($quizName."-Q".$j.".php","w") or die("Unable to open ".$quizName."-Q".$j.".php");
                $content = "<?php
                                    require_once('coreFunctions.php');
                                    session_start();
                                        \$progress = \"progress\";
                                        \$progressValue = \"Question ".$j."\";
                                        setcookie(\$progress,\$progressValue,time()+60*60*24,\"/\");
                                        if(\$_COOKIE['Lives'] < 1)
                                        {
                                            header(\"Location:".$quizName."-Fail.php\");
                                        }
                                        makeHeader('".$quizName." | Question ".$j."');
                                        makeNavBar();
                                        ?>
                                          <div class='container' style = 'text-align:left'>
                                            <form method='post' enctype='multipart/form-data' action=\"<?php echo \$_SERVER['SELF']?>\">                     
                                            <strong><p>Question ".$j."</p></strong><br/>
                                              <p>".$_POST['Q'.$j]."</p>
                                              <input type='radio' value='A' name='Q".$j."' >A. ".$_POST['Q'.$j.'A']."<br/>
                                              <input type='radio' value='B' name='Q".$j."' >B. ".$_POST['Q'.$j.'B']."<br/>
                                              <input type='radio' value='C' name='Q".$j."' >C. ".$_POST['Q'.$j.'C']."<br/>
                                              <input type='radio' value='D' name='Q".$j."' >D. ".$_POST['Q'.$j.'D']."<br/><br/>
                                              <input type='submit' value='Next Question' name='submit'>
                                            </form>
                                          </div>  
                                        <?php
                                        if(isset(\$_POST['submit']) && \$_POST['submit']!=NULL)
                                        {	
                                           if(\$_POST['Q".$j."']==".$_POST['correct'.$j].")
                                            {
                                                header(\"Location:".$quizName."-".$l.".php?Q".$j."=".$_POST['correct'.$j]."\");
                                            }
                                            else
                                            {
                                                echo '<div class=container>';
                                                echo \"<hr/>Wrong answer, try again<br/>\";
                                                if(\$_POST['Q".$j."']==\"A\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'A']."</br>\";
                                                }
                                                if(\$_POST['Q".$j."']==\"B\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'B']."</br>\";
                                                }
                                                if(\$_POST['Q".$j."']==\"C\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'C']."</br>\";
                                                }
                                                if(\$_POST['Q".$j."']==\"D\")
                                                {
                                                    echo \"".$_POST['HintQ'.$j.'D']."</br>\";
                                                }
                                                \$_COOKIE['Lives']--;
                                                \$cookieLives = \"Lives\";
                                                setcookie(\$cookieLives,\$_COOKIE['Lives'],time()+60*60*24,\"/\");

                                                echo \"Chances left: \".\$_COOKIE['Lives'];
                                                echo '</div>';
                                                if(\$_COOKIE['Lives'] < 1)
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
    }
   	
     /*
    	name: makeQuizA
        parameters: String $quizName, Int $qAmount, Int $attempts
        return void;
    */
    function makeQuizA($quizName,$qAmount,$attempts)
    {
    	//Quiz Begin Page
        $file = fopen($quizName."-Begin.php","w+") or die("Unable to open ".$quizName.".php");
        $content = "
        		   <?php
                   		require_once('coreFunctions.php');
                   		session_start();
                        makeHeader('".$quizName." | Getting Started');
                        makeNavBar();
                        	?>
                            	<div class='container' style = 'text-align:left'>  
                                    <h3>Welcome to ".$quizName."!</h3>
                                    <h4>Created by: ".$_SESSION['user']."</h4>
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
                        	session_start();
                            date_default_timezone_set('America/New_York');
                            \$date = date('m/d/Y');
                            \$time = date('h:i:sa');
                            \$ip = \$_SERVER['REMOTE_ADDR'];
                            \$cookieDate = 'date';
                            \$cookieTime = 'time';
                            setcookie(\$cookieDate,\$date,time()+60*60*24,'/');
                            setcookie(\$cookieTime,\$time,time()+60*60*24,'/');
                            makeHeader('".$quizName." | Sorry!');
                            ?>
                            <br/>
                            <br/>
                            <div class= container style = text-align:left>
                            <h3>Awww!</h3><br/>
                            <hr/>
                            <p>Too many missed questions. You are out of attempts, but don't quit <?php echo \$_COOKIE['name'];?>! Try again.<p><br/>
                            <hr/><p>To return to SimpleQ, click <?php makeLink('".$quizName."-Kill.php','here'); echo '</p><br/>';?>
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
                        	session_start();
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
                            ?>
                            <br/>
                            <br/>
                            <div class= container style = text-align:left>
                            <h4>Congratulations <?php echo \$_COOKIE[\"name\"];?>, you made it!</h4><hr/>
                            <p>To return to SimpleQ, click <?php makeLink('".$quizName."-Kill.php','here'); echo '</p><br/>';?> 
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
        			session_start();
                    \$conn = db_connect(); 
                    \$sql = \"INSERT INTO Results VALUES('\".\$_COOKIE['name'].\"','\".\$_COOKIE['email'].\"','\".\$_COOKIE['quiz'].\"',
    				'\".\$_COOKIE['date'].\"','\".\$_COOKIE['time'].\"','\".\$_COOKIE['progress'].\"')\";                  
    				my_sql_exec(\$conn, \$sql);
                    \$file1 = fopen(\$_COOKIE['quiz'].\"-Results.php\",\"w\") or die(\"Unable to open \".\$_COOKIE['quiz'].\"-Results.php\");
                    \$content = \"
                    <?php
                    require_once('coreFunctions.php');
                    session_start();
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
                    
                    setcookie(\"name\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"email\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"quiz\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"date\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"time\",\"dsdd\",time()-60*60*24,\"/\");
                    setcookie(\"progress\",\"dsdd\",time()-60*60*24,\"/\");
					setcookie(\"Lives\",\"dsdd\",time()-60*60*24,\"/\");
                    header('Location:SimpleQList.php');
        			?>";
       fwrite($file,$content);  
       fclose($file);
    }
    
    /*
    	name: uploadfile
        parameters: String $myfile
        return String;
    */
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
          else 
          	return NULL;//echo "Not an image file<br/>";
        }
        else echo "file is too big<br/>";

        return NULL;
    }
      
    /*
    	name: db_connect
        parameters: null
        return database connection;
    */
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
    
    /*
    	name: my_sql_exec
        parameters: Database connection, String $sql
        return Array String;
    */
    function my_sql_exec($conn, $sql)
    {
      $result = mysqli_query($conn, $sql);
      if($result)
        echo "";
      else
        echo "Error: ".$sql."<br/>".mysqli_error($conn)."<br/>";
      return $result;
    }
    
    /*
    	name: displayAllQuizzes
        parameters: null
        return void;
    */
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
    
    /*
    	name: displayQuizSearch
        parameters: String $searchBy
        return void;
    */
    function displayQuizSearch($searchBy)
    {
        $conn = db_connect();
        $facID = getFacID($searchBy);
        $sql = "SELECT * FROM Quiz WHERE facID='".$facID."';";
        $result = my_sql_exec($conn,$sql);
        $numQuizzes = mysqli_num_rows($result);
        if($numQuizzes == "0") echo "<p>There are no quizzes available.</p><br/>";
        while($row = mysqli_fetch_row($result))
        {
          makeLink($row[0]."-Begin.php",$row[0]); echo "<br/>";
        }
        echo "</div>";
    }
    
    /*
    	name: displayQuizzes
        parameters: Integer $facID
        return void;
    */
    function displayQuizzes($facID)
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Quiz WHERE facID=".$_SESSION['facID'].";";
        $result = my_sql_exec($conn,$sql);
        $numQuizzes = mysqli_num_rows($result);
        if($numQuizzes == "0") echo "<p>There are no quizzes available.</p><br/>";
        echo "<div class=container style='text-align:center'>";
        echo "
              <h3>Select a Quiz to Edit</h3>
              <hr>";
        while($row = mysqli_fetch_row($result))
        {
            //makeLink("EditQuiz.php?quizName=".$row[0],$row[0]); echo "<br/>";
            echo "<a href='EditQuiz.php?quizName=".$row[0]."' class='btn btn-info' role='button'>Edit ".$row[0]."</a><br/><br/>";
        }
        echo "</div>";
    }
    
    /*
    	name: displayLogin
        parameters: null
        return void;
    */
    function displayLogin()
    {
    	if(isset($_SESSION['user']))
        {
        	header("Location:SimpleQMakeQuiz.php");
        }
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
    
    /*
    	name: displayProfile
        parameters: String $username
        return void;
    */
    function displayProfile($username)
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Faculty WHERE facID=".$_SESSION['facID'].";";
        $result = my_sql_exec($conn,$sql);
 
        echo "<div style='text-align:center'>";      
        while($row = mysqli_fetch_row($result))
        {
            	echo "<h1>Welcome ".$row[4]."!</h1>";
                echo "<h6>Here, the user can elect to either edit an existing quiz or create a new one.</h6>";
                if($row[6])
            	echo "<img src='".$row[6]."' style='width:250px;height:200px'><br/><br/>";
        }
        
        //echo "<p>The user only has access to the quizzes they have created</p>";
        //echo "<a href='SimpleQuizEdit.php' class='btn btn-info' role='button'>Edit Quiz</a>&nbsp&nbsp";
        echo "<a href='Step1.php' class='btn btn-info' role='button'>Create New Quiz</a><br/>
              <hr/>
              <h3>Your Quiz Results</h3>
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
    
    /*
    	name: displaySettings
        parameters: Integer $facID
        return void;
    */
    function displaySettings($facID)
    {
    	$conn = db_connect();
        $sql = "SELECT * FROM Faculty WHERE facID=".$facID.";";
        $result = my_sql_exec($conn,$sql);
 
        echo "<div style='text-align:center'>";      
        while($row = mysqli_fetch_row($result))
        {
            echo "<h1>Account Settings</h1><hr/>";
            if($row[6])
            	echo "<img src='".$row[6]."' style='width:250px;height:200px'><br/><hr/>";
            echo "<div style='text-align:left;margin-left:42%'><p><b>Username:</b> ".$row[1]."</p><br/>";   
            echo "<p><b>Email:</b> ".$row[3]."</p><br/>"; 
            echo "<p><b>Faculty ID:</b> ".$row[0]."</p></div><hr/>"; 
            //echo "<div class = container style=\"left-margin:100%\"><table border=1><tr><td>Username: </td><td>".$row[1]."</td><tr/>";   
            //echo "<tr><td>Email: </td><td>".$row[3]."</td><tr/>"; 
            //echo "<tr><td>Faculty ID: </td><td>".$row[0]."</td><tr/></table></div><hr/>"; 
            echo "<a href='ChangeInfo.php?option=pic' class='btn btn-info' role='button'>Change Your Profile Picture</a><br/><br/>";
            echo "<a href='ChangeInfo.php?option=password' class='btn btn-info' role='button'>Change Your Password</a><br/><br/>";
            echo "<a href='ChangeInfo.php?option=email' class='btn btn-info' role='button'>Change Your Email</a><br/><br/>";
        }
    }
    
    /*
    	name: changeInformation
        parameters: String $info
        return void;
    */
    function changeInformation($info)
    {
    	?>
        	<div class=container>
            <form method=post enctype="multipart/form-data" action="<?php echo $_SERVER['SELF'];?>">
            <?php
            	if($info=="pic")
                {
                	echo "Upload new profile picture: <input type='file' name='myfile'><br/>";
                }
                if($info=="password")
                {
                	echo "Enter old password: <input type=password name=oldpassword><br/>";
                    echo "Enter new password: <input type=password name=newpassword><br/>";
                    echo "Confirm new password: <input type=password name=newpassword2><br/>";
                }
                if($info=="email")
                {
                	echo "Enter new email: <input type=text name=email><br/>";
                }
            ?>
            <hr/>
            <input type="submit" value="Submit" name="submit">
            </form>
            </div>
        <?php
        if(isset($_POST['submit'])&& $_POST['submit']!=NULL)
        {
            echo "<div class=container><hr/>";
            $conn = db_connect();
            $sql = "SELECT * FROM Faculty WHERE facID=".$_SESSION['facID'].";";
            $result = my_sql_exec($conn,$sql);

            echo "<div style='text-align:center'>";      
            while($row = mysqli_fetch_row($result))
            {
                if($info=="pic")
                {
					$file = uploadfile("myfile");
                    $sql = "UPDATE Faculty SET picture='".$file."' WHERE facID='".$_SESSION['facID']."';";
                    if(my_sql_exec($conn, $sql))
                    {
                      echo "<h3>Your profile picture has been successfully reset.</h3><br/>";
                    }
                    else
                      echo "<h3>Failed to reset profile picture.</h3><br/>";
                }
                if($info=="password")
                {
                    if($row[2]==sha1($_POST['oldpassword']))
                    {
                        if($_POST['newpassword']!=$_POST['newpassword2'])
                        {
                            echo "<p>Passwords do not match.</p><br/>";
                        }
                        else
                        {
                            $sql = "UPDATE Faculty SET passWord='".sha1($_POST['newpassword'])."' WHERE facID='".$_SESSION['facID']."';";
                            if(my_sql_exec($conn, $sql))
                            {
                              echo "<h3>Password has been successfully reset.</h3><br/>";
                            }
                            else
                              echo "<h3>Failed to reset password.</h3><br/>";
                        }       
                    }
                    else
                        echo "<p>Current password is incorrect.</p><br/>";
                }
                if($info=="email")
                {
                    $sql = "UPDATE Faculty SET email='".$_POST['email']."' WHERE facID='".$_SESSION['facID']."';";
                    if(my_sql_exec($conn, $sql))
                    {
                      echo "<h3>Your email has been successfully reset.</h3><br/>";
                    }
                    else
                      echo "<h3>Failed to reset your email.</h3><br/>";
                }
            }
        	
            echo "</div>";
        }   
    }
    
    /*
    	name: displayRegistration
        parameters: null
        return void;
    */
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
    
    /*
    	name: displayPassReset
        parameters: null
        return void;
    */
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
    
    /*
    	name: displayResetForm
        parameters: null
        return void;
    */
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
    
    /*
    	name: newPassword
        parameters: null
        return void;
    */
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
    
    /*
    	name: displayQuizSearch
        parameters: String $username, String $password
        return Boolean;
    */
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
    
    /*
    	name: displayQuizResults
        parameters: String $quizName
        return void;
    */
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
    
    /*
    	name: displayQuizSearch
        parameters: String $result
        return Array;
    */
    function db_result_to_array($result)
    {
        $res_array = array();
        for($count=0;$row=mysqli_fetch_assoc($result);$count++)
        {
        	$res_array[$count] = $row;
		}
        return $res_array;
    }
    
    /*
    	name: displayQuizSearch
        parameters: String $username
        return String;
    */
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
