<?php

require_once('./models/Actu.php');
require_once('./models/Categories.php');
require_once('./models/Driver.php');

class AdminActusModel extends Driver {

    public function getActus($id=null) {
        if($id==null) {
            $sql = "SELECT * FROM actus ORDER BY date_parution DESC";
            $res = $this->getRequest($sql);
        }else {
            $sql = "SELECT * FROM actus WHERE id_article=?";
            $res = $this->getRequest($sql,[$id]);
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row) {
            $actu = new Actu();

            $actu->setId_article($row->id_article);
            $actu->setTitre($row->titre);
            $actu->setVisuel($row->visuel);
            $actu->setDate_parution($row->date_parution);
            $actu->setResume($row->resume);
            $actu->setTexte($row->texte);
            $actu->setIllu1($row->illu1);
            $actu->setIllu2($row->illu2);
            $actu->setId_categorie($row->id_categorie);
            $actu->nom = $this->getCategorie($row->id_categorie)->getNom();
            // $actu->visuel = $this->getCategorie($row->id_categorie)->getVisuel();

            array_push($donnees,$actu);
        }
        // var_dump($donnees); die;
        return $donnees;
    }

    public function getCategories() {
        $sql = "SELECT * FROM categories";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $nb = $res->rowCount();

        $categories = [];
        if($nb) {
            foreach($rows as $row) {
                $cat = new Categories();
                $cat->setId_categorie($row->id_categorie);
                $cat->setNom($row->nom);
                $cat->setVisuel($row->visuel);

                array_push($categories,$cat);
            }
        }
        return $categories;
    }

    public function getCategorie($id_cat) {
        $sql = "SELECT * FROM categories WHERE id_categorie=?";
        $res = $this->getRequest($sql,[$id_cat]);
        $data = $res->fetch(PDO::FETCH_OBJ);

        $cat = new Categories();
        if($res->rowCount()) {
            $cat->setId_categorie($data->id_categorie);
            $cat->setNom($data->nom);
            $cat->setVisuel($data->visuel);
        }
        return $cat;
    }

    public function addActu(Actu $actu) {
        $sql = "INSERT INTO actus(titre,visuel,resume,texte,illu1,illu2,id_categorie) VALUES(:titre,:visuel,:resume,:texte,:illu1,:illu2,:id_categorie)";
        $res = $this->getRequest($sql, ['titre'=>$actu->getTitre(),'visuel'=>$actu->getVisuel(),'resume'=>$actu->getResume(),'texte'=>$actu->getTexte(),'illu1'=>$actu->getIllu1(),'illu2'=>$actu->getIllu2(),'id_categorie'=>$actu->getId_categorie()]);

        return $res;
    }

    public function delActu($id) {
        $sql = "DELETE FROM actus WHERE id_article=?";
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function updateActu(Actu $actu) {
        $id = $actu->getId_article();
        if($actu->getVisuel() === ""){
            $visuel = $this->getActus($id)[0]->getVisuel();
        }else{
            $visuel = $actu->getVisuel();
        }
        if($actu->getIllu1() === ""){
            $illu1 = $this->getActus($id)[0]->getIllu1();
        }else{
            $illu1 = $actu->getIllu1();
        }
        if($actu->getIllu2() === ""){
            $illu2 = $this->getActus($id)[0]->getIllu2();
        }else{
            $illu2 = $actu->getIllu2();
        }

        $sql = "UPDATE actus SET titre=?,visuel=?,resume=?,texte=?,illu1=?,illu2=?,id_categorie=? WHERE id_article=?";

        $tabActu = [$actu->getTitre(),$visuel,$actu->getResume(),$actu->getTexte(),$illu1,$illu2,$actu->getId_categorie(),$actu->getId_article()];

        $res = $this->getRequest($sql,$tabActu);
        $nb = $res->rowCount();

        return $nb;
    }
}