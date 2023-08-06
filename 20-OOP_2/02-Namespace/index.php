<?php 

use Admin\Admin_User;
use User\User as UUser;

require_once __DIR__ . '/src/User/User.php';
require_once __DIR__ . '/src/Admin/Admin.php';



$u = new \User\User();
$u->printName();
echo "<br>";
$ad = new Admin_User();
$ad->printAdmin();
echo "<br>";
$u2 = new UUser();
$u2->printName();

?>