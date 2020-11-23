<?php

class Actu {
    private $id_article;
    private $titre;
    private $visuel;
    private $date_parution;
    private $resume;
    private $texte;
    private $illu1;
    private $illu2;
    private $id_categorie;
    

    /**
     * Get the value of id_article
     */ 
    public function getId_article()
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     *
     * @return  self
     */ 
    public function setId_article($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

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
     * Get the value of date_parution
     */ 
    public function getDate_parution()
    {
        return $this->date_parution;
    }

    /**
     * Set the value of date_parution
     *
     * @return  self
     */ 
    public function setDate_parution($date_parution)
    {
        $this->date_parution = $date_parution;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of texte
     */ 
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set the value of texte
     *
     * @return  self
     */ 
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get the value of illu1
     */ 
    public function getIllu1()
    {
        return $this->illu1;
    }

    /**
     * Set the value of illu1
     *
     * @return  self
     */ 
    public function setIllu1($illu1)
    {
        $this->illu1 = $illu1;

        return $this;
    }

    /**
     * Get the value of illu2
     */ 
    public function getIllu2()
    {
        return $this->illu2;
    }

    /**
     * Set the value of illu2
     *
     * @return  self
     */ 
    public function setIllu2($illu2)
    {
        $this->illu2 = $illu2;

        return $this;
    }

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
}