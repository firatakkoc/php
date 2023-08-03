<?php
@include 'config.php';

session_start();


if(!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hallo, <span>benutzer</span></h3>
            <h1>willkommen <span><?php echo $_SESSION['user_name']; ?></span> </h1>
            <p>Das ist Benutzer Seite</p>
            <a href="login_form.php" class="btn">Einlogin</a>
            <a href="register_form.php" class="btn">Anmelden</a>
            <a href="logout.php" class="btn">Abmeldung</a>
        </div>
    </div>
</body>
</html>