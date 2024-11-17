<?php

class database{
    private $host = "localhost: 3306";
    private $banco = "reale_gelato";
    private $usuario = "root";
    private $senha = "kevinreis2008";
    private $con;


    public function conectar(){
        $this-> con = null;
        
        try{
            $this-> con = new PDO("mysql:host=$this->host; dbname=$this->banco", $this->usuario,$this->senha);
        }catch(PDOException $e){
            echo "erro". $e-> getMessage();
        }
        return $this-> con;
    }
};
