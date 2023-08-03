<!DOCTYPE html>
<?php

@include 'config.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && `password` = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!';
    } else {
        if ($pass != $cpass) {

            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO user_form(`name`, email, `password`, user_type) VALUES('$name','$email','$pass', '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
};
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>jetzt anmelden</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="Ihren Namen eintragen">
            <input type="email" name="email" required placeholder="Ihre Mails eingeben">
            <input type="password" name="password" required placeholder="Ihre Password eingeben">
            <input type="password" name="cpassword" required placeholder="Bestätigen Sie Ihr Passwort">
            <select name="user_type">
                <option value="user">benutzer</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Sie haben bereits ein Konto? <a href="login_form.php">jetzt einlogin</a></p>
        </form>
    </div>
</body>

</html>