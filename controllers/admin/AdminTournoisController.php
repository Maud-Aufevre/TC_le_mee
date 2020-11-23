<?php

require_once('./models/admin/AdminTournoisModel.php');

class AdminTournoisController {

    private $driver;

    public function __construct() {
        $this->driver = new AdminTournoisModel();
    }

    public function listTournois() {
        AuthController::islogged();

        $datas = $this->driver->getTournois();
        // var_dump($datas); die;
        require_once('./views/admin/tournois.php');
    }

    public function insertTournoi() {
        AuthController::islogged();

        if(isset($_POST['ajout'])) {
            if(empty($_POST['nom']) || empty($_POST['date_debut']) || empty($_POST['date_fin']) || empty($_POST['disciplines']) || empty($_POST['class']) || empty($_POST['ta']) || empty($_POST['tj']) || empty($_POST['ja']) || empty($_POST['vainqueurs']) || empty($_POST['finalistes']) || empty($_POST['demi']) || empty($_POST['num']) || empty($_POST['contact'])) {
                $error = "Vous devez remplir tous les champs";
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $disciplines = trim(htmlentities(addslashes($_POST['disciplines'])));
                $classements = trim(htmlentities(addslashes($_POST['class'])));
                $tarif_adultes = trim(htmlentities(addslashes($_POST['ta'])));
                $tarif_jeunes = trim(htmlentities(addslashes($_POST['tj'])));
                $juge_arbitre = trim(htmlentities(addslashes($_POST['ja'])));
                $prix_vainqueurs = trim(htmlentities(addslashes($_POST['vainqueurs'])));
                $prix_finalistes = trim(htmlentities(addslashes($_POST['finalistes'])));
                $prix_demi_fin = trim(htmlentities(addslashes($_POST['demi'])));
                $num_homologation = trim(htmlentities(addslashes($_POST['num'])));
                $contact = trim(htmlentities(addslashes($_POST['contact'])));

                $new = new Tournois();
                $new->setNom($nom);
                $new->setDate_debut($date_debut);
                $new->setDate_fin($date_fin);
                $new->setDisciplines($disciplines);
                $new->setClassements($classements);
                $new->setTarif_adultes($tarif_adultes);
                $new->setTarif_jeunes($tarif_jeunes);
                $new->setJuge_arbitre($juge_arbitre);
                $new->setPrix_vainqueurs($prix_vainqueurs);
                $new->setFinalistes($prix_finalistes);
                $new->setPrix_demi_fin($prix_demi_fin);
                $new->setNum_homologation($num_homologation);
                $new->setContact($contact);
                $res = $this->driver->addTournoi($new);

                if($res) {
                    header('location:index.php?action=tournois');
                }else {
                    $error = "Echec lors de l'ajout";
                }
            }
        }
        require_once('./views/admin/formInsertTournoi.php');
    }

    public function removeTournoi() {
        AuthController::islogged();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $nb = $this->driver->delTournoi($id);
            if($nb) {
                header('location:index.php?action=tournois');
            }
        }
    }

    public function modifTournoi() {
        AuthController::islogged();
        
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $data = $this->driver->getTournois($id);

            if(isset($_POST['modif']) && !empty($_POST['nom'])) {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $date_debut = trim(htmlentities(addslashes($_POST['date_debut'])));
                $date_fin = trim(htmlentities(addslashes($_POST['date_fin'])));
                $disciplines = trim(htmlentities(addslashes($_POST['disciplines'])));
                $classements = trim(htmlentities(addslashes($_POST['class'])));
                $tarif_adultes = trim(htmlentities(addslashes($_POST['ta'])));
                $tarif_jeunes = trim(htmlentities(addslashes($_POST['tj'])));
                $juge_arbitre = trim(htmlentities(addslashes($_POST['ja'])));
                $prix_vainqueurs = trim(htmlentities(addslashes($_POST['vainqueurs'])));
                $prix_finalistes = trim(htmlentities(addslashes($_POST['finalistes'])));
                $prix_demi_fin = trim(htmlentities(addslashes($_POST['demi'])));
                $num_homologation = trim(htmlentities(addslashes($_POST['num'])));
                $contact = trim(htmlentities(addslashes($_POST['contact']))); 

                $data[0]->setNom($nom);
                $data[0]->setDate_debut($date_debut);
                $data[0]->setDate_fin($date_fin);
                $data[0]->setDisciplines($disciplines);
                $data[0]->setClassements($classements);
                $data[0]->setTarif_adultes($tarif_adultes);
                $data[0]->setTarif_jeunes($tarif_jeunes);
                $data[0]->setJuge_arbitre($juge_arbitre);
                $data[0]->setPrix_vainqueurs($prix_vainqueurs);
                $data[0]->setFinalistes($prix_finalistes);
                $data[0]->setPrix_demi_fin($prix_demi_fin);
                $data[0]->setNum_homologation($num_homologation);
                $data[0]->setContact($contact);
                
                $nb = $this->driver->updateTournoi($data[0]);
                if(isset($nb)) {
                    header('location:index.php?action=tournois');
                }else{
                    echo "Echec lors de la mise à jour";
                } 
            }
            require_once('./views/admin/formUpdateTournoi.php');
        }
    }
}