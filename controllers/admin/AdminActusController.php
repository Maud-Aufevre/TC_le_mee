<?php

require_once('./models/admin/AdminActusModel.php');

class AdminActusController {

    private $driver;

    public function __construct() {
        $this->driver = new AdminActusModel();
    }

    public function listActus() {
        AuthController::islogged();
        
        $datas = $this->driver->getActus();
        require_once('./views/admin/actus.php');
    }

    public function insertActu() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            // var_dump(empty($_POST['titre'])); die;
            if(empty($_POST['titre']) || empty($_FILES['visuel']) || empty($_POST['resume']) || empty($_POST['texte']) || empty($_FILES['illu1']) || empty($_FILES['illu2']) || empty($_POST['id_categorie'])) {
                // var_dump($_POST); die;
                $error = "Vous devez remplir tous les champs";
            }else {
                // var_dump("ok"); die;
                $titre = trim(htmlentities(addslashes($_POST['titre'])));
                $visuel = $_FILES['visuel']['name'];
                $resume = trim(htmlentities(addslashes($_POST['resume'])));
                $texte = trim(htmlentities(addslashes($_POST['texte'])));
                $illu1 = $_FILES['illu1']['name'];
                $illu2 = $_FILES['illu2']['name'];
                $id_categorie = $_POST['id_categorie'];
    
                $destination = './assets/images/actus/';
                move_uploaded_file($_FILES['visuel']['tmp_name'],$destination.$visuel);
                move_uploaded_file($_FILES['illu1']['tmp_name'],$destination.$illu1);
                move_uploaded_file($_FILES['illu2']['tmp_name'],$destination.$illu2);
    
                $new = new Actu();
                $new->setTitre($titre);
                $new->setVisuel($visuel);
                $new->setResume($resume);
                $new->setTexte($texte);
                $new->setIllu1($illu1);
                $new->setIllu2($illu2);
                $new->setId_categorie($id_categorie);
                $res = $this->driver->addActu($new);
    
                if($res) {
                    header('location:index.php?action=actus');
                }else {
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        $categories = $this->driver->getCategories();
        require_once('./views/admin/formInsertActu.php');
    }

    public function removeActu() {
        AuthController::islogged();

        if(isset($_GET['id']) && isset($_GET['visuel']) && isset($_GET['illu1']) && isset($_GET['illu2'])) {
            $id = $_GET['id'];
            $visuel = $_GET['visuel'];
            $illu1 = $_GET['illu1'];
            $illu2 = $_GET['illu2'];
            $nb = $this->driver->delActu($id);

            if($nb) {
                $fichier1 = './assets/images/actus/'.$visuel;
                $fichier2 = './assets/images/actus/'.$illu1;
                $fichier3 = './assets/images/actus/'.$illu2;
                unlink($fichier1);
                unlink($fichier2);
                unlink($fichier3);
                header('location:index.php?action=actus');
            }
        }
    }

    public function modifActu() {
        AuthController::islogged();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = $this->driver->getActus($id);

            if(isset($_POST['modif'])){
                
                $titre = trim(htmlentities(addslashes($_POST['titre'])));
                $visuel = $_FILES['visuel']['name'];
                $resume = trim(htmlentities(addslashes($_POST['resume'])));
                $texte = trim(htmlentities(addslashes($_POST['texte'])));
                $illu1 = $_FILES['illu1']['name'];
                $illu2 = $_FILES['illu2']['name'];
                $id_categorie = $_POST['id_categorie'];
                
                $destination = './assets/images/actus/';
                move_uploaded_file($_FILES['visuel']['tmp_name'],$destination.$visuel);
                move_uploaded_file($_FILES['illu1']['tmp_name'],$destination.$illu1);
                move_uploaded_file($_FILES['illu2']['tmp_name'],$destination.$illu2);

                $data[0]->setTitre($titre);
                $data[0]->setVisuel($visuel);
                $data[0]->setResume($resume);
                $data[0]->setTexte($texte);
                $data[0]->setIllu1($illu1);
                $data[0]->setIllu2($illu2);
                $data[0]->setId_categorie($id_categorie);

                $nb = $this->driver->updateActu($data[0]);

                if(isset($nb)) {
                    header('location:index.php?action=actus');
                }else{
                    echo "Echec lors de la mise à jour";
                }
            }
           $categories = $this->driver->getCategories();
           require_once('./views/admin/formUpdateActu.php');
        }
    }
}