<?php
    //Functionlara parametre belirtmeden ver gönderebiliriz.

    $name = "<h1>Firat</h1>";
    $a = 5;
    $b = 10;
    info();
    add();

    function info(){
        // globak anahtar kelimesi ile degeri disaridan func'nun icine dahil edeiyoruz.
        global $name;
        echo $name;
    }
    /*Ayni islemi global deyimi yerine süper küresel fade ile de yapabilirsiniz.
    Disaridan bir degiskeni dahil etmek için $GLOBALS küresel ifadesini kullandiktan 
    sonra köseli parantezler içerisine degiskenin adini yazabilirsiniz. */

    function add(){
        echo $GLOBALS["a"] + $GLOBALS["b"];

    }
?>