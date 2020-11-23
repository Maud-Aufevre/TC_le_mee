<?php

class Partenaires {
    private $id_partenaire;
    private $nom;
    private $logo;
    private $description;
    private $site_web;

    /**
     * Get the value of id_partenaire
     */ 
    public function getId_partenaire()
    {
        return $this->id_partenaire;
    }

    /**
     * Set the value of id_partenaire
     *
     * @return  self
     */ 
    public function setId_partenaire($id_partenaire)
    {
        $this->id_partenaire = $id_partenaire;

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
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of site_web
     */ 
    public function getSite_web()
    {
        return $this->site_web;
    }

    /**
     * Set the value of site_web
     *
     * @return  self
     */ 
    public function setSite_web($site_web)
    {
        $this->site_web = $site_web;

        return $this;
    }
}