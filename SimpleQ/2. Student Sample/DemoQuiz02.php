<?php
	session_start();
    $cookieName = "name";
    $cookieEmail = "email";
    $nameValue = $_POST['name'];
    $emailValue = $_POST['email'];
    setcookie($cookieName,$nameValue,time()+60*60*24,"/");
    setcookie($cookieEmail,$emailValue,time()+60*60*24,"/");
    $cookieQuiz = "quiz";
    $quizValue = "DemoQuiz02";
    setcookie($cookieQuiz,$quizValue,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Quiz Type B | One Stop Shop
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
            <form method="post" enctype="multipart/form-data" action="DemoQuiz02-Done.php">
                <strong><p>Question 1</p></strong>
                <img src='Images/Picture1Arrows.jpg' alt='Trachea Picture 1' style='width:500px;height:400px'><br/>
                <p>Why is there a straigh line here?</p>
                <input type='radio' value='A' name='Q1' >A. It's the edge of the organ<br/>
                <input type='radio' value='B' name='Q1' >B. The tissue was cut here during preparation<br/>
                <input type='radio' value='C' name='Q1' >C. This is where you find skin<br/>
                <input type='radio' value='D' name='Q1' >D. This is the lumen<br/>
				<hr/>
                <strong><p>Question 2</p></strong>
                <img src='Images/Picture1Letters.jpg' alt='Trachea Picture 1' style='width:500px;height:400px'><br/>
                <p>Where do you find the lumen?</p>
                <input type='radio' value='A' name='Q2' >A<br/>
                <input type='radio' value='B' name='Q2' >B<br/>
                <input type='radio' value='C' name='Q2' >C<br/>
                <input type='radio' value='D' name='Q2' >D<br/>
				<hr/>
                <strong><p>Queston 3</p></strong>
                <img src='Images/Picture1.jpg' alt='Trachea Picture 1' style='width:500px;height:400px'><br/>
                <p>In the body, what shape is this organ?</p>
                <input type='radio' value='A' name='Q3' >A. Tubular, like a cylander<br/>
                <input type='radio' value='B' name='Q3' >B. Spherical, like a ball<br/>
                <input type='radio' value='C' name='Q3' >C. Rectangular<br/>
                <input type='radio' value='D' name='Q3' >D. Cuboid<br/>
				<hr/>
                <strong><p>Question 4</p></strong>
                <img src='Images/Picture2.jpg' alt='Trachea Picture 2' style='width:500px;height:400px'><br/>
                <p>What type of tissue do you find next to the Lumen?</p>
                <input type='radio' value='A' name='Q4' >A. Epithelial<br/>
                <input type='radio' value='B' name='Q4' >B. Connective<br/>
                <input type='radio' value='C' name='Q4' >C. Muscle<br/>
                <input type='radio' value='D' name='Q4' >D. Neural<br/>
				<hr/>
                <strong><p>Question 5</p></strong>
                <img src='Images/Picture3.jpg' alt='Trachea Picture 3' style='width:500px;height:400px'><br/>
                <p>What type of epithelium does this tissue have?</p>
                <input type='radio' value='A' name='Q5' >A. Simple Squamous Epithelium<br/>
                <input type='radio' value='B' name='Q5' >B. Simple Columnar Epithelium<br/>
                <input type='radio' value='C' name='Q5' >C. Stratified Squamous Epithelium<br/>
                <input type='radio' value='D' name='Q5' >D. Psuedostratified Ciliated Columnar Epithelium<br/>
				<hr/>
                <strong><p>Question 6</p></strong>
                <img src='Images/Picture3.jpg' alt='Trachea Picture 3' style='width:500px;height:400px'><br/>
                <p>Epithelium always sits on a _____________.</p>
                <input type='radio' value='A' name='Q6' >A. Blood Vessel<br/>
                <input type='radio' value='B' name='Q6' >B. Dermal Papilla<br/>
                <input type='radio' value='C' name='Q6' >C. Basement Membrane<br/>
                <input type='radio' value='D' name='Q6' >D. Mesothelial Lining<br/>
                <hr/>
                <strong><p>Question 7</p></strong>
                <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>What tissue do we see under the basement membrane?</p>
                <input type='radio' value='A' name='Q7' >A. Bone<br/>
                <input type='radio' value='B' name='Q7' >B. Cartilage<br/>
                <input type='radio' value='C' name='Q7' >C. Blood<br/>
                <input type='radio' value='D' name='Q7' >D. Ligaments<br/>
                <hr/>
                <strong><p>Question 8</p></strong>
                <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>Cartilage is a subtype of _________ tissue.</p>
                <input type='radio' value='A' name='Q8' >A. Epithelial<br/>
                <input type='radio' value='B' name='Q8' >B. Connective<br/>
                <input type='radio' value='C' name='Q8' >C. Muscle<br/>
                <input type='radio' value='D' name='Q8' >D. Neural<br/>
                <hr/>
                <strong><p>Question 9</p></strong>
                <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>What organ is this?</p>
                <input type='radio' value='A' name='Q9' >A. The Trachea<br/>
                <input type='radio' value='B' name='Q9' >B. The Esophagus<br/>
                <input type='radio' value='C' name='Q9' >C. The Ureter<br/>
                <input type='radio' value='D' name='Q9' >D. The Colon<br/>
                <hr/>
                <strong><p>Question 10</p></strong>
                <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>What organ system contains the trachea?</p>
                <input type='radio' value='A' name='Q10' >A. The Digestive System<br/>
                <input type='radio' value='B' name='Q10' >B. The Cardiovascular System<br/>
                <input type='radio' value='C' name='Q10' >C. The Respiratory System<br/>
                <input type='radio' value='D' name='Q10' >D. The Immune System<br/>
                <hr/>
                <strong><p>Question 11</p></strong>
                <img src='Images/Picture1.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>In the body, what substance is found in this organ?</p>
                <input type='radio' value='A' name='Q11' >A. Cerebrospinal Fluid<br/>
                <input type='radio' value='B' name='Q11' >B. Blood<br/>
                <input type='radio' value='C' name='Q11' >C. Food<br/>
                <input type='radio' value='D' name='Q11' >D. Air<br/>
                <hr/>
                <strong><p>Question 12</p></strong>
                <img src='Images/Picture3.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>Why does this tissue have cilia?</p>
                <input type='radio' value='A' name='Q12' >A. To move the air along<br/>
                <input type='radio' value='B' name='Q12' >B. To help clear dust particles and pathogens<br/>
                <input type='radio' value='C' name='Q12' >C. To make mucous<br/>
                <input type='radio' value='D' name='Q12' >D. To absorb nutrients<br/>
                <hr/>
                <strong><p>Question 13</p></strong>
                <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>Why does this organ have cartilage?</p>
                <input type='radio' value='A' name='Q13' >A. To hold the trachea open while you breathe<br/>
                <input type='radio' value='B' name='Q13' >B. To protect the lungs from food you eat<br/>
                <input type='radio' value='C' name='Q13' >C. To aid in digestion<br/>
                <input type='radio' value='D' name='Q13' >D. To make mucous for the mucociliary escalator<br/>
                <br/>
                <input type='submit' value='Submit Answers' name='submit'>
            </form>
        </div>
    </body>
</html>