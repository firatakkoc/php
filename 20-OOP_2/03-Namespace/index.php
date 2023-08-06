<?php 

use Admin\Admin_User;


spl_autoload_register(function($class) {
  $file = __DIR__. '/src/' . str_replace('\\', '/', $class) .'.php';
  var_dump($class);
  echo "<br>";
  var_dump($file);
  if(file_exists($file)) {
    require_once $file;
  }

});

echo "<br>";
$ad = new Admin_User();
$ad->printAdmin();



?>