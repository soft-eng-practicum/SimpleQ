<?php
	require_once("coreFunctions.php");
    makeHeader("SimpleQ | Quiz List");
    makeNavBar();
    echo "<div style = 'text-align:center'>";
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
      displayAllQuizzes();
      echo "<hr/>";
      echo "<a href='https://goo.gl/forms/S9uXwj03vzydQMn52'>Please take our short survey</a><br/><br/>";
    }
    echo "</div>";
    makeFooter();
?>