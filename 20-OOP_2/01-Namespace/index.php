<?php 

require_once __DIR__ . '/src/User/User.php';
require_once __DIR__ . '/src/Admin/Admin.php';



$u = new User\User();
$u->printName();
echo "<br>";
$ad = new Admin\Admin_User();
$ad->printAdmin();
?>