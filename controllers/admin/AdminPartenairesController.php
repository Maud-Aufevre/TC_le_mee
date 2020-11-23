<?php

require_once('./models/admin/AdminPartenairesModel.php');

class AdminPartenairesController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminPartenairesModel();
    }

    public function listPart() {
        AuthController::islogged();

        $datas = $this->driver->getPart();
        require_once('./views/admin/partenaires.php');
    }

    public function insertPart() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['description']) || empty($_FILES['logo']) || empty($_POST['site_web'])) {
                $error = "Vous devez remplir tous les champs";
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $description = trim(htmlentities(addslashes($_POST['des'])));
                $site_web = trim(htmlentities(addslashes($_POST['site_web'])));
                $logo = $_FILES['logo']['name'];
                $destination = './assets/images/partenaires/';
                move_uploaded_file($_FILES['logo']['tmp_name'],$destination.$logo);

                $new = new Partenaires();
                $new->setNom($nom);
                $new->setLogo($logo);
                $new->setDescription($description);
                $new->setSite_web($site_web);
                $res = $this->driver->addPart($new);

                if($res){
                    header('location:index.php?action=cl_part');
                }else{
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        require_once('./views/admin/formInsertPart.php');
    }

    public function removePart() {
        AuthController::islogged();

        if(isset($_GET['id']) && isset($_GET['logo'])){
            $id = $_GET['id'];
            $logo = $_GET['logo'];
            $nb = $this->driver->delPart($id);
            if($nb) {
                $fichier = './assets/images/partenaires/'.$logo;
                unlink($fichier);
                header('location:index.php?action=cl_part');
            }
        }
    }

    public function modifPart() {
        AuthController::islogged();
        
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $data = $this->driver->getPartUnique($id);

            if(isset($_POST['modif']) && !empty($_POST['nom'])) {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $description = trim(htmlentities(addslashes($_POST['des'])));
                $site_web = trim(htmlentities(addslashes($_POST['site_web'])));
                $logo = $_FILES['logo']['name'];
                $destination = './assets/images/partenaires/';
                move_uploaded_file($_FILES['logo']['tmp_name'],$destination.$logo);

                $data[0]->setNom($nom);
                $data[0]->setLogo($logo);
                $data[0]->setDescription($description);
                $data[0]->setSite_web($site_web);

                $nb = $this->driver->updatePart($data[0]);
                if(isset($nb)) {
                    header('location:index.php?action=cl_part');
                }else{
                    echo "Echec lors de la mise à jour";
                } 
            }
            require_once('./views/admin/formUpdatePart.php');
        }
    }
}