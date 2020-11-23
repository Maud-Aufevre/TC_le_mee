<?php

class Tournois {
    private $id_tournoi;
    private $nom;
    private $date_debut;
    private $date_fin;
    private $disciplines;
    private $classements;
    private $tarif_adultes;
    private $tarif_jeunes;
    private $juge_arbitre;
    private $prix_vainqueurs;
    private $finalistes;
    private $prix_demi_fin;
    private $num_homologation;
    private $contact;

    /**
     * Get the value of id_tournoi
     */ 
    public function getId_tournoi()
    {
        return $this->id_tournoi;
    }

    /**
     * Set the value of id_tournoi
     *
     * @return  self
     */ 
    public function setId_tournoi($id_tournoi)
    {
        $this->id_tournoi = $id_tournoi;

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
     * Get the value of disciplines
     */ 
    public function getDisciplines()
    {
        return $this->disciplines;
    }

    /**
     * Set the value of disciplines
     *
     * @return  self
     */ 
    public function setDisciplines($disciplines)
    {
        $this->disciplines = $disciplines;

        return $this;
    }

    /**
     * Get the value of classements
     */ 
    public function getClassements()
    {
        return $this->classements;
    }

    /**
     * Set the value of classements
     *
     * @return  self
     */ 
    public function setClassements($classements)
    {
        $this->classements = $classements;

        return $this;
    }

    /**
     * Get the value of tarif_adultes
     */ 
    public function getTarif_adultes()
    {
        return $this->tarif_adultes;
    }

    /**
     * Set the value of tarif_adultes
     *
     * @return  self
     */ 
    public function setTarif_adultes($tarif_adultes)
    {
        $this->tarif_adultes = $tarif_adultes;

        return $this;
    }

    /**
     * Get the value of tarif_jeunes
     */ 
    public function getTarif_jeunes()
    {
        return $this->tarif_jeunes;
    }

    /**
     * Set the value of tarif_jeunes
     *
     * @return  self
     */ 
    public function setTarif_jeunes($tarif_jeunes)
    {
        $this->tarif_jeunes = $tarif_jeunes;

        return $this;
    }

    /**
     * Get the value of juge_arbitre
     */ 
    public function getJuge_arbitre()
    {
        return $this->juge_arbitre;
    }

    /**
     * Set the value of juge_arbitre
     *
     * @return  self
     */ 
    public function setJuge_arbitre($juge_arbitre)
    {
        $this->juge_arbitre = $juge_arbitre;

        return $this;
    }

    /**
     * Get the value of prix_vainqueurs
     */ 
    public function getPrix_vainqueurs()
    {
        return $this->prix_vainqueurs;
    }

    /**
     * Set the value of prix_vainqueurs
     *
     * @return  self
     */ 
    public function setPrix_vainqueurs($prix_vainqueurs)
    {
        $this->prix_vainqueurs = $prix_vainqueurs;

        return $this;
    }

    /**
     * Get the value of finalistes
     */ 
    public function getFinalistes()
    {
        return $this->finalistes;
    }

    /**
     * Set the value of finalistes
     *
     * @return  self
     */ 
    public function setFinalistes($finalistes)
    {
        $this->finalistes = $finalistes;

        return $this;
    }

    /**
     * Get the value of prix_demi_fin
     */ 
    public function getPrix_demi_fin()
    {
        return $this->prix_demi_fin;
    }

    /**
     * Set the value of prix_demi_fin
     *
     * @return  self
     */ 
    public function setPrix_demi_fin($prix_demi_fin)
    {
        $this->prix_demi_fin = $prix_demi_fin;

        return $this;
    }

    /**
     * Get the value of num_homologation
     */ 
    public function getNum_homologation()
    {
        return $this->num_homologation;
    }

    /**
     * Set the value of num_homologation
     *
     * @return  self
     */ 
    public function setNum_homologation($num_homologation)
    {
        $this->num_homologation = $num_homologation;

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
}