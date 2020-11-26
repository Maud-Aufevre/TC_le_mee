<?php

require_once('./models/public/PublicModel.php');
require_once('./models/admin/AdminActusModel.php');
require_once('./models/admin/AdminAdhesionsModel.php');
require_once('./models/admin/AdminBureauModel.php');
require_once('./models/admin/AdminCarrouselModel.php');
require_once('./models/admin/AdminJoueursModel.php');
require_once('./models/admin/AdminMessagesModel.php');
require_once('./models/admin/AdminPartenairesModel.php');
require_once('./models/admin/AdminPedaModel.php');
require_once('./models/admin/AdminTournoisModel.php');


class PublicController{

    private $driver1;
    private $driver2;
    private $driver3;
    private $driver4;
    private $driver5;
    private $driver6;
    private $driver7;
    private $driver8;
    private $driver9;
    private $driver10;

    public function __construct()
    {
        $this->driver1 = new PublicModel(); 
        $this->driver2 = new AdminActusModel(); 
        $this->driver3 = new AdminAdhesionsModel();
        $this->driver4 = new AdminBureauModel();
        $this->driver5 = new AdminCarrouselModel();
        $this->driver6 = new AdminJoueursModel();
        $this->driver7 = new AdminMessagesModel();
        $this->driver8 = new AdminPartenairesModel();
        $this->driver9 = new AdminPedaModel();
        $this->driver10 = new AdminTournoisModel();
    }



    public function getAccueil() {
        $datasCar = $this->driver5->getCarrousel();
        $dataDiscours = $this->driver4->getMembre(1);
        $datasPart = $this->driver8->getPart();

        require_once('./views/public/accueil.php');
    }
    public function installations() {
        require_once('./views/public/installations.php');
    }
    
    public function bureau() {
        $datasBureau = $this->driver4->getBureau();

        require_once('./views/public/bureau.php');
    }

    public function enseignement() {
        $datasPeda = $this->driver9->getPeda();
        require_once('./views/public/enseignement.php');
    }

    public function directeur() {
        $datasDir = $this->driver9->getPeda(1);
        require_once('./views/public/directeur.php');
    }

    public function actus() {      
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $datasActus = $this->driver2->getActus($id);
            $datasCat = [];
            foreach($datasActus as $d) {
                array_push($datasCat , $this->driver2->getCategorie($d->getId_categorie()));
            }

            require_once('./views/public/detailsActu.php');
        }else{
            $datasActus = $this->driver2->getActus();
            $datasCat = [];
            foreach($datasActus as $d) {
                array_push($datasCat , $this->driver2->getCategorie($d->getId_categorie()));
            }

            require_once('./views/public/actus.php');
        }
    }

    public function adhesions() {
        $datasAdh = $this->driver3->getAdhesions();
        require_once('./views/public/adhesions.php');
    }

    public function equipes() {
        $datasAdh = $this->driver6->getEq();

        if($_GET['action'] == 'equipesJ'){
            require_once('./views/public/equipesJ.php');
        }else{
            require_once('./views/public/equipesA.php');
        }
    }

    public function tournois() {
        $datasAdh = $this->driver10->getTournois();
        require_once('./views/public/tournois.php');
    }


    public function ecole() {
        require_once('./views/public/ecole.php');
    }

    public function contact() {

        if(isset($_POST['send'])) {
            if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['tel']) || empty($_POST['email']) || empty($_POST['message'])) {
                $error = "Vous devez remplir tous les champs";
                // var_dump($error); die;
            }else {
                $nom = trim(htmlentities(addslashes($_POST['nom'])));
                $prenom = trim(htmlentities(addslashes($_POST['prenom'])));
                $tel = strval(trim(htmlentities(addslashes($_POST['tel']))));
                $email = strval(trim(htmlentities(addslashes($_POST['email']))));
                $message = trim(htmlentities(addslashes($_POST['message'])));


                $new = new Messages();
                $new->setNom($nom);
                $new->setPrenom($prenom);
                $new->setTel(strval($tel));
                $new->setEmail(strval($email));
                $new->setMessage($message);
                $datasMsg = $this->driver1->newMsg($new);

                if($datasMsg){
                    $succes = "Votre message a bien été envoyé, nous allons revenir vers vous au plus vite !";

                    $nomMail = html_entity_decode (stripslashes($nom));
                    $prenomMail = html_entity_decode (stripslashes($prenom));
                    $telMail = html_entity_decode (stripslashes($tel));
                    $emailMail = html_entity_decode (stripslashes($email));
                    $messageMail = html_entity_decode (stripslashes($message));


                    // envoi en parallèle d'un mail avec le contenu du message :
                    $destinataires = "maud.aufevre@gmail.com";
                    $sujet = "Nouveau message reçu via site du club";
                    
                    // en-têtes expéditeur
                    $entetes1 = "From : {$emailMail}";
                    // var_dump($entetes1); die;
                    // en-têtes adresse de retour
                    $entetes2 = "Reply-to : fabien.dasilva@fft.fr";
                    
                    // personnes en copie
                    // $entetes .= "Cc : fabien.dasilva@fft.fr\n";
                    
                    // type de contenu et encodage
                    $entetes3 = "Content-type: text/plain; charset=utf-8";

                    $entetes = $entetes1."\r\n".$entetes2."\r\n".$entetes3."\r\n";
                    $contenu = "Message de : {$prenomMail} {$nomMail}\nSes coordonnées : \n Tel : {$telMail}\n Email : {$emailMail}\nSon message : {$messageMail}";
                    
                    mail($destinataires, $sujet, $contenu,$entetes);
                }else{
                    $error = "Echec, le message n'a pas abouti";
                }
            }
        }
        require_once('./views/public/contact.php');
    }




}