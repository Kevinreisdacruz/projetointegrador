<?php

include_once 'funcoes.php';
include_once 'configs/database.php';
include_once 'objetos/clientefinal.php';

if(isset($_POST['email_cadastrar'])&& isset($_POST['senha_cadastrar'])&& isset($_POST['telefone_cadastrar'])&& isset($_POST['cadastrar'])){
  $database = new database();
  $db = $database->conectar();
  $cliente = new cliente($db);
  $cliente->email = $_POST['email_cadastrar'];
  $cliente->senha = $_POST['senha_cadastrar'];
  $cliente->telefone = $_POST['telefone_cadastrar'];
  $cliente->cadastrarCliente();
}

?>

<!doctype html>
<html lang='pt-br'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>REALE GELATO</title>
  <link href='https://unpkg.com/aos@2.3.1/dist/aos.css' rel='stylesheet'>
  <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/cardapioproduto.css">
  <link rel="stylesheet" href="css/formadepagamento.css">
  <link rel="stylesheet" href="css/obg.css">
  <link rel="stylesheet" href="css/cep.css">
  <link rel="stylesheet" href="css/carrinho.css">
  <link rel='stylesheet' href='css/style.css'>
  <link rel="stylesheet" href="css/alteracoes.css">
  <link rel="stylesheet" href="css/footer.css">
  <!-- EM PRODUCAO NOVO FOOTER -->
  <link rel="stylesheet" href="css/footer2.css">
  <!-- EM PRODUCAO NOVO FOOTER -->

</head>

<body>

<!-- aqui a baixo popup de login -->


  <form action='' method="post">
    <div id='container-login'>
      <div class='caixa-login' id='caixalogin'>
        <h1 style="font-weight: bold;">Login</h1>
        <input name="email" type='email' placeholder='E-mail'>
        <br><br>

        <input name="senha" type='password' id='senha' placeholder='Senha'>
        <i class='bi bi-eye-fill' id='btn-senha' onclick='mostrarsenha()'></i>
        <br><br>

        <a href='index.php'>
          <button>ENTRAR</button>
        </a>
        <br><br>

        <h6 class="criar">Não tem uma conta?</h6>
        <a href="index.php" style="color: black;"><h6>Não desejo me conectar agora</h6></a>
      </div>
    </div>
  </form>

  
  <!-- aqui termina o popup de login -->


  <!-- aqui a baixo e o html do popup de exclusao de conta -->

  <div id="container-excluir">
  <div class="fundo-excluir" id="funcoexclusao">

    <div class="titulo-excluir">
      <div class="escrita-excluir">
        <h2 style="font-weight: bold;">EXCLUIR CONTA</h2>
      </div>
    </div>

    <div class="detalhes-exclusao">
      <h5>PARA EXCLUIR SUA CONTA <br> INFORME SUAS INFORMAÇÕES DE CADASTRO</h5>
    </div>

    <div class="inf-excluir">
      <input type="text" required='required' placeholder="CONFIRME SEU EMAIL">
    </div>
    <div class="inf-excluir">
      <input type="text" required='required' placeholder="CONFIRME SUA SENHA">
    </div>
    <div class="inf-excluir">
      <input type="text" required='required' placeholder="CONFIRME SEU TELEFONE">
    </div>

    <div class="botoes-excluir">
      <a href="index.php">
        <button class="btn-excluir">EXCLUIR</button><br>
      </a>
      <a href="index.php">
        <button class="btn-esquecer-exclusao">CANCELAR A EXCLUSÃO</button>
      </a>
    </div>

  </div>
</div>

<!-- html da exclusao de cadastro termina aqui -->



<!-- html de alteracao de cadstro comeca aqui -->

<div id="container-alterar">
    <div class="box-alterar">
        <div class="fundo-alterar">

            <div class="titulo-alterar">
                <div class="escrita-alterar">
                    <h2 style="font-weight: bold;">ALTERAR INFORMAÇÕES</h2>
                </div>
            </div>

            <div class="inf-alteracoes">
                <input type="text" placeholder="EMAIL">
            </div>
            <div class="inf-alteracoes">
                <input type="text" placeholder="SENHA">
            </div>
            <div class="inf-alteracoes">
                <input type="text" placeholder="TELEFONE">
            </div>

            <div class="botoes-alteracoes">
              <a href="index.php">
                <button class="btn-alteracoes" style="font-weight: bold;">CONFIRMAR ALTERACÕES</button><br>
              </a>
              <a href="index.php">
                <button class="btn-esquecer-alteracoes" style="font-weight: bold;">CANCELAR ALTERACÕES</button>
              </a>
            </div>

        </div>
    </div>
</div>

<!-- html de alteracao de cadastro termina aqui -->


  

  <nav class="navbar navbar-expand-lg bg-body-tertiary navbarcss">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php">
        <img id="logo" src="imagelogos/logo3.png" alt="" width="95">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 box-link">
          <li class="nav-item">
            <a id="login" class="nav-link active link-navbar" aria-current="page">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active link-navbar" href="carrinho.php">Carrinho</a>
          </li>
        </ul>

        <img src="imagelogos/user-icon.png" alt="" style="width: 33px; margin-right: 1rem;">

        <div class="dropdown"> 
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #A8D2A0; border: solid 0px;margin-right: 1rem;">
            PERFIL
          </button>
          <ul class="dropdown-menu">
            <li><button id="alteracao" class="dropdown-item" type="button">INFORMAÇÕES E ALTERAÇÕES</button></li>
            <li><button id="exclusao" class="dropdown-item" type="button">EXCLUIR CONTA</button></li>
            <li><button class="dropdown-item" type="button"></button></li>
          </ul>
        </div>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="o que você procura ?" aria-label="Search">
          <button class="btn btn-outline-success pesquisar" type="submit">Procurar</button>
        </form>
      </div>
    </div>
  </nav>