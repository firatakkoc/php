<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>----</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body {
                font-size: 30px;
                font-family: sans-serif;
            }
        </style>
    </head>

    <body>
        <nav>
        <header>Geburtsstatistiken</header>
        <p>Das hier ist eine Webseiter</p>
        </nav>
        
        <pre style="font-family: Arial, sans-serif;"><?php

        include './inc/names.php';

        $firstLetters = [];
        foreach ($names as $nameArray) {
            $nameFirstLetter = $nameArray['name'][0];

            if (empty($firstLetters[$nameFirstLetter])) {
                $firstLetters[$nameFirstLetter] = true;
            }

        }

        var_dump($firstLetters);

        ?></pre>

        <p>
            <?php foreach($firstLetters as $firstLetter => $_): ?>
                <a href="index.php?char=<?php echo $firstLetter; ?> "> <?php echo $firstLetter; ?></a> 
            <?php endforeach; ?>
            </p>
    </body>

    </html>
</body>

</html>