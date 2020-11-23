<?php

require_once('./models/admin/AdminUserModel.php');

class AdminUserController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminUserModel();
    }

    public function login() {
        if(isset($_POST['connexion'])) {
            // var_dump($_POST); die;
            if(empty($_POST['login']) || empty($_POST['pass'])) {
                $error = "Vous devez renseigner tous les champs pour vous connecter";
            }else {
                $login = trim(htmlentities(addslashes($_POST['login'])));
                $pass = md5(trim(htmlentities(addslashes($_POST['pass']))));
                $res = $this->driver->signIn($login, $pass);
                if ($res->rowCount()) {
                    $row = $res->fetch(PDO::FETCH_OBJ);
                    session_start();
                    $_SESSION['Auth'] = $row;
                    header('location:index.php?action=actus');
                } else {
                    $error = "Identifiant et mot de passe ne correspondent pas";
                }
            }
        }
        require_once('./views/admin/authentification.php');
    }
}