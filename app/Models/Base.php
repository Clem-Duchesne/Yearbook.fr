<?php
//
// Fichier: app\Models\Base.php
//

namespace App\Models;

/**
 * Classe de base pour le CRUD sur les données.
 * Contient les 6 méthodes :
 *   - exists( $id )
 *   - add( $datas )
 *   - get( $id )
 *   - getAll()
 *   - update( $id, $datas )
 *   - delete( $id )
 */
class Base
{

  protected $tableName;
  // instance de la classe
  protected static $dbh;

  public function __construct()
  {
    if (!self::$dbh) {
      try {
        self::$dbh = new \PDO(
          'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8',
          DB_USER,
          DB_PASSWORD,
          [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
          ]
        );
      } catch (Exception $e) {
        trigger_error('Impossible de se connecter à la base', E_USER_ERROR);
      }
    }
  }

  /**
   * Indique si l'identifiant existe déjà dans la base.
   * @param  integer  $id identifiant à tester.
   * @return boolean
   */
  public function exists($id)
  {
    $sql = "SELECT COUNT(*) AS c FROM `{$this->tableName}` WHERE id = :id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->execute();
    return ($sth->fetch()['c'] > 0);
  }

  /**
   * Ajoute les nouvelles informations.
   * @param  array  $datas 	données à ajouter.
   * @return integer
   */
  public function add($datas)
  {
      $sql = "INSERT INTO   `{$this->tableName}`  ( ";
      foreach (array_keys($datas) as $k) {
          $sql .= " {$k} ,";
      }
      $sql = substr($sql, 0, strlen($sql) - 1) . " ) VALUE (";
      foreach (array_keys($datas) as $k) {
          $sql .= " :{$k} ,";
      }
      $sql = substr($sql, 0, strlen($sql) - 1) . " )";
      $sth = self::$dbh->prepare($sql);
      foreach (array_keys($datas) as $k) {
          $sth->bindValue(':' . $k, $datas[$k]);
      }
      
    $sth->execute();
    return self::$dbh->lastInsertId();
  }

  /**
   * Édite les  informations d'un identifiant.
   * @param  integer  $id 		identifiant à modifier.
   * @param  integer  $datas  tableau associatif des données.
   * @return integer
   */
  public function update($id, $datas)
  {
    $sql = "UPDATE  `{$this->tableName}` SET ";
    foreach (array_keys($datas) as $k) {
      $sql .= " {$k} = :{$k} ,";
    }
    $sql = substr($sql, 0, strlen($sql) - 1);
    $sql .= " WHERE id =:id";
    $sth = self::$dbh->prepare($sql);
    foreach (array_keys($datas) as $k) {
      $sth->bindValue(':' . $k, $datas[$k]);
    }
    $sth->bindValue(':id', $id);
    return $sth->execute();
  }

  /**
   * Retourne les informations d'un identifiant.
   * @param  integer  $id identifiant
   * @return array
   */
  public function get($id)
  {
    $sql = "SELECT * FROM `{$this->tableName}` WHERE id = :id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->execute();
    return $sth->fetch();
  }

  /**
   * Retourne toutes les informations.
   * @return array
   */
  public function getAll()
  {
    $sql = "SELECT * FROM `{$this->tableName}`";
    return self::$dbh->query($sql)->fetchAll();
  }

  /**
   * Efface l'identifiant.
   * @param  integer  $id identifiant
   * @return int|boolean
   */
  public function delete($id)
  {
    $sql = "DELETE FROM `{$this->tableName}` WHERE id = :id";
    $sth = self::$dbh->prepare($sql);
    $sth->bindValue(':id', $id);
    return $sth->execute();
  }
}
