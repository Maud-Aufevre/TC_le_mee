<?php

require_once('./models/admin/AdminJoueursModel.php');

class AdminJoueursController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminJoueursModel();
    }

    public function listJoueurs() {
        AuthController::islogged();

        $datas = $this->driver->getJoueurs();
        require_once('./views/admin/joueurs.php');
    }

    public function insertJoueur() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['age']) || empty($_POST['id_categorie'])) {
                $error = "Vous devez remplir tous les champs";
            }else {
                $sexe = $_POST['sexe'];
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $date_naissance = trim(htmlentities(addslashes($_POST['age'])));
                $id_classement = $_POST['classement'];
                
                $new = new Joueurs();
                $new->setSexe($sexe);
                $new->setNom($nom);
                $new->setPrenom($prenom);
                $new->setDate_naissance($date_naissance);
                $new->setId_classement($id_classement);
                $res = $this->driver->addJoueur($new);

                if($res) {
                    header('location:index.php?action=comp_joueurs');
                }else {
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        // var_dump($this->driver->getClassements()); die;
        $classements = $this->driver->getClassements();
        require_once('./views/admin/formInsertJoueur.php');
    }

    public function removeJoueur() {
        AuthController::islogged();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $nb = $this->driver->delJoueur($id);

            if($nb) {
                header('location:index.php?action=comp_joueurs');
            }
        }
    }

    public function modifJoueur() {
        AuthController::islogged();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = $this->driver->getJoueur($id);

            if(isset($_POST['modif'])){
                // var_dump($_POST); die;
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $sexe = $_POST['sexe'];
                $date_naissance = trim(htmlentities(addslashes($_POST['age'])));
                $id_classement = $_POST['classement'];

                $data[0]->setNom($nom);
                $data[0]->setPrenom($prenom);
                $data[0]->setSexe($sexe);
                $data[0]->setDate_naissance($date_naissance);
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
        AuthController::islogged();

        $datas = $this->driver->getEq();
        // var_dump($datas); die;
        if($_GET['action'] == 'comp_jeunes'){
            require_once('./views/admin/eqJeunes.php');
        }else{
            require_once('./views/admin/eqAdultes.php');
        }
    }

    public function insertEquipe() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['categorie']) || empty($_POST['j1']) || empty($_POST['j2'])) {
                $error = "Vous devez remplir tous les champs";
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $sexe = $_POST['sexe'];
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
                    $error = "Echec lors de l'ajout";
                }
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
        AuthController::islogged();

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
        AuthController::islogged();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = $this->driver->getEq($id);

            if(isset($_POST['modif'])){
                // var_dump($_POST); die;
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