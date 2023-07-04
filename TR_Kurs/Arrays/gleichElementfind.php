<?php
    // dizilerin ortak elemanlarini bulma => array_intersect();

    $array1 = array(1,2,3,4,5,6);
    $array2 = array(3,7,8,9,10,11);

    $myArray = array_intersect($array1, $array2);

    echo "<pre>";
    print_r($myArray);

?>