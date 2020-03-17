<?php

namespace App\Models;

class EquipeDepartement extends Base {

  protected $tableName = TABLE_PREFIX . 'equipeDepartement';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new EquipeDepartement();
    }
    return self::$instance;
  }

  public function getAll()
  {
    $sql = "SELECT * FROM `{$this->tableName}` ORDER BY 'name'";
    return self::$dbh->query($sql)->fetchAll();
  }

}
