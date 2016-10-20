<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>
			HOME | Welcome to SimpleQ 
		</title>
	</head>
	<body>
		<form method="post" action="<?php echo 'htmlspecialchars($_SERVER["SELF"])';?>">
			<input type="text" name="search" value="<?php if($_POST['search']!=NULL)  echo $_POST['search']?>">
			<input type=submit name="Find Quiz">   
		</form>
		<a href = "simpleQList.php">Take a Quiz</a>
		<a href = "simpleQLogin.php">Make a Quiz</a>
	</body>
</html>