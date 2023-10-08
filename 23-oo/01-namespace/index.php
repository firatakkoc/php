<?php
require_once __DIR__ . '/src/User/User.php';
require_once __DIR__ . '/src/Admin/User.php';


$u = new User\User();
$u->printName();
echo "<br>";
$a = new Admin\User();
$a->printName();
echo "<br>";
$u2 = new User\User();
$u2 ->printName();