<?php

class cliente{
    public $id;
    public $email;
    public $senha;
    public $telefone;
    public $bd;


    public function __construct($bd){
        $this->bd = $bd;
    }

    public function todosClientes(){
        $sql = "SELECT * FROM  clientefinal";
        $resultado = $this->bd->query($sql);
        $resultado->execute();
        $resultado = $resultado-> fetchAll(PDO::FETCH_OBJ);

        return $resultado;
    }

    public function cadastrarCliente(){
        $sql = "INSERT INTO  clientefinal(email, senha, telefone) values(:email, :senha, :telefone)";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindparam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindparam(':senha', $this->senha, PDO::PARAM_STR);
        $stmt->bindparam(':telefone', $this->telefone, PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}
