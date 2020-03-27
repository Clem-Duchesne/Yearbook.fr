<?php

namespace App\Models;
class Image extends Base {

  protected $tableName = TABLE_PREFIX . 'image';
  protected $etudiant = TABLE_PREFIX . 'etudiant';
  protected $equipedepartement = TABLE_PREFIX . 'equipedepartement';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
        self::$instance = new Image();
    }
    return self::$instance;
  }

  public function getAll()
  {
    $sql = "SELECT * FROM `{$this->tableName}` i
            LEFT JOIN `{$this->etudiant}` et  ON i.id_etudiant= et.id
            LEFT JOIN `{$this->equipedepartement}` eq  ON i.id_equipedepartement= eq.id
            ORDER BY i.id";
    $sth = self::$dbh->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
  }

  public function getMini()
  {
    $id_yearbook = $_SESSION['id_yearbook'];
    $sql = "SELECT id, image_mini FROM `{$this->tableName}` WHERE id_yearbook = :id_yearbook ORDER BY id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id_yearbook', $id_yearbook);
    $sth->execute();
    return $sth->fetchAll();
  }

  public function getLastInsertId(){
    $sql = "SELECT last_insert_id()";
    return self::$dbh->query($sql)->fetch();
  }

  public function addWithImage()
  {
    $time_start = microtime_float();

    $source = $_FILES['illustration']['tmp_name'];

    // nom du fichier de destination
    $filename = $_FILES['illustration']['name'];
    // nom et exention du fichier de destination

    $pathparts = pathinfo($filename); 
    // nom de la version mini


    $filename_larg = $pathparts['filename']."_LARGE_". $time_start . "." . $pathparts['extension'];
    $image_name['image_larg']=$filename_larg;
    // destination large
    $dest_larg = ASSETS_APP_PATH . "img/photo/large/$filename_larg";

    // deplacement
    move_uploaded_file( $source, $dest_larg );


    $filename_mini = $pathparts['filename'] . "_MINI_" . $time_start . "." . $pathparts['extension'];
    $image_name['image_mini']=$filename_mini;
    // destination mini
    $dest_mini = ASSETS_APP_PATH . "img/photo/mini/$filename_mini" ;
    // deplacement
    copy( $dest_larg, $dest_mini );
    // redimensionnement de l'image
    redimensionner_image($dest_mini, 480);
    // nom de la version reel
    $image_name['id_yearbook'] = $_SESSION['id_yearbook'];
    $this->add($image_name);
  }

  public function getId($img){
    $sql = "SELECT id FROM `{$this->tableName}` WHERE image_mini = :img";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':img', $img);
    $sth->execute();
    return $sth->fetch();
  }


}
