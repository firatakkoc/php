<?php
    $myArr = array(1,2,3,4,5,6,7);
    prnt($myArr);

    function prnt($myArray) {
        foreach ($myArray as $p) {
            echo $p."<br>";
        }
    }

    function ornek($veri) {
        $sayi = 0;
        foreach ( $veri as $al) {
            $sayi = $sayi + $al;
        }
        return array($sayi, "Firat", "Akkoc");
    }

    $dizi = array(1,2,3,4);
    $veri = ornek($dizi);

    echo "<pre>";
    print_r($veri);

?>