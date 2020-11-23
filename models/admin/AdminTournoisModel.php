<?php

require_once('./models/Driver.php');
require_once('./models/Tournois.php');

class AdminTournoisModel extends Driver {

    public function getTournois($id = null) {
        if($id != null) {
                $sql = "SELECT *, DATE_FORMAT(date_debut, '%d %M %Y') AS dateDebutFormatee FROM tournois WHERE id_tournoi=? ORDER BY date_debut ASC";
                $res = $this->getRequest($sql, [$id]);
            }else {
                $sql = "SELECT *, DATE_FORMAT(date_debut, '%d %M %Y') AS dateDebutFormatee FROM tournois ORDER BY date_debut ASC";
                $res = $this->getRequest($sql);
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row) {
            $tou = new Tournois();

            $tou->setId_tournoi($row->id_tournoi);
            $tou->setNom($row->nom);
            $tou->setDate_debut($row->date_debut);
            $tou->setDate_fin($row->date_fin);
            $tou->setDisciplines($row->disciplines);
            $tou->setClassements($row->classements);
            $tou->setTarif_adultes($row->tarif_adultes);
            $tou->setTarif_jeunes($row->tarif_jeunes);
            $tou->setJuge_arbitre($row->juge_arbitre);
            $tou->setPrix_vainqueurs($row->prix_vainqueurs);
            $tou->setFinalistes($row->prix_finalistes);
            $tou->setPrix_demi_fin($row->prix_demi_fin);
            $tou->setNum_homologation($row->num_homologation);
            $tou->setContact($row->contact);
            array_push($donnees,$tou);
        }
        return $donnees;
    }

    public function addTournoi(Tournois $tou) {
        $sql = "INSERT INTO tournois(nom,date_debut,date_fin,disciplines,classements,tarif_adultes,tarif_jeunes,juge_arbitre,prix_vainqueurs,prix_finalistes,prix_demi_fin,num_homologation,contact) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $res = $this->getRequest($sql,[$tou->getNom(),$tou->getDate_debut(),$tou->getDate_fin(),$tou->getDisciplines(),$tou->getClassements(),$tou->getTarif_adultes(),$tou->getTarif_jeunes(),$tou->getJuge_arbitre(),$tou->getPrix_vainqueurs(),$tou->getFinalistes(),$tou->getPrix_demi_fin(),$tou->getNum_homologation(),$tou->getContact()]);

        return $res;
    }

    public function delTournoi($id) {
        $sql = "DELETE FROM tournois WHERE id_tournoi=?";
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();

        return $nb;
    }

    public function updateTournoi(Tournois $tou) {
        $sql = "UPDATE tournois SET nom=?,date_debut=?,date_fin=?,disciplines=?,classements=?,tarif_adultes=?,tarif_jeunes=?,juge_arbitre=?,prix_vainqueurs=?,prix_finalistes=?,prix_demi_fin=?,num_homologation=?,contact=? WHERE id_tournoi=?";

        $tabTournoi = [$tou->getNom(),$tou->getDate_debut(),$tou->getDate_fin(),$tou->getDisciplines(),$tou->getClassements(),$tou->getTarif_adultes(),$tou->getTarif_jeunes(),$tou->getJuge_arbitre(),$tou->getPrix_vainqueurs(),$tou->getFinalistes(),$tou->getPrix_demi_fin(),$tou->getNum_homologation(),$tou->getContact(),$tou->getId_tournoi()];

        $res = $this->getRequest($sql,$tabTournoi);
        $nb = $res->rowCount();

        return $nb;
    }
}