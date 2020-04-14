<?php

namespace App\Models;

class Page extends Base {

  protected $tableName = TABLE_PREFIX . 'page';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Page();
    }
    return self::$instance;
  }

  public function getId($page){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE pages_number = :nb";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':nb', $page);
    $sth->execute();
    return $sth->fetch();
  }

  public function getAll(){
    $id_yearbook = $_SESSION['id_yearbook'];
    $sql = "SELECT * FROM `{$this->tableName}` WHERE id_yearbook = :id_yearbook";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id_yearbook', $id_yearbook);
    $sth->execute();
    return $sth->fetchAll();
  }

  public function init($idYearbook)
    { 
      $numPage = '';
      $datas = ['pages_number' => $numPage,'id_yearbook' => $idYearbook];
      
        
      for($i = 1; $i<=60;$i++){
        $numPage = $i;
        $datas['pages_number'] = 'page'.$numPage;
        Page::getInstance()->add($datas);
      }
    }

  public function delAll()
  {
    $id_yearbook = $_SESSION['id_yearbook'];


    $sql = "DELETE  FROM `{$this->tableName}` WHERE id_yearbook = :id_yearbook";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id_yearbook', $id_yearbook);
    $sth->execute();
    return $sth->fetchAll();
  }
}