<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
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

$a = [ 
    "Max Mustermann",
    "Erika Mustermann",
    "Monika Mustermann",
    "Alexander Mustermann"
];

foreach ($a as $students) {
    var_dump($students);
}

?></pre>

<pre style="font-family: Arial, sans-serif;"><?php

foreach($a as $students) {
    echo "<p>".$students."\n"."</p>";
}



?></pre>


</body>
</html>