<?php 
    class Db {
        private $host = "localhost";
        private $user = "root";
        private $passwd = "";
        private $dbName = "practica4";
        
        //Mètodes
        protected function connect(){
            $myCon= 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($myCon, $this->user, $this->passwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } 
    }
?>