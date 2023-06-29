<?php

/*Static Kullanimi Nedir?
Fonksiyonlarda kullanilan degiskenlerde STATIC devimi kullantlarak, 
fonksiyonun birden fazla çalismasi durumunda degerin hafizada) tutulup, 
yeni degerler üretilmesini saglamaktadir.*/

    // Sayi üretme Function;

    function uret(){
        static $sayi = 1;
        echo $sayi."<br>";
        $sayi++;
    }

    uret();

    uret();
    uret();

?>