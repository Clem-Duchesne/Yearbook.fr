<?php

namespace App\Models;

class Texte extends Base {

  protected $tableName = TABLE_PREFIX . 'texte';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Texte();
    }
    return self::$instance;
  }

  public function getId($texte){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE content = :texte";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':texte', $texte);
    $sth->execute();
    return $sth->fetch();
  }
}