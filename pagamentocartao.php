<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAGAMENTO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/pagamentocartao.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary navbarcss">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.html">
        <img id="logo" src="imagelogos/logo3.png" alt="" width="95">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 box-link">
          <li class="nav-item">
            <a class="nav-link active link-navbar" aria-current="page"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active link-navbar" href=""></a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <a href="">
            <img id="user-icon" src="imagelogos/user-icon.png" width="50px" alt="">
          </a>
          <input class="form-control me-2" type="search" placeholder="o que você procura ?" aria-label="Search">
          <button class="btn btn-outline-success pesquisar" type="submit">Procurar</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="fundo">
      <div class="imagem-cartao">
        <img src="imagelogos/cartoes-paginapagamentocartao.png" alt="">
      </div>


      <div class="inf">
        <input id="titular" type="text" required="required">
        <span>NOME DO TITULAR</span>
      </div>
      <div class="inf">
        <input id="num-card" type="text" required="required">
        <span>NÚMERO DO CARTÃO</span>
      </div>
      <div class="inf">
        <input id="data" type="text" required="required">
        <span>DATA DE VALIDADE</span>
      </div>
      <div class="inf">
        <input id="cod-seguranca" type="text" required="required">
        <span>CVC</span>
      </div>

      <div class="botao-confirmar">
        <button class="botao">CONFIRMAR COMPRA</button>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
  <script src="js/pagamentocard.js"></script>
  
</body>

</html>