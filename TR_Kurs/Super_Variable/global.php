<?php

$degisken = 35;

function topla($a) {
    $sonuc = $a + $GLOBALS["degisken"];
    return $sonuc;
}

echo topla(10);

?>