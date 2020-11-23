<?php

require_once('./models/Adhesions.php');
require_once('./models/Driver.php');

class AdminAdhesionsModel extends Driver {
    
    public function getAdhesions($id = null) {
        if($id!=null){
            $sql = "SELECT * FROM adhesions WHERE id_adhesion=?";
            $res = $this->getRequest($sql,[$id]);
        }else{
            $sql = "SELECT * FROM adhesions";
            $res = $this->getRequest($sql);
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row) {
            $adh = new Adhesions();

            $adh->setId_adhesion($row->id_adhesion);
            $adh->setNom($row->nom);
            $adh->setProgramme($row->programme);
            $adh->setPrix($row->prix);
            array_push($donnees,$adh);
        }
        return $donnees;
    }

    public function addAdhesion(Adhesions $adh) {
        $sql = "INSERT INTO adhesions(nom,programme,prix) VALUES(:nom,:programme,:prix)";

        $res = $this->getRequest($sql, ['nom'=>$adh->getNom(),'programme'=>$adh->getProgramme(),'prix'=>$adh->getPrix()]);

        return $adh;
    }

    public function delAdhesion($id) {
        $sql = "DELETE FROM adhesions WHERE id_adhesion=?";
        $res = $this->getRequest($sql, [$id]);
        $nb = $res->rowCount();

        return $nb;
    }

    public function updateAdhesion(Adhesions $adh) {
        $sql = "UPDATE adhesions SET nom=?,programme=?,prix=? WHERE id_adhesion=?";

        $tabAdh = [$adh->getNom(),$adh->getProgramme(),$adh->getPrix(),$adh->getId_adhesion($id)];

        $res = $this->getRequest($sql,$tabAdh);
        $nb = $res->rowCount();

        return $nb;
    }
}