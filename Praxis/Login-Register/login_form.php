<!DOCTYPE html>
<?php

@include 'config.php';
session_start();
$error = array();

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && `password` = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
        } else if ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        } else {
            $error[] = 'E-Mail oder Passwort falsch';
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>jetzt einlogin</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="Ihre Mails eingeben">
            <input type="password" name="password" required placeholder="Ihre Password eingeben">
            <input type="submit" name="submit" value="jetzt einlogin" class="form-btn">
            <p>Sie haben kein Konto? <a href="register_form.php">jetzt anmelden</a></p>
        </form>
    </div>
</body>

</html>