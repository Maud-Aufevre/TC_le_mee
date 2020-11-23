<?php

require_once('./models/User.php');
require_once('./models/Driver.php');

class AdminUserModel extends Driver {
    public function signIn($login,$pass) {
        $sql = "SELECT * FROM user WHERE login = :login AND pass = :pass";
        $res = $this->getRequest($sql, ['login' => $login, 'pass' => $pass]);
        return $res;
    }
}