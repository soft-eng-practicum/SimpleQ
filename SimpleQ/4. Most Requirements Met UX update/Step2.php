<!DOCTYPE html>
<html>
<title>Simple Q</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif;
    }

    .w3-navbar, h1, button {
        font-family: "Montserrat", sans-serif;
    }

    .fa-anchor, .fa-coffee {
        font-size: 200px;
    }
</style>
<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div style="text-align:right">
            <form method="post" action="SimpleQList.php">
                <input type="text" name="search" placeholder="Search by Faculty" />
                <input type="submit" name="submit" value="Find Quiz" />
            </form>
        </div>
        <ul class="w3-navbar w3-blue w3-card-2 w3-left-align w3-large">
            <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                <a class="w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            </li>
            <li><a href="Home.html" class="w3-padding-large w3-white">SQ</a></li>
            <li class="w3-hide-small"><a href="SimpleQLogin.html" class="w3-padding-large w3-hover-white">Create Quiz</a></li>
            <li class="w3-hide-small"><a href="SimpleQList.html" class="w3-padding-large w3-hover-white">Quiz List</a></li>
            <li class="w3-hide-small"><a href="SimpleQAbout.html" class="w3-padding-large w3-hover-white">About</a></li>

        </ul>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
            <ul class="w3-navbar w3-left-align w3-large w3-black">
                <li><a class="w3-padding-large" href="SimpleQLogin.html">Create Quiz</a></li>
                <li><a class="w3-padding-large" href="SimpleQList.html">Quiz List</a></li>
                <li><a class="w3-padding-large" href="SimpleQAbout.html">About</a></li>
            </ul>
        </div>
    </div>
    <header class="w3-container w3-blue w3-center w3-padding-128">
        <?php
        session_start();
        require_once("coreFunctions.php");
        if($_SESSION['user'])
        {

        $temp = "template";
        $template = $_POST['template'];
        $qAm = "qAmount";
        $qAmount = $_POST['qAmount'];
        setcookie($temp,$template,time()+60*60*24,"/");
        setcookie($qAm,$qAmount,time()+60*60*24,"/");
        ?>
        <div class='container'>
            <h3>Template: <?php echo $template;?></h3><hr />
            <form method="post" enctype="multipart/form-data" action="Step3.php">
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
    </header>