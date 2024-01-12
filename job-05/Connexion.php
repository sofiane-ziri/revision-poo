<?php

 
abstract class Connexion{
    protected $bdd;
    private $host;
    private $dbname;
    private $dbUser;
    private $dbPass;

    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'draft-shop';
        $this->dbUser = 'root';
        $this->dbPass = 'root';

        try {
            $this->bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->dbUser, $this->dbPass);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->bdd->exec("set names utf8");

        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
            die();
        }
    }
    }

?>