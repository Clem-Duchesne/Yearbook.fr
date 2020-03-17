<?php

namespace App\Models;

class Cellule extends Base {

  protected $tableName = TABLE_PREFIX . 'cellule';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Cellule();
    }
    return self::$instance;
  }

  public function getId($cellule){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE `data-style` = :cellule";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':cellule', $cellule);
    $sth->execute();
    return $sth->fetch();
  }

  public function getIdImg($cellule){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE `data-image` = :cellule";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':cellule', $cellule);
    $sth->execute();
    return $sth->fetch();
  }
} 