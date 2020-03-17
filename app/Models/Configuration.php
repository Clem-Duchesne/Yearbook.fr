<?php

namespace App\Models;

//Gestion des administrateurs

class Configuration extends Base {

  protected $tableEleve = TABLE_PREFIX . 'etudiant';
  protected $tableEquipe = TABLE_PREFIX . 'equipedepartement';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Configuration();
    }
    return self::$instance;
  }
 public function getAllEleve() 
  {
    $sql = "SELECT * FROM `{$this->tableEleve}` ORDER BY 'id' DESC";
    //r($sql);die();
   return self::$dbh->query($sql)->fetchAll();
  }
  public function getAllEquipe() 
  {
    $sql = "SELECT * FROM `{$this->tableEquipe}` ORDER BY 'id' DESC";
    //r($sql);die();
   return self::$dbh->query($sql)->fetchAll();
  }
 
}

