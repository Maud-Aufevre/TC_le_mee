<?php

class Carrousel {
    private $id_carrousel;
    private $titre;
    private $visuel;



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
     * Get the value of id_carrousel
     */ 
    public function getId_carrousel()
    {
        return $this->id_carrousel;
    }

    /**
     * Set the value of id_carrousel
     *
     * @return  self
     */ 
    public function setId_carrousel($id_carrousel)
    {
        $this->id_carrousel = $id_carrousel;

        return $this;
    }
}