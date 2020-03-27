<?php

namespace App\Models;

class Etudiant extends Base {

  protected $tableName = TABLE_PREFIX . 'etudiant';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Etudiant();
    }
    return self::$instance;
  }

  public function getAll()
  {
    $id_yearbook = $_SESSION['id_yearbook'];


    $sql = "SELECT * FROM `{$this->tableName}` WHERE id_yearbook = :id_yearbook ORDER BY nom";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id_yearbook', $id_yearbook);
    $sth->execute();
    return $sth->fetchAll();
  }

}
