<?php

namespace App\Models;

class Pages_layout_cellule_content extends Base {

  protected $tableName = TABLE_PREFIX . 'pages_layout_cellule_content';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Pages_layout_cellule_content();
    }
    return self::$instance;
  }

  public function deleteWithImg($id, $yearbook, $cellule, $layout, $pages){
    $sql = "DELETE FROM `{$this->tableName}` WHERE image_id = :id AND cellule_id = :cellule AND layout_id = :layout AND pages_id = :pages AND yearbook_id = :yearbook";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->bindValue(':cellule', $cellule);
    $sth->bindValue(':layout', $layout );
    $sth->bindValue(':pages', $pages );
    $sth->bindValue(':yearbook', $yearbook);
    $sth->execute();
  }

  public function getOne($cellule, $yearbook, $layout, $pages){
    $sql = "SELECT COUNT(*) AS c, id FROM `{$this->tableName}` WHERE cellule_id = :cellule AND layout_id = :layout AND pages_id = :pages AND yearbook_id = :yearbook";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':cellule', $cellule);
    $sth->bindValue(':layout', $layout );
    $sth->bindValue(':pages', $pages );
    $sth->bindValue(':yearbook', $yearbook);
    $sth->execute();
    return ($sth->fetch()['c'] > 0);
  }

  public function getTextId($cellule, $yearbook, $layout, $pages){
    $sql = "SELECT text_id FROM `{$this->tableName}` WHERE cellule_id = :cellule AND layout_id = :layout AND pages_id = :pages AND yearbook_id = :yearbook";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':cellule', $cellule);
    $sth->bindValue(':layout', $layout );
    $sth->bindValue(':pages', $pages );
    $sth->bindValue(':yearbook', $yearbook);
    $sth->execute();
    return ($sth->fetch()['text_id']);
  }

  public function getImgId($cellule, $yearbook, $layout, $pages){
    $sql = "SELECT image_id FROM `{$this->tableName}` WHERE cellule_id = :cellule AND layout_id = :layout AND pages_id = :pages AND yearbook_id = :yearbook";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':cellule', $cellule);
    $sth->bindValue(':layout', $layout );
    $sth->bindValue(':pages', $pages );
    $sth->bindValue(':yearbook', $yearbook);
    $sth->execute();
    return ($sth->fetch()['image_id']);
  }

  public function deleteWhereImg($cellule, $layout, $pages){
    $sql = "DELETE FROM `{$this->tableName}` WHERE cellule_id = :cellule AND layout_id = :layout AND pages_id = :pages";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':cellule', $cellule);
    $sth->bindValue(':layout', $layout );
    $sth->bindValue(':pages', $pages );
    $sth->execute();
  }

}