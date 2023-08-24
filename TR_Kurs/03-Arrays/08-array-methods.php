<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  // mt_rand --> rastgele sayi üretiyor;

  echo mt_rand(0,100)."<br>";

  echo floor(4.3)."<br>";
  echo floor(4.3)."<br>";
  echo floor(-3.3)."<br>";

  echo round(4.3)."<br>";
  echo round(4.3)."<br>";
  echo round(4.3)."<br>";

  echo ceil(4.3)."<br>";
  echo ceil(4.3)."<br>";
  echo ceil(4.3)."<br>";

// max - min

echo max(2,3,6,7,9,15)."<br>";
echo min(2,3,6,7,9,15)."<br>";

// str_split

$satz = "Ich lerne Programmierung";

$data = str_split($satz);

var_dump($data);


  ?>
</body>
</html>


