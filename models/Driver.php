<?php

abstract class Driver {

    private static $bd;

    protected function getRequest($sql, $params=null) {
        $resultat = self::getBD()->prepare($sql);
        $resultat->execute($params);
        return $resultat;
    }

    private static function getBd() {
        if(self::$bd == null) {
            self::$bd = new PDO('mysql:host=localhost;dbname=tc_le_mee' , 'root' , '');
            self::$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$bd;
    }
}