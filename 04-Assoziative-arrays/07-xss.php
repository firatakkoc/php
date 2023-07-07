<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
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

?></pre>

<h1> <?php echo strip_tags($_GET["name"]); ?> </h1>

<form action="07-xss.php" method="GET" >
    <input type="text" name="name" value=" <?php echo strip_tags($_GET["name"]); ?>" />
    <input type="submit" value="Abschicken" />
</form>

</body>
</html>