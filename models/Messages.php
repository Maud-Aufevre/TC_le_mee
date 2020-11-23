<?php

class Messages {
    private $id_message;
    private $date_reception;
    private $nom;
    private $prenom;
    private $tel;
    private $email;
    private $message;

    /**
     * Get the value of id_message
     */ 
    public function getId_message()
    {
        return $this->id_message;
    }

    /**
     * Set the value of id_message
     *
     * @return  self
     */ 
    public function setId_message($id_message)
    {
        $this->id_message = $id_message;

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
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of date_reception
     */ 
    public function getDate_reception()
    {
        return $this->date_reception;
    }

    /**
     * Set the value of date_reception
     *
     * @return  self
     */ 
    public function setDate_reception($date_reception)
    {
        $this->date_reception = $date_reception;

        return $this;
    }
}