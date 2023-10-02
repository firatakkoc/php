<?php 

class Guestbook {

  private $db;

  const TABLENAME = 'entries';

  public function __construct($db) {
    $this->db = $db;
  }

  public function get_tablename() {
    return $this::TABLENAME;
  }

  public function get_fields() {
    
    return '
      id       AS "entries_id",
      name     AS "name",
      title    AS "title",
      content  AS "content"
      date     AS "datum",
    ';

  } 


  public function get_eintraege() 
  {

    $sql = '
      SELECT 
        '.$this->get_fields().'
      FROM '.SELF::TABLENAME.' 
      ORDER BY entries_id DESC';
    return $this->db->get_all($sql);

  }

  public function insert($post) {
    $currentDateTime = date('Y-m-d H:i:s');
    $sql = 'INSERT INTO '.SELF::TABLENAME.' (name, title, content, datum) VALUES(
      "'.$post['name'].'",
      "'.$post['title'].'",
      "'.$post['content'].'",
      "'.$currentDateTime.'"
    )';

    return $this->db->insert($sql);
}

}