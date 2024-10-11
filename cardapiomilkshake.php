<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MILK SHAKES</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cardapioproduto.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary navbarcss">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="imagelogos/logo3.png" alt="" width="95" style="  border-top-left-radius: 2rem; border-top-right-radius: 2rem; ">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 box-link">
          <li class="nav-item">
            <a class="nav-link active link-navbar" aria-current="page" href="cadastro.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active link-navbar" href="index.html">pagina inicial</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="o que você procura ?" aria-label="Search">
          <button class="btn btn-outline-success pesquisar" type="submit">Procurar</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="todos-cards-produtos" data-aos="fade-right" data-aos-duration="2500">
    <div class="card-produtos">
      <div class="content-inside">
        <div class="img-content">
          <img src="imagemilkshake/milkmorango.png" alt="" style="width: 100%; height: 100%;  border-top-left-radius: 2rem; border-top-right-radius: 2rem; ">
        </div>
        <h3 style="text-align: center;">CHEESE CAKE</h3>
        <h4 style="text-align: center; color: grey; font-size: 19px;">COM FRUTAS VERMELHAS</h4>
        <h3>R$25,00</h3>
        <div class="button-buy">
          <a href="carrinho.php">
            <button class="btn-comprar">COMPRAR</button>
          </a>
        </div>
      </div>
    </div>

    <div class="card-produtos">
      <div class="content-inside">
        <div class="img-content">
          <img src="imagemilkshake/milkpistache.png" alt="" style="width: 100%; height: 100%;  border-top-left-radius: 2rem; border-top-right-radius: 2rem; ">
        </div>
        <h3 style="text-align: center;">PISTACHE</h3>
        <h4 style="text-align: center; color: grey; font-size: 19px;">AUTÊNTICO DO PISTACHE</h4>
        <h3>R$25,00</h3>
        <div class="button-buy">
          <a href="carrinho.php">
            <button class="btn-comprar">COMPRAR</button>
          </a>
        </div>
      </div>
    </div>

    <div class="card-produtos">
      <div class="content-inside">
        <div class="img-content">
          <img src="imagemilkshake/milkavela.png" alt="" style="width: 100%; height: 100%;  border-top-left-radius: 2rem; border-top-right-radius: 2rem;">
        </div>
        <h3 style="text-align: center;">AVELÃ</h3>
        <h4 style="text-align: center; color: grey; font-size: 19px;">FEITO COM NUTELLA</h4>
        <h3>R$25,00</h3>
        <div class="button-buy">
          <a href="carrinho.html">
            <button class="btn-comprar">COMPRAR</button>
          </a>
        </div>
      </div>
    </div>

  </div>

  <div class="footer">
    <div class="footer-interior">
      <h1 class="titulocontatos">NOSSOS CONTATOS E SERVIÇOS</h1>
      <a href="https://www.instagram.com/accounts/login/">
        <img src="imagelogos/instagram.png" class="rede-social" alt="">
      </a>

      <a href="index.html">
        <img src="imagelogos/facebook2.png" class="rede-social" alt="">
      </a>

      <h4 class="contatos">TELEFONE:(19)99892-8999</h4>
      <h4 class="contatos">realegelatosrc@gmail.com</h4>
      <h3 class="contatos">Abertos de segunda-Feira a sábado <br> Das 12:00h até as 21:00h <br> Entregas só até as
        17:00h
      </h3>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/produtos.js"></script>
</body>

</html>