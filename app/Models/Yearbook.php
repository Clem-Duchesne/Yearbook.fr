<?php

namespace App\Models;

//Ges tion des administrateurs

class Yearbook extends Base {

  protected $tableName = TABLE_PREFIX . 'yearbook';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Yearbook();
    }
    return self::$instance;
  }
  /*
 public function getAll() 
  {
    $sql = "SELECT * FROM `{$this->tableName}` WHERE actif = 1";
    //r($sql);die();
   return self::$dbh->query($sql)->fetch();
  }
  */

  public function getLast()
  {
    return self::$dbh->lastInsertId();
  }
}
