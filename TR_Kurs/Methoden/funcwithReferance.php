<?php

    $num = 10;

    add($num);
    echo $num;
    function add(&$num) {
        $num = $num + 50;
    }

?>