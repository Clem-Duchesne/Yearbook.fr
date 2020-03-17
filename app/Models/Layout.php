<?php

namespace App\Models;

class Layout extends Base {

  protected $tableName = TABLE_PREFIX . 'layout';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Layout();
    }
    return self::$instance;
  }

  public function getId($layout){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE `css_id` = :layout";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':layout', $layout);
    $sth->execute();
    return $sth->fetch();
  }
}