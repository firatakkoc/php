<?php 

class Database {

  private $pdo;

  public function __construct() {
    $this->init();
  }

  public function init() {
    try {
      $this->pdo = new PDO('mysql:host=localhost:3306;dbname=guestbook', 'root','', [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]);
    }
    
    catch(PDOException $e) {
        echo 'Probleme mit der Datenbankverbindung...';
        die();
    }
  }

  public function get_all($sql) {
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function insert($sql) {
  $stmt = $this->pdo->prepare($sql);
  return $stmt->execute();
}




}