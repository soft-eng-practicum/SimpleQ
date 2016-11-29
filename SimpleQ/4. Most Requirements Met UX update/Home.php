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

    <!-- Header -->
    <header class="w3-container w3-blue w3-center w3-padding-128">
        <h1 class="w3-margin w3-jumbo">SIMPLE Q</h1>
        <p class="w3-xlarge">Created by DAAPS</p>
        <a class="w3-btn w3-padding-16 w3-large w3-margin-top" href="SimpleQList.php">Take a Quiz</a>
</header>


    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
        <div class="w3-xlarge w3-padding-32">

            <a href="https://github.com/soft-eng-practicum/myXLab" class="w3-hover-text-indigo"><i class="fa fa-github"></i></a>
        </div>
        <p>This is our Github</p>
    </footer>

    <script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
    </script>

</body>
</html>
