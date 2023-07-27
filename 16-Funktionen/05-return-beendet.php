<?php

header('Content-Type: text/plain');

// function f() {
//     return 'hallo';
//     var_dump('Test');
//     die();
//     return 'Mars';

// }

// var_dump(f());

function f2($number){
    if($number == 2){
        return 0;
    }
    return $number;
}

echo f2(2);


?>