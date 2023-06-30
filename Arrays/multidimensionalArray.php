<?php

    $student = array();
    $student[0] = array("Selim","Aydin");
    $student[1] = array("Aynur","Kemal");
    $student[2] = array("Ayla","Coskun");

    echo "<pre>";
    print_r($student);


    $student2  = array();
        $student2[0] = array("name" => "Firat Akkoc", "city" => "Hamburg");
        $student2[1] = array("name" => "Ozan Akkoc", "city" => "Istanbul");
        $student2[2] = array("name" => "Ugurkan Akkoc", "city" => "Berlin");
        $student2[3] = array("name" => "Nur Selin Akkoc", "city" => "Ardahan");

    echo "<pre>";
    print_r($student2);


    $names = array("Firat", "Ozan","Ugurkan");
    echo "<br>";

    for($i = 0; $i < count($names); $i++) {
        echo $i. " ".$names[$i]."<br>";
    }




?>