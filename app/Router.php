<?php
require_once('./controllers/admin/AdminBureauController.php');
require_once('./controllers/admin/AdminPedaController.php');
require_once('./controllers/admin/AdminPartenairesController.php');
require_once('./controllers/admin/AdminJoueursController.php');
require_once('./controllers/admin/AdminAdhesionsController.php');
require_once('./controllers/admin/AdminTournoisController.php');
require_once('./controllers/admin/AdminActusController.php');
require_once('./controllers/admin/AdminCarrouselController.php');
require_once('./controllers/admin/AuthController.php');
require_once('./controllers/admin/AdminUserController.php');
require_once('./controllers/admin/AdminMessagesController.php');
require_once('./controllers/public/PublicController.php');

class Router {

    private $adminb;
    private $admine;
    private $adminp;
    private $adminj;
    private $admina;
    private $admint;
    private $adminac;
    private $admincar;
    private $adminu;
    private $adminm;
    private $pub;


    public function __construct() {
        $this->adminb = new AdminBureauController();
        $this->admine = new AdminPedaController();
        $this->adminp = new AdminPartenairesController();
        $this->adminj = new AdminJoueursController();
        $this->admina = new AdminAdhesionsController();
        $this->admint = new AdminTournoisController();
        $this->adminac = new AdminActusController();
        $this->admincar = new AdminCarrouselController();
        $this->adminu = new AdminUserController();
        $this->adminm = new AdminMessagesController();
        $this->pub = new PublicController();
    }

    public function getPath() {
        try {
            if(isset($_GET['action'])) {
                switch($_GET['action']) {

                    //routes pour les utilisateurs
                    case 'logout':
                        AuthController::logout();
                        break;
                    case 'admin':
                        $this->adminu->login();   
                        break;

                    //routes pour le bureau

                    case 'cl_bureau':
                        $this->adminb->listMembres();
                        break;
                    case 'add_membre':
                        $this->adminb->insertMembre();
                        break;
                    case 'delete_membre':
                        $this->adminb->removeMembre();
                        break;
                    case 'modif_membre':
                        $this->adminb->modifMembre();
                        break;

                    //routes pour les partenaires

                    case 'cl_part':
                        $this->adminp->listPart();
                        break;
                    case 'add_part':
                        $this->adminp->InsertPart();
                        break;
                    case 'delete_part':
                        $this->adminp->removePart();
                        break;
                    case 'modif_part':
                        $this->adminp->modifPart();
                        break;

                    //routes pour les enseignants

                    case 'ens_equipe':
                        $this->admine->listEns();
                        break;
                    case 'add_ens':
                        $this->admine->InsertEns();
                        break;
                    case 'delete_ens':
                        $this->admine->removeEns();
                        break;
                    case 'modif_ens':
                        $this->admine->modifEns();
                        break;

                    //routes pour les joueurs

                    case 'comp_joueurs':
                        $this->adminj->listJoueurs();
                        break;
                    case 'add_joueur':
                        $this->adminj->insertJoueur();
                        break;
                    case 'delete_joueur':
                        $this->adminj->removeJoueur();
                        break;
                    case 'modif_joueur':
                        $this->adminj->modifJoueur();
                        break;

                    //routes pour les équipes

                    case 'comp_jeunes':
                    case 'comp_adultes':
                        $this->adminj->listEquipes();
                        break;
                    case 'add_eq_jeunes':
                    case 'add_eq_adultes':
                        $this->adminj->insertEquipe();
                        break;
                    case 'delete_eq_jeunes':
                    case 'delete_eq_adultes':
                        $this->adminj->removeEquipe();
                        break;
                    case 'modif_eq_jeunes':
                    case 'modif_eq_adultes':
                        $this->adminj->modifEquipe();
                        break;

                    //routes pour les adhésions

                    case 'adhesions':
                        $this->admina->listAdhesions();
                        break;
                    case 'add_adh':
                        $this->admina->insertAdhesion();
                        break;
                    case 'delete_adh':
                        $this->admina->removeAdhesion();
                        break;
                    case 'modif_adh':
                        $this->admina->modifAdhesion();
                        break;
                
                    //routes pour les tournois

                    case 'tournois':
                        $this->admint->listTournois();
                        break;
                    case 'add_tournoi':
                        $this->admint->insertTournoi();
                        break;
                    case 'delete_tournoi':
                        $this->admint->removeTournoi();
                        break;
                    case 'modif_tournoi':
                        $this->admint->modifTournoi();
                        break;

                    //routes pour les actus

                    case 'actus':
                        $this->adminac->listActus();
                        break;
                    case 'add_actu':
                        $this->adminac->insertActu();
                        break;
                    case 'delete_actu':
                        $this->adminac->removeActu();
                        break; 
                    case 'modif_actu':
                        $this->adminac->modifActu();
                        break; 
                        
                    //routes pour le carrousel

                    case 'car_event_club':
                    case 'car_event_tennis':
                    case 'car_ecole':
                    case 'car_resa':
                    case 'car_actus':
                        $this->admincar->carrousel();
                        break;
                    case 'modif_car_event_club':
                    case 'modif_car_event_tennis':
                    case 'modif_car_ecole':
                    case 'modif_car_resa':
                    case 'modif_car_actus':
                        $this->admincar->modifCarrousel();
                        break;    
                    case 'add_event_club':
                    case 'add_event_tennis':
                        $this->admincar->insertEvent();
                        break;
                    case 'modif_event_club':
                    case 'modif_event_tennis':
                        $this->admincar->modifEvent();
                        break;
                    case 'delete_event_club':
                    case 'delete_event_tennis':
                        $this->admincar->removeEvent();
                        break;


                    //routes pour les messages

                    case 'messages':
                        $this->adminm->listMessages();
                        break;
                    case 'lire_message':
                        $this->adminm->seeMessage();
                        break;
                    case 'delete_message':
                        $this->adminm->removeMessage();
                        break;

                    //routes pour partie publique

                    case 'installations':
                        $this->pub->installations();
                        break;
                    case 'bureau':
                        $this->pub->bureau();
                        break;
                    case 'dir':
                        $this->pub->directeur();
                        break;
                    case 'enseignement':
                        $this->pub->enseignement();
                        break;
                    case 'actualites':
                    case 'lire_actu':
                        $this->pub->actus();
                        break;
                    case 'adh':
                        $this->pub->adhesions();
                        break;
                    case 'equipesJ':
                    case 'equipesA':
                        $this->pub->equipes();
                        break;
                    case 'tournois_club':
                        $this->pub->tournois();
                        break;
                    case 'contact':
                        $this->pub->contact();
                        break;
                    case 'ecole':
                        $this->pub->ecole();
                        break;

                }} else {
                    $this->pub->getAccueil();
                }
        }catch(Exception $e) {
            $this->page404($e->getMessage());
        }
    }

    private function page404($errorMsg) {
        require_once('./views/page404.php');
    }
}