<?php
	session_start();
	require_once("coreFunctions.php");  
    if($_SESSION['user'])
    {
    	makeHeader("Make Quiz | Enter Questions");
        makeNavBar();
        $temp = "template";
        $template = $_POST['template'];
        $qAm = "qAmount";
        $qAmount = $_POST['qAmount'];
        setcookie($temp,$template,time()+60*60*24,"/");
        setcookie($qAm,$qAmount,time()+60*60*24,"/");
         ?>
            <div class='container'>
                <h3>Template: <?php echo $template;?></h3><hr/>
                <form method="post" enctype="multipart/form-data" action="Step3.php" >
                    <?php 
                        inputQuestions($template,$qAmount)                   
                    ?>
                </form>
            </div>
        <?php
        makeFooter();
    }
    else
    {
    	header("Location:SimpleQLogin.php");
    }
    
?>