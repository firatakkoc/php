<?php
@include 'config.php';

session_start();


if(!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hallo, <span>admin</span></h3>
            <h1>willkommen<span><?php echo $_SESSION['admin_name']; ?></span> </h1>
            <p>Das ist Admin Seite</p>
            <a href="login_form.php" class="btn">Einlogin</a>
            <a href="register_form.php" class="btn">anmelden</a>
            <a href="logout.php" class="btn">Abmeldung</a>
        </div>
    </div>
</body>
</html>