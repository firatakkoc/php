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
    // if($students !== "Erika Mustermann" && $students !== "Max Mustermann") {
    //     var_dump($students);
    // }

    if ($students === "Max Mustermann") continue;
    if ($students === "Erika Mustermann") continue;
    
    var_dump($students);
}

echo "\n";

$counter = -1;
foreach($a as $students) {
    $counter++;
    echo "index ".$counter.": ";
    var_dump($students);
    // if($counter >= 3) break;
    // if($counter ===  "Monika Mustermann") break;
    
}

?></pre>


</body>
</html>