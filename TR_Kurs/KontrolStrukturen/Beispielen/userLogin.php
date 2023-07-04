<?php

    $username = "firat";
    $pass = "12345";

    if ( $username != "firat") {
        echo "<h1>Falsch Username</h1>";
    }
    else if ($pass != "123456") {
        echo "<h1>Falsch Pass</h1>";
    }
    else {
        echo "<h1>Willkommen</h1>";
    }

?>