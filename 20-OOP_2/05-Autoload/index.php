<?php 


use App\Admin\Admin_User;

require_once __DIR__ . '/inc/autoload.php';

$ad = new Admin_User();
$ad->printAdmin();

echo "test";

?>