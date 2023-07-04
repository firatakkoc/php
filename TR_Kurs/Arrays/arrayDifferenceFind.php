<?php
    // dizideki tekrarlayan degeri silme => array_unique();

    $array1 = array(1,2,2,3,4,5,6);

    $myArray = array_unique($array1);

    echo "<pre>";
    print_r($myArray);

?>