<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional</title>
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

$student = array(
    'Vorname' => 'Firat',
    'Nachname' => 'Akkoc',
    array('Mathe' => 90, 'Deutsch' => 80, 'Kunst' => 75)
);

foreach($student as $infKey => $val) {
    if(is_array($val)) {
        foreach ($val as $fach => $note) {
            echo $fach.": ". $note."\n";
        }
    }
    else {
        echo $infKey .": ". $val . "\n";
    }
    
}


?></pre>
</body>
</html>