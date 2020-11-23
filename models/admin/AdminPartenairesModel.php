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
            $part->setSite_web($row->site_web);
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
            $part->setSite_web($row->site_web);
            array_push($donnees,$part);
        }
        return $donnees;
    }

    public function addPart(Partenaires $part) {
        $sql = "INSERT INTO partenaires(nom,logo,description,site_web) VALUES(:nom,:logo,:description,:site_web)";
        $res = $this->getRequest($sql, ['nom'=>$part->getNom(),'logo'=>$part->getLogo(),'description'=>$part->getDescription(),'site_web'=>$part->getSite_web()]);

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
            $sql = "UPDATE partenaires SET nom=?,description=?,site_web=? WHERE id_partenaire=?";

            $tabPart = [$part->getNom(),$part->getDescription(),$part->getSite_web(),$part->getId_partenaire()];
        }else{
            $sql = "UPDATE partenaires SET nom=?,logo=?,description=?,site_web=? WHERE id_partenaire=?";

            $tabPart = [$part->getNom(),$part->getLogo(),$part->getDescription(),$part->getSite_web(),$part->getId_partenaire()];
        }
        $res = $this->getRequest($sql,$tabPart);
        $nb = $res->rowCount();
        
        return $nb;
    }
}