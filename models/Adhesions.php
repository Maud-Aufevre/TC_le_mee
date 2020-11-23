<?php

class Adhesions {
    private $id_adhesion;
    private $nom;
    private $programme;
    private $prix;

    /**
     * Get the value of id_adhesion
     */ 
    public function getId_adhesion()
    {
        return $this->id_adhesion;
    }

    /**
     * Set the value of id_adhesion
     *
     * @return  self
     */ 
    public function setId_adhesion($id_adhesion)
    {
        $this->id_adhesion = $id_adhesion;

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
     * Get the value of programme
     */ 
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set the value of programme
     *
     * @return  self
     */ 
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}