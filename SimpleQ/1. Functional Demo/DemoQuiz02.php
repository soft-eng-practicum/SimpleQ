<?php
	//start a session and set cookies to track answers and a grade 
?>
<html>
    <head>
    	<title>
        	Demo Quiz 02 | One Stop Shop
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
                <strong><p>Queston 1</p></strong>
                <img src='Images/Picture1.jpg' alt='Trache Picture 1' style='width:500px;height:400px'><br/>
                <p>In the body, what shape is this organ?</p>
                <input type='radio' value='A' name='Q1' >A. Tubular, like a cylander<br/>
                <input type='radio' value='B' name='Q1' >B. Spherical, like a ball<br/>
                <input type='radio' value='C' name='Q1' >C. Rectangular<br/>
                <input type='radio' value='D' name='Q1' >D. Cuboid<br/>
				<hr/>
                <strong><p>Queston 2</p></strong>
                <img src='Images/Picture2.jpg' alt='Trache Picture 2' style='width:500px;height:400px'><br/>
                <p>What type of tissue do you find next to the Lumen?</p>
                <input type='radio' value='A' name='Q2' >A. Epithelial<br/>
                <input type='radio' value='B' name='Q2' >B. Connective<br/>
                <input type='radio' value='C' name='Q2' >C. Muscle<br/>
                <input type='radio' value='D' name='Q2' >D. Neural<br/>
				<hr/>
                <strong><p>Queston 3</p></strong>
                <img src='Images/Picture3.jpg' alt='Trachea Picture 3' style='width:500px;height:400px'><br/>
                <p>What type of epithelium does this tissue have?</p>
                <input type='radio' value='A' name='Q3' >A. Simple Squamous Epithelium<br/>
                <input type='radio' value='B' name='Q3' >B. Simple Columnar Epithelium<br/>
                <input type='radio' value='C' name='Q3' >C. Stratified Squamous Epithelium<br/>
                <input type='radio' value='D' name='Q3' >D. Psuedostratified Ciliated Columnar Epithelium<br/>
				<hr/>
                <strong><p>Queston 4</p></strong>
                <img src='Images/Picture3.jpg' alt='Trachea Picture 3' style='width:500px;height:400px'><br/>
                <p>Epithelium always sits on a _____________.</p>
                <input type='radio' value='A' name='Q4' >A. Blood Vessel<br/>
                <input type='radio' value='B' name='Q4' >B. Dermal Papilla<br/>
                <input type='radio' value='C' name='Q4' >C. Basement Membrane<br/>
                <input type='radio' value='D' name='Q4' >D. Mesothelial Lining<br/>
                <hr/>
                <strong><p>Queston 5</p></strong>
                <img src='Images/Picture4.jpg' alt='Trachea Picture 4' style='width:500px;height:400px'><br/>
                <p>What tissue do we see under the basement membrane?</p>
                <input type='radio' value='A' name='Q5' >A. Bone<br/>
                <input type='radio' value='B' name='Q5' >B. Cartilage<br/>
                <input type='radio' value='C' name='Q5' >C. Blood<br/>
                <input type='radio' value='D' name='Q5' >D. Ligaments<br/>
                <input type='submit' value='Submit Answers' name='submit'>
            </form>
        </div>
    </body>
</html>