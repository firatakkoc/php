<?php 

    require_once __DIR__. '/functions.php';


  $classes = array(
    'Database',
    'Form',
    'HTML',
    'Guestbook'
  );

  $path = __DIR__.'/../classes/';


  foreach($classes AS $class) {
    require_once ($path.$class.'.php');
  }


  global 
    $c_db,
    $c_html,
    $c_form;

    $c_db    = new Database();
    $c_html  = new HTML();
    $c_form  = new Form();
    $c_guestbook = new Guestbook($c_db);