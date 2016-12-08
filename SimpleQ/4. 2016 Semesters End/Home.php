<?php
	require_once("coreFunctions.php");
    session_start();
    makeHeader("SimpleQ");
    makeNavBar();
?>
    <!-- Header -->
    <header class="w3-container w3-blue w3-center w3-padding-128"> 
        <h1 class="w3-margin w3-jumbo">SIMPLE Q</h1>
        <p class="w3-xlarge">Created by DAAPS</p>
        <?php makeSearchBar(); ?>  
        <a class="w3-btn w3-padding-16 w3-large w3-margin-top" href="SimpleQList.php">Take a Quiz</a>
	</header>
<?php
	makeFooter();
?>