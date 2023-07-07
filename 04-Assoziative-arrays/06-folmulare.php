<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folmulare</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <pre style="font-family: Arial, sans-serif;"><?php

var_dump($_POST);

?></pre>

    <form action="06-folmulare.php" method="POST">
        <input type="text" name="firstname" value="<?php if (!empty($_POST["firstname"])) echo $_POST["firstname"]; ?>" />
        <input type="text" name="lastname" value="<?php if (!empty($_POST["lastname"])) echo $_POST["lastname"]; ?>" />
        <input type="password" name="password" />
        <input type="checkbox" name="agb" value="1"<?php if (!empty($_POST["agb"])) echo 'checked ="checked" '; ?>  />
        <input type="submit" value="Abschicken!" />
    </form>
</body>

</html>