<?php

class Db{

    private static ?PDO $pdo = null;
    public static function getConnecte(){

        if(self::$pdo === null){
        self::$pdo = new PDO("mysql:host=localhost;dbname=mini-mvc;","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
        
    }

}