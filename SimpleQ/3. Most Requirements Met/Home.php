<?php
	require_once("coreFunctions.php");
	makeHeader("SimpleQ | Home");
    makeJumbotron("Welcome to Simple Q");
    echo "<div class='container'>";
    makeNavBar();
    makeSearchBar();
      ?>
          <center>
            <h3>Please select one of the following</h3>
            <a href="SimpleQList.php" class="btn btn-info" role="button">Take a Quiz</a>
            <a href="SimpleQLogin.php" class="btn btn-info" role="button">Make a Quiz</a>
            <!--Above is a button link for styling-->
          </center>
      <?php
    echo "</div>";
    makeFooter();
?>
       		