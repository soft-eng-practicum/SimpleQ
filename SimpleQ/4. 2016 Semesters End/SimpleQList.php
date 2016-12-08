<?php
	require_once("coreFunctions.php");
    session_start();
    makeHeader("SimpleQ | Quiz List");
    makeNavBar();
    echo "<div style = 'text-align:center'>";
    $searchBy = $_POST['search'];
    if(isset($searchBy) && $searchBy!=NULL)//if $searchBY has created quizzes, show those quizzes only
    {
    	echo "<h2>All Quizzes by ".$searchBy."</h2><hr/>";
        displayQuizSearch($searchBy);
    }
    else
    {
      echo "<h2>All Quizzes Ever</h2><hr/>";
      displayAllQuizzes();
      echo "<hr/>";
      makeLink("https://ggcedu-my.sharepoint.com/personal/cgunay_ggc_edu/_layouts/15/WopiFrame.aspx?guestaccesstoken=6G%2b%2fKMhXLafZdwgMPbHvG7t%2b%2bQq5vpN7oFccixFsEU0%3d&docid=1_17837b358a7d644e792431643d9deef38&wdFormId=%7B4652E616-C2BC-44E0-A800-4F998615A6EA%7D&action=formsubmit","Please Take Our Class Survey");
      makeLink("https://goo.gl/forms/S9uXwj03vzydQMn52","Please Take Our DAAPS survey");
      echo "<hr/>";
    }
    echo "</div>";
    makeFooter();
?>