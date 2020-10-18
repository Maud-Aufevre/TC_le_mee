<?php

require_once('./models/Bureau.php');
require_once('./models/Driver.php');

class AdminBureauModel extends Driver {

    public function getBureau() {
        $sql = "SELECT * FROM bureau";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row){
            $membre = new Bureau();
            $membre->setId_membre($row->id_membre);
            $membre->setNom($row->nom);
            $membre->setPrenom($row->prenom);
            $membre->setFonction($row->fonction);
            $membre->setPhoto($row->photo);
            $membre->setDiscours($row->discours);
            array_push($donnees,$membre);
        }
        return $donnees;
    }

    public function getMembre($id) {
        $sql = "SELECT * FROM bureau WHERE id_membre=?";
        $res = $this->getRequest($sql, [$id]);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row){
            $membre = new Bureau();
            $membre->setId_membre($row->id_membre);
            $membre->setNom($row->nom);
            $membre->setPrenom($row->prenom);
            $membre->setFonction($row->fonction);
            $membre->setPhoto($row->photo);
            $membre->setDiscours($row->discours);
            array_push($donnees,$membre);
        }
        return $donnees;
    }

    public function addMembre(Bureau $membre) {
        $sql = "INSERT INTO bureau(nom,prenom,fonction,photo,discours) VALUES(:nom,:prenom,:fonction,:photo,:discours)";
        $res = $this->getRequest($sql,['nom'=>$membre->getNom(),'prenom'=>$membre->getPrenom(),'fonction'=>$membre->getFonction(),'photo'=>$membre->getPhoto(),'discours'=>$membre->getDiscours()]);
        return $res;
    }

    public function delMembre($id) {
        $sql = "DELETE FROM bureau WHERE id_membre=?";
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function updateMembre(Bureau $membre) {
        if($membre->getPhoto() == "") {
            $sql = "UPDATE bureau SET nom=?,prenom=?,fonction=?,discours=? WHERE id_membre=?";

            $tabMembre = [$membre->getNom(),$membre->getPrenom(),$membre->getFonction(),$membre->getDiscours(),$membre->getId_membre()]; 
        }else {
            $sql = "UPDATE bureau SET nom=?,prenom=?,fonction=?,photo=?,discours=? WHERE id_membre=?";

            $tabMembre = [$membre->getNom(),$membre->getPrenom(),$membre->getFonction(),$membre->getPhoto(),$membre->getDiscours(),$membre->getId_membre()];
        }
        $res = $this->getRequest($sql,$tabMembre);
        return $res->rowCount();
    }

}