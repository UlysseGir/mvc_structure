<?php
namespace name\Models;

/** Class ExempleManager **/
class ExempleManager extends ControllerManager{

    public function getAllVoyage(){
        $stmt = $this->bdd->prepare("SELECT * FROM `destinations`");
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS,"Voyage\Models\Voyage");

        return $stmt->fetchAll();
    }

}