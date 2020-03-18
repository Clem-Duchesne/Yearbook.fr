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

  public function init($idYearbook)
    { 
      $numPage = '';
      $datas = ['pages_number' => $numPage,'yearbook_id' => $idYearbook];
      
        
      for($i = 1; $i<=60;$i++){
        $numPage = $i;
        $datas['pages_number'] = 'page'.$numPage;
        $this->add($datas);
      }
    }
}