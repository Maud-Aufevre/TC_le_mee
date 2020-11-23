<?php

require_once('./models/Driver.php');
require_once('./models/Carrousel.php');
require_once('./models/ProgrammeSaison.php');

class AdminCarrouselModel extends Driver {

    public function getCarrousel($id=null) {
        if(isset($id)){

            $sql = "SELECT * FROM carrousel WHERE id_carrousel=?";
            $res = $this->getRequest($sql,[$id]);
        }else{
            $sql = "SELECT * FROM carrousel";
            $res = $this->getRequest($sql);
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $car = [];

        foreach($rows as $row) {
            $c = new Carrousel();
            $c->setId_carrousel($row->id_carrousel);
            $c->setTitre($row->titre);
            $c->setVisuel($row->visuel);
            array_push($car,$c);
        }
        return $car;
    }

    public function updateCarrousel(Carrousel $car) {
        if($car->getVisuel() == "") {
            $sql = "UPDATE carrousel SET titre=? WHERE id_carrousel=?";
            $tabCar = [$car->getTitre(),$car->getId_carrousel()];
        }else {
            $sql = "UPDATE carrousel SET titre=?,visuel=? WHERE id_carrousel=?";
            $tabCar = [$car->getTitre(),$car->getVisuel(),$car->getId_carrousel()];
        }
        $res = $this->getRequest($sql,$tabCar);
        $nb = $res->rowCount();

        return $nb;
    }

    public function getEvents($id=null) {
        if($_GET['action']=='modif_event_club' || $_GET['action']=='car_event_club'){
            if($id != ""){
                // var_dump("ok"); die;
                // $id = $_GET['id'];
                $sql = "SELECT * FROM programme_saison_club WHERE id_evenement=?";
                $res = $this->getRequest($sql,[$id]);
            }else{
                // var_dump("ko"); die;
                $sql = "SELECT * FROM programme_saison_club ORDER BY debut_affichage ASC";
                $res = $this->getRequest($sql);
            }
        }else {
            if($id != ""){
                // var_dump("shit"); die;
                $sql = "SELECT * FROM programme_saison_tennis WHERE id_evenement=?";
                $res = $this->getRequest($sql,[$id]);
            }else{
                $sql = "SELECT * FROM programme_saison_tennis ORDER BY debut_affichage ASC";
                $res = $this->getRequest($sql);
            }
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        // var_dump($rows); die;
        $donnees = [];
        
        foreach($rows as $row) {
            $event = new ProgrammeSaison();
            $event->setId_evenement($row->id_evenement);
            $event->setNom($row->nom);
            $event->setVisuel($row->visuel);
            $event->setDate_debut($row->date_debut);
            $event->setDate_fin($row->date_fin);
            $event->setContenu($row->contenu);
            $event->setContact($row->contact);
            $event->setDebut_affichage($row->debut_affichage);
            $event->setFin_affichage($row->fin_affichage);
            
            array_push($donnees,$event);
        }
        return $donnees;
    }

    public function addEvent(ProgrammeSaison $event) {
        if($_GET['action']=='car_event_club'){
            $sql = "INSERT INTO programme_saison_club(nom,visuel,date_debut,date_fin,contenu,contact,debut_affichage,fin_affichage) VALUES(?,?,?,?,?,?,?,?)";
        }else{
            $sql = "INSERT INTO programme_saison_tennis(nom,visuel,date_debut,date_fin,contenu,contact,debut_affichage,fin_affichage) VALUES(?,?,?,?,?,?,?,?)";
        }
        $res = $this->getRequest($sql,[$event->getNom(),$event->getVisuel(),$event->getDate_debut(),$event->getDate_fin(),$event->getContenu(),$event->getContact(),$event->getDebut_affichage(),$event->getFin_affichage()]);

        return $res;
    }

    public function delEvent($id) {
        if($_GET['action']=='car_event_club'){
            $sql = "DELETE FROM programme_saison_club WHERE id_evenement=?";
        }else{
            $sql = "DELETE FROM programme_saison_tennis WHERE id_evenement=?";
        }
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function updateEvent(ProgrammeSaison $event) {
        if($_GET['action']=='modif_event_club'){
            if($event->getVisuel() == "") {
                $sql = "UPDATE programme_saison_club SET nom=?,date_debut=?,date_fin=?,contenu=?,contact=?,debut_affichage=?,fin_affichage=? WHERE id_evenement=?";
                $tabEvent = [$event->getNom(),$event->getDate_debut(),$event->getDate_fin(),$event->getContenu(),$event->getContact(),$event->getDebut_affichage(),$event->getFin_affichage(),$event->getId_evenement()];
            }else {
                $sql = "UPDATE programme_saison_club SET nom=?,visuel=?,date_debut=?,date_fin=?,contenu=?,contact=?,debut_affichage=?,fin_affichage=? WHERE id_evenement=?";
                $tabEvent = [$event->getNom(),$event->getVisuel(),$event->getDate_debut(),$event->getDate_fin(),$event->getContenu(),$event->getContact(),$event->getDebut_affichage(),$event->getFin_affichage(),$event->getId_evenement()];
            }
        }else{
            if($event->getVisuel() == "") {
                $sql = "UPDATE programme_saison_tennis SET nom=?,date_debut=?,date_fin=?,contenu=?,contact=?,debut_affichage=?,fin_affichage=? WHERE id_evenement=?";
                $tabEvent = [$event->getNom(),$event->getDate_debut(),$event->getDate_fin(),$event->getContenu(),$event->getContact(),$event->getDebut_affichage(),$event->getFin_affichage(),$event->getId_evenement()];
            }else {
                $sql = "UPDATE programme_saison_tennis SET nom=?,visuel=?,date_debut=?,date_fin=?,contenu=?,contact=?,debut_affichage=?,fin_affichage=? WHERE id_evenement=?";
                $tabEvent = [$event->getNom(),$event->getVisuel(),$event->getDate_debut(),$event->getDate_fin(),$event->getContenu(),$event->getContact(),$event->getDebut_affichage(),$event->getFin_affichage(),$event->getId_evenement()];
            }
        }
        $res = $this->getRequest($sql,$tabEvent);
        $nb = $res->rowCount();
        
        return $nb;
    }
    
}
