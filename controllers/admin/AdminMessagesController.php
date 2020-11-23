<?php

require_once('./models/admin/AdminMessagesModel.php');

class AdminMessagesController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminMessagesModel();

    }

    public function listMessages() {
        AuthController::islogged();

        $datas = $this->driver->getMessages();
        require_once('./views/admin/messages.php');
    }

    public function seeMessage() {
        AuthController::islogged();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->driver->getMessages($id); 
            require_once('./views/admin/detailMessage.php');
        }
    }

    public function removeMessage() {
        AuthController::islogged();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $nb = $this->driver->delMessage($id);
            if($nb){
                header('location:index.php?action=messages');
            }
        }
    }
}