<?php

require_once('./models/admin/AdminCarrouselModel.php');

class AdminCarrouselController {

    private $driver;

    public function __construct() {
        $this->driver = new AdminCarrouselModel();
    }

    public function listCarrousel() {
        AuthController::islogged();

        $datas = $this->driver->getCarrousel();
        
    }
    
    public function carrousel() {
        AuthController::islogged();
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->driver->getCarrousel($id);

            if($_GET['action']=='car_event_club' || $_GET['action']=='car_event_tennis') {
                $datas = $this->driver->getEvents();
                // var_dump($datas); die;
                if($datas!=""){
                    foreach($datas as $d){
                        // var_dump(date('Y-m-d'));
                        // var_dump($d->getDebut_affichage()); die;
                        if(date('Y-m-d')<=$d->getFin_affichage() && date('Y-m-d')>=$d->getDebut_affichage()) {
                            $id_now = $d->getId_evenement();
                            $now = $this->driver->getEvents($id_now);
                        }
                    }
                }
            }
            require_once('./views/admin/carrousel.php');
        }
    }

    public function modifCarrousel() {
        AuthController::islogged();

        if(isset($_GET['id']) && isset($_GET['visuel'])) {
            $id = $_GET['id'];
            $getVisuel = $_GET['visuel'];
            $data = $this->driver->getCarrousel($id);
// var_dump($data); die;
            if(isset($_POST['modif'])) {
                $titre = trim(htmlentities(addslashes($_POST['titre'])));
                $visuel = $_FILES['visuel']['name'];

                $destination = './assets/images/carrousel/';
                move_uploaded_file($_FILES['visuel']['tmp_name'],$destination.$visuel);

                $data[0]->setTitre($titre);
                $data[0]->setVisuel($visuel);

                $nb = $this->driver->updateCarrousel($data[0]);

                if($nb) {
                    if($visuel!="" && $getVisuel!=$visuel){
                        // var_dump('ok'); die;
                        $fichier = './assets/images/carrousel/'.$getVisuel;
                        unlink($fichier);
                    }
                    if($_GET['action']=='modif_car_event_club'){
                        header('location:index.php?action=car_event_club&id=1');
                    }else if($_GET['action']=='modif_car_event_tennis'){
                        header('location:index.php?action=car_event_tennis&id=2');
                    }else if($_GET['action']=='modif_car_car_ecole'){
                        header('location:index.php?action=car_ecole&id=3');
                    }else if($_GET['action']=='modif_car_resa'){
                        header('location:index.php?action=car_resa&id=4');
                    }else{
                        header('location:index.php?action=car_actus&id=5');
                    }
                }else {
                    echo "Echec lors de la mise à jour";
                }
            }
            require_once('./views/admin/formUpdateCarrousel.php');
        }
    }

    public function insertEvent() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['contenu']) || empty($_POST['contact']) || empty($_FILES['visuel'])) {
                $error = "Vous devez remplir tous les champs";
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $visuel = $_FILES['visuel']['name'];
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $contenu = trim(htmlentities(addslashes($_POST['contenu'])));
                $contact = trim(htmlentities(addslashes($_POST['contact'])));
                $debut_affichage = $_POST['debut_affichage'];
                $fin_affichage = $_POST['fin_affichage'];
                if($_GET['action']=='modif_car_event_club'){
                    $destination = './assets/images/events_club/';
                }else{
                    $destination = './assets/images/events_tennis/'; 
                }
                move_uploaded_file($_FILES['visuel']['tmp_name'],$destination.$visuel);

                $new = new ProgrammeSaison();
                $new->setNom($nom);
                $new->setVisuel($visuel);
                $new->setDate_debut($date_debut);
                $new->setDate_fin($date_fin);
                $new->setContenu($contenu);
                $new->setContact($contact);
                $new->setDebut_affichage($debut_affichage);
                $new->setFin_affichage($fin_affichage);
                $res = $this->driver->addEvent($new);

                if($res) {
                    if($_GET['action']=='modif_event_club'){
                        header('location:index.php?action=car_event_club&id=1');
                    }else{
                        header('location:index.php?action=car_event_tennis&id=2');
                    }
                }else {
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        require_once('./views/admin/formInsertEvent.php');
    }

    public function removeEvent() {
        AuthController::islogged();

        if(isset($_GET['id']) && isset($_GET['visuel'])) {
            $id = $_GET['id'];
            $visuel = $_GET['visuel'];
            $nb = $this->driver->delEvent($id);

            if($nb) {
                $fichier = './assets/images/events_club/'.$visuel;
                unlink($fichier);
                header('location:index.php?action=car_event_club&id=1');
            }
        }
    }

    public function modifEvent() {
        AuthController::islogged();
        
        if(isset($_GET['id']) && isset($_GET['visuel'])) {
            $id = $_GET['id'];
            // var_dump($id); die;
            $getVisuel = $_GET['visuel'];
            $data = $this->driver->getEvents($id);

            if(isset($_POST['modif'])) {
                // var_dump($_FILES); die;
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $visuel = $_FILES['visuel']['name'];
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $contenu = trim(htmlentities(addslashes($_POST['contenu'])));
                $contact = trim(htmlentities(addslashes($_POST['contact'])));
                $debut_affichage = $_POST['debut_affichage'];
                $fin_affichage = $_POST['fin_affichage'];

                if($_GET['action']=='modif_event_club'){
                    $destination = './assets/images/events_club/';
                }else{
                    $destination = './assets/images/events_tennis/'; 
                }
                move_uploaded_file($_FILES['visuel']['tmp_name'],$destination.$visuel);

                $data[0]->setNom($nom);
                $data[0]->setVisuel($visuel);
                $data[0]->setDate_debut($date_debut);
                $data[0]->setDate_fin($date_fin);
                $data[0]->setContenu($contenu);
                $data[0]->setContact($contact);
                $data[0]->setDebut_affichage($debut_affichage);
                $data[0]->setFin_affichage($fin_affichage);
                $res = $this->driver->updateEvent($data[0]);

                if($res) {
                    if($visuel!="" && $getVisuel!=$visuel){
                        $fichier = './assets/images/events_club/'.$getVisuel;
                        unlink($fichier);
                    }
                    if($_GET['action']=='modif_event_club'){
                        header('location:index.php?action=car_event_club&id=1');
                    }else{
                        header('location:index.php?action=car_event_tennis&id=2');
                    }
                }else {
                    echo "Echec lors de la mise à jour";
                }
            }
        }
        require_once('./views/admin/formUpdateEvent.php');
    }

}