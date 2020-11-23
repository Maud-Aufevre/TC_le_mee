<?php

require_once('./models/Driver.php');
require_once('./models/Joueurs.php');
require_once('./models/Classements.php');
require_once('./models/Equipes.php');

class AdminJoueursModel extends Driver {
    public function age($date_naissance) {
        $age = date('Y') - date('Y',strtotime($date_naissance)); 
        if (date('md') < date('md', strtotime($date_naissance))) { 
            return $age - 1; 
        }else{
            return $age; 
        }
    }

    public function getJoueurs() {
        $sql = "SELECT * FROM joueurs ORDER BY id_classement";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);


        $donneesH = [];
        $donneesF = [];

        foreach($rows as $row){
            $jou = new Joueurs();
            $jou->setId_joueur($row->id_joueur);
            $jou->setSexe($row->sexe);
            $jou->setNom($row->nom);
            $jou->setPrenom($row->prenom);
            $jou->setDate_naissance($row->date_naissance);
            $jou->setId_classement($row->id_classement);
            $jou->classement = $this->getClass($row->id_classement)->getClassement();
            $jou->age = $this->age($row->date_naissance);
            if($jou->setSexe($row->sexe) == "0"){
                array_push($donneesH,$jou);
            }else{
                array_push($donneesF,$jou);
            }
            $donnees = $donneesH + $donneesF;
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
            $jou->setSexe($row->sexe);
            $jou->setNom($row->nom);
            $jou->setPrenom($row->prenom);
            $jou->setDate_naissance($row->date_naissance);
            $jou->setId_classement($row->id_classement);
            $jou->classement = $this->getClass($row->id_classement)->getClassement();
            array_push($donnees,$jou);

        }
        return $donnees;
    }

    public function getClassements() {
        $sql = "SELECT * FROM classements";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $nb = $res->rowCount();

        $classements = [];

        if($nb) {
            foreach($rows as $row){
                $class = new Classements();
                $class->setId_classement($row->id_classement);
                $class->setClassement($row->classement);
                
                array_push($classements,$class);
            }
        }
        return $classements;
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
        $sql = "INSERT INTO joueurs(sexe,nom,prenom,date_naissance,id_classement) VALUES(:sexe,:nom,:prenom,:date_naissance,:id_classement)";
        $res = $this->getRequest($sql, ['sexe'=>$jou->getSexe(),'nom'=>$jou->getNom(),'prenom'=>$jou->getPrenom(),'date_naissance'=>$jou->getDate_naissance(),'id_classement'=>$jou->getId_classement()]);

        return $res;
    }

    public function delJoueur($id) {
        $sql = "DELETE FROM joueurs WHERE id_joueur=?";
        $res = $this->getRequest($sql, [$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function updateJoueur(Joueurs $jou) {
        $sql = "UPDATE joueurs SET sexe=?,nom=?,prenom=?,date_naissance=?,id_classement=?WHERE id_joueur=?";
        $tabJoueur = [$jou->getSexe(),$jou->getNom(),$jou->getPrenom(),$jou->getDate_naissance(),$jou->getId_classement(),$jou->getId_joueur()];
        
        $res = $this->getRequest($sql,$tabJoueur);
        $nb = $res->rowCount();

        return $nb;
    }


    // EQUIPES

    public function getEq($id=null) {
        if($id == ""){
            $sql = "SELECT * FROM equipe";
            $res = $this->getRequest($sql);
        } else {
            $sql = "SELECT * FROM equipe WHERE id_equipe=?";
            $res = $this->getRequest($sql, [$id]);
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donneesJ = [];
        $donneesA = [];

        foreach($rows as $row) {
            $eq = new Equipes();
            $eq->setId_equipe($row->id_equipe);
            $eq->setNom($row->nom);
            $eq->setSexe($row->sexe);
            $eq->setCategorie($row->categorie);
            for($i=1;$i<=2;$i++){
                $eq->{"setId_joueur".$i}($row->{"id_joueur".$i});
                $eq->{"nom".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->getNom();
                $eq->{"prenom".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->getPrenom();
                $eq->{"classement".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->classement;
                $eq->{"date_naissance".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->getDate_naissance();
            }

            for($i=3;$i<=5;$i++){
                $eq->{"setId_joueur".$i}($row->{"id_joueur".$i});
                $id_j = $row->{"id_joueur".$i};
                if($id_j != 0){
                    $eq->{"nom".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->getNom();
                    $eq->{"prenom".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->getPrenom();
                    $eq->{"classement".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->classement;
                    $eq->{"date_naissance".$i} = $this->getJoueur($row->{"id_joueur".$i})[0]->getDate_naissance();
                }
            }

            if($eq->getCategorie()=='senior' || $eq->getCategorie()=='+35' || $eq->getCategorie()=='+45' || $eq->getCategorie()=='+55') {
                array_push($donneesA,$eq);
            }else{
                array_push($donneesJ,$eq);
            }
        }
        if($_GET['action'] == 'comp_jeunes' || $_GET['action'] == 'modif_eq_jeunes'){
            return $donneesJ;
        }else{
            return $donneesA;
        }
    }

    public function addEquipe(Equipes $eq) {
        $sql = "INSERT INTO equipe(nom,sexe,categorie,id_joueur1,id_joueur2,id_joueur3,id_joueur4,id_joueur5) VALUES(:nom,:sexe,:categorie,:id_joueur1,:id_joueur2,:id_joueur3,:id_joueur4,:id_joueur5)";
        $res = $this->getRequest($sql, ['nom'=>$eq->getNom(),'sexe'=>$eq->getSexe(),'categorie'=>$eq->getCategorie(),'id_joueur1'=>$eq->getId_joueur1(),'id_joueur2'=>$eq->getId_joueur2(),'id_joueur3'=>$eq->getId_joueur3(),'id_joueur4'=>$eq->getId_joueur4(),'id_joueur5'=>$eq->getId_joueur5()]);

        return $res;
    }

    public function delEquipe($id) {
        $sql = "DELETE FROM equipe WHERE id_equipe=?";
        $res = $this->getRequest($sql, [$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function updateEquipe(Equipes $eq) {
            $sql = "UPDATE equipe SET nom=?,sexe=?,categorie=?,id_joueur1=?,id_joueur2=?,id_joueur3=?,id_joueur4=?,id_joueur5=? WHERE id_equipe=?";
            $tabEquipe = [$eq->getNom(),$eq->getSexe(),$eq->getCategorie(),$eq->getId_joueur1(),$eq->getId_joueur2(),$eq->getId_joueur3(),$eq->getId_joueur4(),$eq->getId_joueur5(),$eq->getId_equipe()];
        
        $res = $this->getRequest($sql,$tabEquipe);
        $nb = $res->rowCount();

        return $nb;
    }
}