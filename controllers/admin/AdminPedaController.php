<?php

require_once('./models/admin/AdminPedaModel.php');

class AdminPedaController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminPedaModel();
    }

    public function listEns() {
        $datas = $this->driver->getPeda();
        require_once('./views/admin/enseignants.php');
    }

    public function insertEns() {
        if(isset($_POST['ajout'])) {
            $nom = trim(htmlentities(addslashes($_POST['nom'])));
            $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
            $fonction = trim(htmlentities(addslashes($_POST['fonction'])));
            $photo = $_FILES['photo']['name'];
            $destination = './assets/images/enseignants/';
            move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$photo);

            $new = new Peda();
            $new->setNom($nom);
            $new->setPrenom($prenom);
            $new->setFonction($fonction);
            $new->setPhoto($photo);
            $res = $this->driver->addEns($new);

            if($res){
                header('location:index.php?action=ens_equipe');
            }else{
                echo "Echec lors de l'ajout";
            }
        }
        require_once('./views/admin/formInsertEns.php');
    }

    public function removeEns() {
        if(isset($_GET['id']) && isset($_GET['photo'])) {
            $photo = $_GET['photo'];
            $id = (int)$_GET['id'];
            $nb = $this->driver->delEns($id);
            if($nb) {
                $fichier = './assets/images/enseignants/'.$photo;
                unlink($fichier);
                header('location:index.php?action=ens_equipe');
            }
        }
    }

    public function ModifEns() {

        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $data = $this->driver->getEns($id);
            // var_dump($datas); die;
            if(isset($_POST['modif']) && !empty($_POST['nom'])){
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $fonction = trim(htmlentities(addslashes($_POST['fonction'])));
                $photo = $_FILES['photo']['name'];
                $destination = './assets/images/enseignants/';
                move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$photo);

                $data[0]->setNom($nom);
                $data[0]->setPrenom($prenom);
                $data[0]->setFonction($fonction);
                $data[0]->setPhoto($photo);

                $nb = $this->driver->updateEns($data[0]);
                if(isset($nb)) {
                    header('location:index.php?action=ens_equipe');
                }else{
                    echo "Echec lors de la mise à jour";
                }
            }
            require_once('./views/admin/formUpdateEns.php');
        }
    }
}