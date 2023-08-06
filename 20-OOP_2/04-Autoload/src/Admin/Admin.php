<?php 
namespace Admin;

use PDO;
class Admin_User {
  public function printAdmin(){
    //$pdo = new PDO();
    $role = new Role();
    echo 'printAdmin() von der Klasse Admin/Admin wurde angerufen';
  }
}

?>