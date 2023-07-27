<?php

header('Content-Type: text/plain');

function f($str, $count) {
    for($i = 0; $i < $count; $i++) {
        var_dump($str);
    }
    
}

$greeting = "Hallo";

f($greeting, 5);




?>