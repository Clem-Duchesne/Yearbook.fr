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
    $sql = "SELECT * FROM `{$this->tableName}` ORDER BY nom";
    return self::$dbh->query($sql)->fetchAll();
  }

}
