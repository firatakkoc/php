<?php

    $isimler = array("Firat","Ozan","Ugurkan");

    echo "<h1>","Firat","</h1>";

    echo $isimler[0],"<br>";
    echo $isimler[1],"<br>";
    echo $isimler[2],"<br>";

    print_r($isimler);

    $mitgliederinformation = array (
        "vor_nachName" => "Firat Akkoc",
        "stadt" => "Hamburg",
        "note" => "1",
        "autorisierung" => "Schüler"
    ); 

    echo "<br>";
    echo "<br>";

    foreach ($mitgliederinformation as $a) {
        echo $a,"<br>";
    }


?>