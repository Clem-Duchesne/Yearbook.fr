<?php

namespace App\Models;

//Gestion des administrateurs

class Admin extends Base {

  protected $tableName = TABLE_PREFIX . 'admin';
  protected static $instance;

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new Admin();
    }
    return self::$instance;
  }

  /**
   * Indique si les données d'authentification sont correctes.
   * @param  string $name
   * @param  string $password
   * @return boolean
   */
  function isAdmin( string $name, string $password)
  {
    $sql = "SELECT password FROM `{$this->tableName}` WHERE name=:name";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':name', $name);
    //$sth->bindValue(':password', $password );
    $sth->execute();
    $pwd = ($sth->fetch()['password']);
    
    if(Bpwd($password, $pwd))
    { 
      return true;
    }
  }

  function encrypt($password){
    $pwd = password_hash($password, PASSWORD_BCRYPT);

    return $pwd;
  }


}

