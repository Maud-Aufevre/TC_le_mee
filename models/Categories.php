<?php

class Categories {

    private $id_categorie;
    private $nom;
    private $visuel;

    /**
     * Get the value of id_categorie
     */ 
    public function getId_categorie()
    {
        return $this->id_categorie;
    }

    /**
     * Set the value of id_categorie
     *
     * @return  self
     */ 
    public function setId_categorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of visuel
     */ 
    public function getVisuel()
    {
        return $this->visuel;
    }

    /**
     * Set the value of visuel
     *
     * @return  self
     */ 
    public function setVisuel($visuel)
    {
        $this->visuel = $visuel;

        return $this;
    }
}