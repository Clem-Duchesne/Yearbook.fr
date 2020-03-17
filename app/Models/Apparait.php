<?php

namespace App\Models;

class Apparait extends Base {

    protected $tableName = TABLE_PREFIX . 'apparait';
    protected static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Apparait();
        }
        return self::$instance;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `{$this->tableName}` ORDER BY 'name'";
        return self::$dbh->query($sql)->fetchAll();
    }

    public function addAll($personnes, $idImage){
        $nbPersonnes = count($personnes);
        $personnes = array_values($personnes);
        for($i = 0; $i < $nbPersonnes; $i++){
            $personne['id_photo'] = $idImage['last_insert_id()'];
            $idPersonne = explode("!",$personnes[$i]);
            $personne['id_personne'] = $idPersonne[0];
            $personne['type'] = $idPersonne[1];
            $this->add($personne);
        }
    }
}
