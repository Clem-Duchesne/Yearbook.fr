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

  public function getLast()
  {
    return self::$dbh->lastInsertId();
  }

  public function getActif()
  {
    $sql = "SELECT id FROM `{$this->tableName}` WHERE fini = 0";
    $sth = self::$dbh->prepare($sql);
    $sth->execute();
    return $sth->fetch();
  }

  public function getFinished(){
    $sql = "SELECT anneePromotion, lien_pdf FROM `{$this->tableName}` WHERE fini = 1";
    $sth = self::$dbh->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
  }


}
