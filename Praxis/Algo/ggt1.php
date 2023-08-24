<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

function ggt1($n, $m) {
  while ($m != 0) {
      $t = $m;
      $m = $n % $m;
      $n = $t;
  }
  return $n;
}


  echo ggt1(34,56);


?>
  
</body>
</html>