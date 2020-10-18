<?php

require_once('./models/Partenaires.php');
require_once('./models/Driver.php');

class AdminPartenairesModel extends Driver {


    public function getPart() {
        $sql = "SELECT * FROM partenaires";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row) {
            $part = new Partenaires();

            $part->setId_partenaire($row->id_partenaire);
            $part->setNom($row->nom);
            $part->setLogo($row->logo);
            $part->setDescription($row->description);
            array_push($donnees,$part);
        }
        return $donnees;
    }
    public function getPartUnique($id) {
        $sql = "SELECT * FROM partenaires WHERE id_partenaire=?";
        $res = $this->getRequest($sql, [$id]);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row) {
            $part = new Partenaires();

            $part->setId_partenaire($row->id_partenaire);
            $part->setNom($row->nom);
            $part->setLogo($row->logo);
            $part->setDescription($row->description);
            array_push($donnees,$part);
        }
        return $donnees;
    }

    public function addPart(Partenaires $part) {
        $sql = "INSERT INTO partenaires(nom,logo,description) VALUES(:nom,:logo,:description)";
        $res = $this->getRequest($sql, ['nom'=>$part->getNom(),'logo'=>$part->getLogo(),'description'=>$part->getDescription()]);

        return $res;
    }

    public function delPart($id) {
        $sql = "DELETE FROM partenaires WHERE id_partenaire=?";
        $res = $this->getRequest($sql, [$id]);
        $nb = $res->rowCount();

        return $nb;
    }

    public function updatePart(Partenaires $part) {
        if($part->getLogo() == ""){
            $sql = "UPDATE partenaires SET nom=?,description=? WHERE id_partenaire=?";

            $tabPart = [$part->getNom(),$part->getDescription(),$part->getId_partenaire()];
        }else{
            $sql = "UPDATE partenaires SET nom=?,logo=?,description=? WHERE id_partenaire=?";

            $tabPart = [$part->getNom(),$part->getLogo(),$part->getDescription(),$part->getId_partenaire()];
        }
        $res = $this->getRequest($sql,$tabPart);
        $nb = $res->rowCount();
        
        return $nb;
    }
}