<?php
    $a = array(1,2,3,4,5,6,7);

    foreach ($a as $b) {
        echo $b;
        echo "<br>";
    }
    
    $inf["name"] = "firat";
    $inf["surname"] = "akkoc";
    $inf["city"] = "new york";

    foreach ( $inf as $key => $value) {
        echo $key;
        echo " = ",$value;
        echo "<br>";
    }
    
    
    
?>