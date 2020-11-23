<?php

require_once('./models/admin/AdminAdhesionsModel.php');

class AdminAdhesionsController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminAdhesionsModel();
    }

    public function listAdhesions() {
        AuthController::islogged();

        $datas = $this->driver->getAdhesions();
        require_once('./views/admin/adhesions.php');
    }

    public function insertAdhesion() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['prog']) || empty($_POST['prix'])) {
                // var_dump($_POST); die;
                $error = "Vous devez remplir tous les champs";
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $programme = trim(htmlentities(addslashes($_POST['prog'])));
                $prix = trim(htmlentities(addslashes($_POST['prix'])));

                $new = new Adhesions();
                $new->setNom($nom);
                $new->setProgramme($programme);
                $new->setPrix($prix);
                $res = $this->driver->addAdhesion($new);

                if($res){
                    header('location:index.php?action=adhesions');
                }else{
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        require_once('./views/admin/formInsertAdh.php');
    }

    public function removeAdhesion() {
        AuthController::islogged();

        if(isset($_GET['action'])) {
            $id = $_GET['id'];
            $nb = $this->driver->delAdhesion($id);
            if($nb) {
                header('location:index.php?action=adhesions');
            }
        }
    }

    public function modifAdhesion() {
        AuthController::islogged();
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->driver->getAdhesions($id);

            if(isset($_POST['modif']) && !empty($_POST['nom']) && !empty($_POST['prog']) && !empty($_POST['prix'])) {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $programme = trim(htmlentities(addslashes($_POST['prog'])));
                $prix = trim(htmlentities(addslashes($_POST['prix'])));

                $data[0]->setNom($nom);
                $data[0]->setProgramme($programme);
                $data[0]->setPrix($prix);

                $nb = $this->driver->updateAdhesion($data[0]);
                if(isset($nb)) {
                    header('location:index.php?action=adhesions');
                }else{
                    echo "Echec lors de la mise à jour";
                }
            }
            require_once('./views/admin/formUpdateAdh.php');
        }
    }
}