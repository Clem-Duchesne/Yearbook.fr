<?php

namespace App\Models;

class Police extends Base {

  protected $tableName = TABLE_PREFIX . 'police';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Police();
    }
    return self::$instance;
  }

  public function getAll()
  {
    $sql = "SELECT * FROM `{$this->tableName}` ORDER BY fontname";
    return self::$dbh->query($sql)->fetchAll();
  }

}
