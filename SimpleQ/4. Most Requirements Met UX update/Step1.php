
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
            <li><a href="Home.php" class="w3-padding-large w3-white">SQ</a></li>
            <li class="w3-hide-small"><a href="SimpleQLogin.php" class="w3-padding-large w3-hover-white">Create Quiz</a></li>
            <li class="w3-hide-small"><a href="SimpleQList.php" class="w3-padding-large w3-hover-white">Quiz List</a></li>
            <li class="w3-hide-small"><a href="SimpleQAbout.php" class="w3-padding-large w3-hover-white">About</a></li>

        </ul>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
            <ul class="w3-navbar w3-left-align w3-large w3-black">
                <li><a class="w3-padding-large" href="SimpleQLogin.php">Create Quiz</a></li>
                <li><a class="w3-padding-large" href="SimpleQList.php">Quiz List</a></li>
                <li><a class="w3-padding-large" href="SimpleQAbout.php">About</a></li>
            </ul>
        </div>
    </div>
    <header class="w3-container w3-blue w3-center w3-padding-128">
        <?php
        require_once("coreFunctions.php");
        session_start();
        if($_SESSION['user'])
        {
        ?>
        <div style="margin-left:30%; margin-right:30%; text-align:left">
            <form method="post" action="Step2.php">
                <strong>Select A Template</strong><br /><br />
                <select id="template" name="template">
                    <option value="A">Type A: Multiple Pages, Multiple Pictures</option>
                    <option value="B">Type B: One Page, Multiple Pictures</option>
                    <option value="C">Type C: One Page, One Picture</option>
                </select><hr />
                <strong>How many questions?</strong><br /><br />
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
                </select><hr />
                <input type="submit" name="submit" value="Next Step"><br />
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