<?php

namespace App\Models;

class Fond extends Base {

  protected $tableName = TABLE_PREFIX . 'fond';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
        self::$instance = new Fond();
    }
    return self::$instance;
  }

  public function getMini()
  {
    $id_yearbook = $_SESSION['id_yearbook'];
    $sql = "SELECT id, illustration_mini FROM `{$this->tableName}` WHERE id_yearbook = :id_yearbook ORDER BY id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id_yearbook', $id_yearbook);
    $sth->execute();
    return $sth->fetchAll();
  }

  public function getOneMini($id)
  {
    $sql = "SELECT id, illustration_mini FROM `{$this->tableName}` WHERE id = :id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->execute();
    return $sth->fetch();
  }

  public function getOneLarg($id)
  {
    $sql = "SELECT id, illustration_larg FROM `{$this->tableName}` WHERE id = :id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->execute();
    return $sth->fetch();
  }

  public function addWhitImage($datas)
  {
    $time_start = microtime_float();

    $source = $_FILES['illustration']['tmp_name'];

    // nom du fichier de destination
    $filename = $_FILES['illustration']['name'];
    // nom et exention du fichier de destination
    $pathparts = pathinfo($filename); 
    // nom de la version mini

    $filename_larg = $pathparts['filename']."_LARGE_".$time_start.".".$pathparts['extension'];
    $datas['illustration_larg']=$filename_larg;
    // destination large
    $dest_larg = ASSETS_APP_PATH . "img/fond/large/$filename_larg";

    // deplacement
    move_uploaded_file( $source, $dest_larg );


    $filename_mini = $pathparts['filename']."_MINI_".$time_start.".".$pathparts['extension'];
    $datas['illustration_mini']=$filename_mini;
    // destination mini
    $dest_mini = ASSETS_APP_PATH . "img/fond/mini/$filename_mini" ;
    // deplacement
    copy( $dest_larg, $dest_mini );
    // redimensionnement de l'image
    redimensionner_image($dest_mini, 480);
    // nom de la version reel
    

    
    $datas['id_yearbook'] = $_SESSION['id_yearbook'];
    $this->add($datas);
  }

  public function getId($fond){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE illustration_mini = :fond";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':fond', $fond);
    $sth->execute();
    return $sth->fetch();
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
