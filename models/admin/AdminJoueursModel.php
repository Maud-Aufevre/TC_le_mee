<?php

require_once('./models/Driver.php');
require_once('./models/Joueurs.php');
require_once('./models/Classements.php');

class AdminJoueursModel extends Driver {

    public function getJoueurs() {
        $sql = "SELECT * FROM joueurs";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row){
            $jou = new Joueurs();
            $jou->setId_joueur($row->id_joueur);
            $jou->setNom($row->nom);
            $jou->setPrenom($row->prenom);
            $jou->setDate_naissance($row->date_naissance);
            $jou->setPhoto($row->photo);
            $jou->setId_classement($row->id_classement);
            $jou->classement = $this->getClass($row->id_classement)->getClassement();
            array_push($donnees,$jou);
        }
        return $donnees;
    }

    public function getJoueur($id) {
        $sql = "SELECT * FROM joueurs WHERE id_joueur=?";
        $res = $this->getRequest($sql, [$id]);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row){
            $jou = new Joueurs();
            $jou->setId_joueur($row->id_joueur);
            $jou->setNom($row->nom);
            $jou->setPrenom($row->prenom);
            $jou->setDate_naissance($row->date_naissance);
            $jou->setPhoto($row->photo);
            $jou->setId_classement($row->id_classement);
            $jou->id_classement = $this->getClass($row->id_classement)->getClassement();
            array_push($donnees,$jou);
        }
        return $donnees;
    }

    public function getClass($id_class) {
        $sql = "SELECT * FROM classements WHERE id_classement=?";
        $res = $this->getRequest($sql, [$id_class]);
        $data = $res->fetch(PDO::FETCH_OBJ);

        $class = new Classements();
        if($res->rowCount()) {
            $class->setId_classement($data->id_classement);
            $class->setClassement($data->classement);
        }
        return $class;
    }

    public function addJoueur(Joueurs $jou) {
        $sql = "INSERT INTO joueurs(nom,prenom,date_naissance,photo,id_classement) VALUES(:nom,:prenom,:date_naissance,:photo,:id_classement)";
        $res = $this->getRequest($sql, ['nom'=>$jou->getNom(),'prenom'=>$jou->getPrenom(),'date_naissance'=>$jou->getDate_naissance(),'photo'=>$jou->getPhoto(),'id_classement'=>$jou->getId_classement()]);

        return $res;
    }
}