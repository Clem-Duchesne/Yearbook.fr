<?php

namespace App\Models;

class Police extends Base {

  protected $tableName = TABLE_PREFIX . 'police';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Police();
    }
    return self::$instance;
  }

  public function getAll()
  {
    $sql = "SELECT * FROM `{$this->tableName}` ORDER BY fontname";
    return self::$dbh->query($sql)->fetchAll();
  }
  public function addPolice()
  {

    $time_start = microtime_float();

    $source = $_FILES['file']['tmp_name'];

    // nom du fichier de destination
    $filename = $_FILES['file']['name'];
    // nom et exention du fichier de destination

    $pathparts = pathinfo($filename); 

    // destination large
    $dest = ASSETS_APP_PATH . "font/$filename";

    // deplacement
    move_uploaded_file( $source, $dest );
    $_POST['file'] = $_FILES['file']['name'];
    $this->add($_POST);
  }

}
