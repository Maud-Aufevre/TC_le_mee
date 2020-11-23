<?php

require_once('./models/Driver.php');
require_once('./models/Messages.php');


class PublicModel extends Driver{

    public function newMsg(Messages $msg) {
        $sql = "INSERT INTO messages(nom,prenom,tel,email,message) VALUES(:nom,:prenom,:tel,:email,:message)";
        $res = $this->getRequest($sql,['nom'=>$msg->getNom(),'prenom'=>$msg->getPrenom(),'tel'=>$msg->getTel(),'email'=>$msg->getEmail(),'message'=>$msg->getMessage()]);
        
        return $res;
    }
}