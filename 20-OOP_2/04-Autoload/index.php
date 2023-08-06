<?php 

use Admin\Admin_User;
use User\User as UUser;

require_once __DIR__ . '/src/User/User.php';
require_once __DIR__ . '/src/Admin/Admin.php';
require_once __DIR__ . '/src/Admin/Role.php';



$ad = new Admin_User();
$ad->printAdmin();
echo "<br>";


?>