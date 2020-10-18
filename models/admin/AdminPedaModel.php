<?php

require_once('./models/Peda.php');
require_once('./models/Driver.php');

class AdminPedaModel extends Driver {

    public function getPeda() {
        $sql = "SELECT * FROM enseignants";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row){
            $ens = new Peda();
            $ens->setId_ens($row->id_ens);
            $ens->setNom($row->nom);
            $ens->setPrenom($row->prenom);
            $ens->setFonction($row->fonction);
            $ens->setPhoto($row->photo);
            $ens->setDiscours($row->discours);
            array_push($donnees,$ens);
        }
        return $donnees;
    }

    public function getEns($id) {
        $sql = "SELECT * FROM enseignants WHERE id_ens=?";
        $res = $this->getRequest($sql, [$id]);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row){
            $ens = new Peda();
            $ens->setId_ens($row->id_ens);
            $ens->setNom($row->nom);
            $ens->setPrenom($row->prenom);
            $ens->setFonction($row->fonction);
            $ens->setPhoto($row->photo);
            $ens->setDiscours($row->discours);
            array_push($donnees,$ens);
        }
        return $donnees;
    }

    public function addEns(Peda $peda) {
        $sql = "INSERT INTO enseignants(nom,prenom,fonction,photo,discours) VALUES(:nom,:prenom,:fonction,:photo,:discours)";
        $res = $this->getRequest($sql, ['nom'=>$peda->getNom(),'prenom'=>$peda->getPrenom(),'fonction'=>$peda->getFonction(),'photo'=>$peda->getPhoto(),'discours'=>$peda->getDiscours()]);

        return $res;
    }

    public function delEns($id) {
        $sql = "DELETE FROM enseignants WHERE id_ens=?";
        $res = $this->getRequest($sql, [$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function updateEns(Peda $peda) {
        if($peda->getPhoto() == "") {
            $sql = "UPDATE enseignants SET nom=?,prenom=?,fonction=?,discours=? WHERE id_ens=?";

            $tabPeda = [$peda->getNom(),$peda->getPrenom(),$peda->getFonction(),$peda->getDiscours(),$peda->getId_ens()]; 
        }else {
            $sql = "UPDATE enseignants SET nom=?,prenom=?,fonction=?,photo=?,discours=? WHERE id_ens=?";

            $tabPeda = [$peda->getNom(),$peda->getPrenom(),$peda->getFonction(),$peda->getPhoto(),$peda->getDiscours(),$peda->getId_ens()];
        }
        $res = $this->getRequest($sql,$tabPeda);
        return $res->rowCount();
    }
}