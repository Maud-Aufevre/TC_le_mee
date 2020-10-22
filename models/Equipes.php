<?php

class Equipes {
    private $id_equipe;
    private $nom;
    private $sexe;
    private $categorie;
    private $id_joueur1;
    private $id_joueur2;
    private $id_joueur3;
    private $id_joueur4;
    private $id_joueur5;

    

    /**
     * Get the value of id_equipe
     */ 
    public function getId_equipe()
    {
        return $this->id_equipe;
    }

    /**
     * Set the value of id_equipe
     *
     * @return  self
     */ 
    public function setId_equipe($id_equipe)
    {
        $this->id_equipe = $id_equipe;

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

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of id_joueur1
     */ 
    public function getId_joueur1()
    {
        return $this->id_joueur1;
    }

    /**
     * Set the value of id_joueur1
     *
     * @return  self
     */ 
    public function setId_joueur1($id_joueur1)
    {
        $this->id_joueur1 = $id_joueur1;

        return $this;
    }

    /**
     * Get the value of id_joueur2
     */ 
    public function getId_joueur2()
    {
        return $this->id_joueur2;
    }

    /**
     * Set the value of id_joueur2
     *
     * @return  self
     */ 
    public function setId_joueur2($id_joueur2)
    {
        $this->id_joueur2 = $id_joueur2;

        return $this;
    }

    /**
     * Get the value of id_joueur3
     */ 
    public function getId_joueur3()
    {
        return $this->id_joueur3;
    }

    /**
     * Set the value of id_joueur3
     *
     * @return  self
     */ 
    public function setId_joueur3($id_joueur3)
    {
        $this->id_joueur3 = $id_joueur3;

        return $this;
    }

    /**
     * Get the value of id_joueur4
     */ 
    public function getId_joueur4()
    {
        return $this->id_joueur4;
    }

    /**
     * Set the value of id_joueur4
     *
     * @return  self
     */ 
    public function setId_joueur4($id_joueur4)
    {
        $this->id_joueur4 = $id_joueur4;

        return $this;
    }

    /**
     * Get the value of id_joueur5
     */ 
    public function getId_joueur5()
    {
        return $this->id_joueur5;
    }

    /**
     * Set the value of id_joueur5
     *
     * @return  self
     */ 
    public function setId_joueur5($id_joueur5)
    {
        $this->id_joueur5 = $id_joueur5;

        return $this;
    }
}