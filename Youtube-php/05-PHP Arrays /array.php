<?php

$guitar = ['Vela','Explorer','Strat'];

function printArray($myArray) {
  foreach ($myArray as $index => $model) {
    echo $index  . ": " . $model . "\n";
}
  
}

if(isset($guitar)) {
  printArray($guitar);
}else {
  echo 'No guitars found';
}

echo "<br>";


$guitar2 = [
  'prs' => "Vela",
  'gibson' => "Explorer",
  'fender' => "Strat"
];

printArray($guitar2);




?>