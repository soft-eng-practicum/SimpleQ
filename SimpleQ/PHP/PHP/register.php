<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "xlab";

require 'database.php';

$message = '';

if(!empty($_POST['username']) && !empty($_POST['password'])):
    $query = "INSERT INTO users (username, password) VALUES(:username, :password)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password',$_POST['password']);

    if ($stmt->execute())
    {
        $message = 'Page will auto redirect in 15 seconds.';
        ////figure out how to popup alert.

        function redirect($url)
        {
            header('Location: '.$url);
            exit();
        }
        redirect('userauth.php');
    }
    else
    {
        $message = 'Registration error';
    }

endif;
?>

<?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<h1>Register</h1>

<form action = "register.php" method="POST">
    username: <input type="username" placeholder ="Enter your username" name="username" />
    password: <input type="password" placeholder ="Enter your password" name="password" />
    <input type="submit">
</form>


