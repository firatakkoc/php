<?php

use Admin\User;
use User\User as UUser;


require_once __DIR__ . '/src/User/User.php';
require_once __DIR__ . '/src/Admin/User.php';

$u = new User();
$u->printName();
echo "<br>";

$u2 = new \User\User();
$u2->printName();
echo "<br>";

$u3 = new UUser();
$u3->printName();
