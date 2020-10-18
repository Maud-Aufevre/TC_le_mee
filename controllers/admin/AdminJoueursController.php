<?php

require_once('./models/admin/AdminJoueursModel.php');

class AdminJoueursController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminJoueursModel();
    }

    public function listJoueurs() {
        $datas = $this->driver->getJoueurs();
        require_once('./views/admin/joueurs.php');
    }

    public function insertJoueur() {
        if(isset($_POST['ajout'])) {
            $nom = trim(htmlentities(addslashes($_POST['nom'])));
            $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
            $date_naissance = trim(htmlentities(addslashes($_POST['date_naissance'])));
            $nom = trim(htmlentities(addslashes($_POST['nom'])));
            $nom = trim(htmlentities(addslashes($_POST['nom'])));
            $nom = trim(htmlentities(addslashes($_POST['nom'])));
        }
    }
}