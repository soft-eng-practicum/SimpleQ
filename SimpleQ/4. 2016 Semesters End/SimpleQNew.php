<?php
	require_once("coreFunctions.php");
    makeHeader();
    makeNavBar();
    ?>
    	<div style="margin-right:40%; text-align:right">
        	<form method="post" action="QuizCreated.php">
            	Select A Template: <input type><br/>
                <input type><br/>
                <input type><br/>
                <input type><br/>
                <input type="submit" name="submit" value="Create Quiz!"><br/>
            </form>
    	</div>
	<?php
    makeFooter();
?>