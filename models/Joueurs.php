<?php

class Joueurs {
    private $id_joueur;
    private $sexe;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $id_classement;

    /**
     * Get the value of id_joueur
     */ 
    public function getId_joueur()
    {
        return $this->id_joueur;
    }

    /**
     * Set the value of id_joueur
     *
     * @return  self
     */ 
    public function setId_joueur($id_joueur)
    {
        $this->id_joueur = $id_joueur;

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
     * Get the value of date_naissance
     */ 
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set the value of date_naissance
     *
     * @return  self
     */ 
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get the value of id_classement
     */ 
    public function getId_classement()
    {
        return $this->id_classement;
    }

    /**
     * Set the value of id_classement
     *
     * @return  self
     */ 
    public function setId_classement($id_classement)
    {
        $this->id_classement = $id_classement;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
}