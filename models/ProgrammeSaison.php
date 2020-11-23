<?php

class ProgrammeSaison {
    private $id_evenement;
    private $nom;
    private $visuel;
    private $date_debut;
    private $date_fin;
    private $contenu;
    private $contact;
    private $debut_affichage;
    private $fin_affichage;

    /**
     * Get the value of id_evenement
     */ 
    public function getId_evenement()
    {
        return $this->id_evenement;
    }

    /**
     * Set the value of id_evenement
     *
     * @return  self
     */ 
    public function setId_evenement($id_evenement)
    {
        $this->id_evenement = $id_evenement;

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

    /**
     * Get the value of date_debut
     */ 
    public function getDate_debut()
    {
        return $this->date_debut;
    }

    /**
     * Set the value of date_debut
     *
     * @return  self
     */ 
    public function setDate_debut($date_debut)
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    /**
     * Get the value of date_fin
     */ 
    public function getDate_fin()
    {
        return $this->date_fin;
    }

    /**
     * Set the value of date_fin
     *
     * @return  self
     */ 
    public function setDate_fin($date_fin)
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of contact
     */ 
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of debut_affichage
     */ 
    public function getDebut_affichage()
    {
        return $this->debut_affichage;
    }

    /**
     * Set the value of debut_affichage
     *
     * @return  self
     */ 
    public function setDebut_affichage($debut_affichage)
    {
        $this->debut_affichage = $debut_affichage;

        return $this;
    }

    /**
     * Get the value of fin_affichage
     */ 
    public function getFin_affichage()
    {
        return $this->fin_affichage;
    }

    /**
     * Set the value of fin_affichage
     *
     * @return  self
     */ 
    public function setFin_affichage($fin_affichage)
    {
        $this->fin_affichage = $fin_affichage;

        return $this;
    }
}