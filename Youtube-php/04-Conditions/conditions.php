<?php

$first_name = "firat";
$last_name = "akkoc";

if ($first_name == "Firat" || $last_name == "akkoc") {
  echo "<h1>"."login"."</h1>";
}else if ($first_name != "fira"  && $last_name == "akkoc") {
    echo "login";
}else {echo "<h1>"."false"."</h1>";}

?>