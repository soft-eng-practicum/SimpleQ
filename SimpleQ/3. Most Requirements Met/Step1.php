<?php
	require_once("coreFunctions.php");
    session_start();
    if($_SESSION['user'])
    {
    	makeHeader("Make Quiz | Select Template");
        makeNavBar();
        ?>
            <div style="margin-left:30%; margin-right:30%; text-align:left">
                <form method="post" action="Step2.php">
                    <strong>Select A Template</strong><br/><br/>
                    <select id="template" name="template">                      
                        <option value="A">Type A: Multiple Pages, Multiple Pictures</option>
                        <option value="B">Type B: One Page, Multiple Pictures</option>
                        <option value="C">Type C: One Page, One Picture</option>
                    </select><hr/>
                    <strong>How many questions?</strong><br/><br/> 
                    <select id="qAmount" name="qAmount">                      
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select><hr/>
                    <input type="submit" name="submit" value="Next Step"><br/>
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