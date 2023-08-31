


<?php

function alphabet() {
  $chars = [];

  for ($x = ord('A'); $x <= ord('Z'); $x++) {
    $chars[] = chr($x);
  }

  return $chars;
}


var_dump(alphabet());



?>