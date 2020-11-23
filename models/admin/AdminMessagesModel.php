<?php

require_once('./models/Messages.php');
require_once('./models/Driver.php');

class AdminMessagesModel extends Driver {

    public function getMessages($id=null) {
        if($id==null){
            $sql = "SELECT * FROM messages ORDER BY date_reception DESC";
            $res = $this->getRequest($sql);
        }else{
            $sql = "SELECT * FROM messages WHERE id_message=?";
            $res = $this->getRequest($sql,[$id]);
        }
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $donnees = [];

        foreach($rows as $row) {
            $msg = new Messages();
            $msg->setId_message($row->id_message);
            $msg->setDate_reception($row->date_reception);
            $msg->setNom($row->nom);
            $msg->setPrenom($row->prenom);
            $msg->setTel($row->tel);
            $msg->setEmail($row->email);
            $msg->setMessage($row->message);
            array_push($donnees,$msg);
        }
        return $donnees;
    }

    public function delMessage($id) {
        $sql = "DELETE FROM messages WHERE id_message=?";
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();
        return $nb;
    }
}