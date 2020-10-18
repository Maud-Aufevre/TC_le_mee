<?php

class Peda {
    private $id_ens;
    private $nom;
    private $prenom;
    private $fonction;
    private $photo;
    private $discours;


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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of fonction
     */ 
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set the value of fonction
     *
     * @return  self
     */ 
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of discours
     */ 
    public function getDiscours()
    {
        return $this->discours;
    }

    /**
     * Set the value of discours
     *
     * @return  self
     */ 
    public function setDiscours($discours)
    {
        $this->discours = $discours;

        return $this;
    }

    /**
     * Get the value of id_ens
     */ 
    public function getId_ens()
    {
        return $this->id_ens;
    }

    /**
     * Set the value of id_ens
     *
     * @return  self
     */ 
    public function setId_ens($id_ens)
    {
        $this->id_ens = $id_ens;

        return $this;
    }
}