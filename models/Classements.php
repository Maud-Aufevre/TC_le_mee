<?php

class Classements {
    private $id_classement;
    private $classement;

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
     * Get the value of classement
     */ 
    public function getClassement()
    {
        return $this->classement;
    }

    /**
     * Set the value of classement
     *
     * @return  self
     */ 
    public function setClassement($classement)
    {
        $this->classement = $classement;

        return $this;
    }
}