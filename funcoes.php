<?php

include_once 'configs/database.php';
include_once 'objetos/clientefinal.php';

function cadastro(){
    global $clienteCadastrar;
    $banco = new database();
    $bd = $banco ->conectar();
    $a = new cliente($bd);
    $a  -> email = $_POST['email'];
    $a  -> senha = $_POST['senha'];
    $a  -> telefone = $_POST['telefone'];
    $clienteCadastrar = $a->cadastrarCliente();
}