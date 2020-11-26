<?php
class Db
{
    private $login;
    private $pass;
    private $instance;


    public function __construct($login ='root', $pass=''){
        $this->login = $login;
        $this->pass = $pass;
        $this->connexion();
    }

    private function connexion(){
        try
        {
            $bdd = new PDO(
                'mysql:host=localhost;dbname=php_mvc',
                $this->login,
                $this->pass
            );
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->instance = $bdd;
        }
        catch (PDOException $e)
        {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
    }




}

