<?php
require_once('./controllers/admin/AdminBureauController.php');
require_once('./controllers/admin/AdminPedaController.php');
require_once('./controllers/admin/AdminPartenairesController.php');
require_once('./controllers/admin/AdminJoueursController.php');

class Router {

    private $adminb;
    private $admine;
    private $adminp;
    private $adminj;

    public function __construct() {
        $this->adminb = new AdminBureauController();
        $this->admine = new AdminPedaController();
        $this->adminp = new AdminPartenairesController();
        $this->adminj = new AdminJoueursController();
    }

    public function getPath() {
        try {
            if(isset($_GET['action'])) {
                switch($_GET['action']) {

                    //routes pour le bureau

                    case 'cl_bureau':
                        $this->adminb->listMembres();
                        break;
                    case 'add_membre':
                        $this->adminb->insertMembre();
                        break;
                    case 'delete_membre':
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $this->adminb->removeMembre($id);
                            break;
                        }else{
                            throw new Exception('paramètre non défini');
                        }
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
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $this->adminp->removePart($id);
                        break;
                        }else{
                            throw new Exception('paramètre non défini');
                        }
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
                        if(isset($_GET['id'])){
                            $this->admine->removeEns();
                        break;
                        }else{
                            throw new Exception('paramètre non défini');
                        }
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
                            if(isset($_GET['id'])){

                                $this->adminj->removeJoueur();
                                break;
                            }else{
                                throw new Exception('paramètre non défini');
                            }
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
                        
                    

                }
            }
        }catch(Exception $e) {
            $this->page404($e->getMessage());
        }
    }

    private function page404($errorMsg) {
        require_once('./views/page404.php');
    }
}