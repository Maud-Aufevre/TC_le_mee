<?php

require_once('./models/admin/AdminBureauModel.php');

class AdminBureauController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminBureauModel();

    }

    public function listMembres() {
        AuthController::islogged();

        $datas = $this->driver->getBureau();
        require_once('./views/admin/membresBureau.php');
    }

    public function insertMembre() {
        AuthController::islogged();

// var_dump($_POST); die;
        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['fonction']) || empty($_FILES['photo'])) {
                $error = "Vous devez remplir tous les champs";
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $fonction = trim(htmlentities(addslashes($_POST['fonction'])));
                $photo = $_FILES['photo']['name'];
                $destination = './assets/images/bureau/';
                move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$photo);

                $new = new Bureau();
                $new->setNom($nom);
                $new->setPrenom($prenom);
                $new->setFonction($fonction);
                $new->setPhoto($photo);
                $res = $this->driver->addMembre($new);

                if($res){
                    header('location:index.php?action=cl_bureau');
                }else{
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        require_once('./views/admin/formInsertMembre.php');
    }

    public function removeMembre() {
        AuthController::islogged();

        // var_dump($_GET); die;
        if(isset($_GET['photo']) && isset($_GET['id'])){
            $photo = $_GET['photo'];
            $id = (int)$_GET['id'];
            $nb = $this->driver->delMembre($id);
            if($nb){
                $fichier = './assets/images/bureau/'.$photo;
                unlink($fichier);
                header('location:index.php?action=cl_bureau');
            }
        }
    }

    public function ModifMembre() {
        AuthController::islogged();

        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $data = $this->driver->getMembre($id);
            if(isset($_POST['modif']) && !empty($_POST['nom'])){
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $fonction = trim(htmlentities(addslashes($_POST['fonction'])));
                $discours = trim(htmlentities(addslashes($_POST['discours'])));
                $photo = $_FILES['photo']['name'];
                $destination = './assets/images/bureau/';
                move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$photo);

                $data[0]->setNom($nom);
                $data[0]->setPrenom($prenom);
                $data[0]->setFonction($fonction);
                $data[0]->setDiscours($discours);
                $data[0]->setPhoto($photo);

                $nb = $this->driver->updateMembre($data[0]);
                if(isset($nb)) {
                    header('location:index.php?action=cl_bureau');
                }else{
                    echo "Echec lors de la mise à jour";
                }
            }
            require_once('./views/admin/formUpdateMembre.php');
        }
    }


}