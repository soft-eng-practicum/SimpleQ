<?php
require_once("coreFunctions.php");
makeHeader("SimpleQ | User Tutorial");
makeNavBar();
makeJumbotron("User Documentation");
/*
 * User Documentation page (Tutorial.php)
 */
?>
    <div class='container' style = 'text-align:center'>
        <h1>
            Faculty: Quiz Makers
        </h1>
        <hr/>
        <p>
            <h2>Step 1:</h2>
            <h4 style="color:blue;">Click Login button, which is circled below</h4><br>
            <img src="navTu.JPG" alt="Click Login"><hr>
            <h2>Step 2:</h2>
            <h4 style="color:blue;">Login to your account, or click create account if you do not have one</h4><br>
            <img src="logTu.JPG" alt="Login/Create"><hr>
            <h2>Step 3:</h2>
            <h4 style="color:blue;">Under the user profile picture click the "Create new Quiz" link.</h4><br>
            <img src="createTu.JPG" alt="Create New"><hr>
            <h2>Step 4:</h2>
            <h4 style="color:blue;">Select which template and number of questions for your new Quiz</h4><br>
            <img src="tempTu.JPG" alt="Template"><hr>
            <h2>Step 5:</h2>
            <h4 style="color:blue;">For this tutorial we are going to select Template C:</h4><br>
            <h4 style="color:blue;">This template is "One Page, One Picture", with this enter in your personalized data.</h4><br>
            <img src="quizTu.JPG" alt="Click L"><br>
            <h4 style="color:blue;">After all your information is entered press Create Quiz!</h4><br>
            <img src="creTu.JPG" alt="Click L"><br>
            <h2 style="color:deepskyblue;">Congratulations on Creating your First Quiz!</h2>
        </p>

    </div>
<?php
makeFooter();
?>