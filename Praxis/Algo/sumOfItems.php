<?php

$a = array(1,2,3,4,5,6,7,3);

function sumOfAllItems($input) {
  $temp = 0;
  foreach($input as $array) {
    if (is_numeric ($array)) {
      $temp += $array;
      } else{
        echo"Not a number";
    }
  }
  return $temp;
}


// echo sumOfAllItems($a);


function firstRecurringCharacter($input) {
  for($i = 0; $i < count($input); $i++) {
    for($j = $i  + 1; $j < count($input); $j++) {
      if($input[$i] === $input[$j]) {
        return $input[$i];
      }
    }
  }
  return false;
}


function firstRecurringCharacter2($input) {
  $map = [];
  for($i = 0; $i < count($input); $i++) {
    if (isset($map[$input[$i]])) { // isset kontrolü eklendi
      return $input[$i];
    } else {
      $map[$input[$i]] = $i;
    }
  }
  return false;
}


echo firstRecurringCharacter2($a);

