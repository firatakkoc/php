<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  //sleep

  // echo date("h:i:s")."<br>";

  // sleep(3);

  // echo date("h:i:s")."<br>";

  // isset --> bir degiskenin var olup olmadigina bakiyoruz

  // $a = 1;

  // if (isset($a)) {
  //   echo "Ja";
  // }else {
  //   echo "nein";
  // }

  // strlen --> karakter sayisini alabiliyoruz

  // $a = "afdfnksenk";
  // echo strlen($a);

  // empty --> field bos mu yoksa dolu mu?

  // $a = 0;

  // if (empty($a)) {
  //   echo "None";
  // }else {
  //   echo "Not null";
  // }

  // get_include_files -->
  

  // glob

  foreach (glob("*")as $files):
    echo '<a href ="' . $files . '">' . $files . '</a> <br>';
  
  endforeach;

  ?>
</body>
</html>