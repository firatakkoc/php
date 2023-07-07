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

var_dump($_GET);

?></pre>

    <form action="05-folmulare.php" method="GET">
        <input type="text" name="firstname" value="<?php if (!empty($_GET["firstname"])) echo $_GET["firstname"]; ?>" />
        <input type="text" name="lastname" value="<?php if (!empty($_GET["lastname"])) echo $_GET["lastname"]; ?>" />
        <input type="submit" value="Abschicken!" />
    </form>
</body>

</html>