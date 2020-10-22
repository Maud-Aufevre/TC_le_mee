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
            $date_naissance = trim(htmlentities(addslashes($_POST['age'])));
            $photo = $_FILES['photo']['name'];
            $destination = './assets/images/joueurs/';
            move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$photo);
            $id_classement = $_POST['classement'];
            
            $new = new Joueurs();
            $new->setNom($nom);
            $new->setPrenom($prenom);
            $new->setDate_naissance($date_naissance);
            $new->setPhoto($photo);
            $new->setId_classement($id_classement);
            $res = $this->driver->addJoueur($new);

            if($res) {
                header('location:index.php?action=comp_joueurs');
            }else {
                echo "Echec lors de l'ajout";
            }
        }
        // var_dump($this->driver->getClassements()); die;
        $classements = $this->driver->getClassements();
        require_once('./views/admin/formInsertJoueur.php');
    }

    public function removeJoueur() {
        if(isset($_GET['id']) && isset($_GET['photo'])) {
            $photo = $_GET['photo'];
            $id = $_GET['id'];
            $nb = $this->driver->delJoueur($id);

            if($nb) {
                $fichier = './assets/images/joueurs/'.$photo;
                unlink($fichier);
                header('location:index.php?action=comp_joueurs');
            }
        }
    }

    public function modifJoueur() {
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $data = $this->driver->getJoueur($id);

            if(isset($_POST['modif'])){
                // var_dump($_POST); die;
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $date_naissance = trim(htmlentities(addslashes($_POST['age'])));
                $photo = $_FILES['photo']['name'];
                $destination = './assets/images/joueurs/';
                move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$photo);
                $id_classement = $_POST['classement'];

                $data[0]->setNom($nom);
                $data[0]->setPrenom($prenom);
                $data[0]->setDate_naissance($date_naissance);
                $data[0]->setPhoto($photo);
                $data[0]->setId_classement($id_classement);

                $nb = $this->driver->updateJoueur($data[0]);
                // var_dump($nb); die;
                if(isset($nb)){
                    header('location:index.php?action=comp_joueurs');
                }else{
                    echo "Echec lors de la mise à jour";
                }
            }
            $classements = $this->driver->getClassements();
            require_once('./views/admin/formUpdateJoueur.php');
        }
    }

    

    //EQUIPES:

    public function listEquipes() {
        $datas = $this->driver->getEq();
        if($_GET['action'] == 'comp_jeunes'){
            require_once('./views/admin/eqJeunes.php');
        }else{
            require_once('./views/admin/eqAdultes.php');
        }
    }

    public function insertEquipe() {
        if(isset($_POST['ajout'])) {
            $nom = trim(htmlentities(addslashes($_POST['nom'])));
            if($_POST['sexe']=="H"){
                $sexe = 0;
            }else{
                $sexe = 1;
            }
            // var_dump($_POST); die;
            $categorie = $_POST['categorie'];
            $id_joueur1 = $_POST['j1'];
            $id_joueur2 = $_POST['j2'];
            $id_joueur3 = $_POST['j3'];
            $id_joueur4 = $_POST['j4'];
            $id_joueur5 = $_POST['j5'];
            
            $new = new Equipes();
            $new->setNom($nom);
            $new->setSexe($sexe);
            $new->setCategorie($categorie);
            $new->setId_joueur1($id_joueur1);
            $new->setId_joueur2($id_joueur2);
            $new->setId_joueur3($id_joueur3);
            $new->setId_joueur4($id_joueur4);
            $new->setId_joueur5($id_joueur5);
            $res = $this->driver->addEquipe($new);

            if($res) {
                if($_GET['action']=='add_eq_jeunes'){
                    header('location:index.php?action=comp_jeunes');
                }else{
                    header('location:index.php?action=comp_adultes');
                }
            }else {
                echo "Echec lors de l'ajout";
            }
        }
        // var_dump($this->driver->getJoueurs()); die;
        $joueurs = $this->driver->getJoueurs();
        foreach($joueurs as $joueur){
            $age = $joueur->age;
        }
        require_once('./views/admin/formInsertEquipe.php');
    }

    public function removeEquipe() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $nb = $this->driver->delEquipe($id);

            if($nb) {
                if($_GET['action']=='delete_eq_jeunes'){
                    header('location:index.php?action=comp_jeunes');
                }else{
                    header('location:index.php?action=comp_adultes');
                }
            }else {
                echo "Echec lors de la suppression";
            }
        }
    }

    public function modifEquipe() {
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $data = $this->driver->getEq($id);

            if(isset($_POST['modif'])){
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $sexe = $_POST['sexe'];
                $categorie = $_POST['categorie'];
                $joueur1 = $_POST['j1'];
                $joueur2 = $_POST['j2'];
                $joueur3 = $_POST['j3'];
                $joueur4 = $_POST['j4'];
                $joueur5 = $_POST['j5'];

                $data[0]->setNom($nom);
                $data[0]->setSexe($sexe);
                $data[0]->setCategorie($categorie);
                $data[0]->setId_joueur1($joueur1);
                $data[0]->setId_joueur2($joueur2);
                $data[0]->setId_joueur3($joueur3);
                $data[0]->setId_joueur4($joueur4);
                $data[0]->setId_joueur5($joueur5);
                

                $nb = $this->driver->updateEquipe($data[0]);
                if($nb) {
                    if($_GET['action']=='modif_eq_jeunes'){
                        header('location:index.php?action=comp_jeunes');
                    }else{
                        header('location:index.php?action=comp_adultes');
                    }
                }else {
                    echo "Echec lors de la modification";
                }
            }
            $joueurs = $this->driver->getJoueurs();
            foreach($joueurs as $joueur){
                $age = $joueur->age;
            }
            require_once('./views/admin/formUpdateEquipe.php');
        }
    }

    
}