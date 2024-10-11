<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CARRINHO</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/carrinho.css">
</head>

<body>
  <div class="container">
  <div class="carrinho">
    <div class="cabecalho-carrinho">
      <a href="index.php">
        <button>
          <i class="bi bi-arrow-left-short"></i>
        </button>
      </a>
      <h3>Meu Carrinho</h3>
    </div>

    <ul>
      <li class="carrinho-item">
        <div class="imagem">
          <img src="imagemassa/Belga-Crispy.png" alt="">
        </div>
        <div class="info">
          <h4>GELATO BELGA CRISPY</h4>
          <div class="detalhes">
          </div>
          <div class="preco">
            <p>R$40,00</p>
          </div>
        </div>
      </li>

      <li class="carrinho-item">
        <div class="imagem">
          <img src="imagemilkshake/milkpistache.png" alt="">
        </div>
        <div class="info">
          <h4>Milkshake Pistache</h4>
          <div class="preco">
            <p>R$25,00</p>
          </div>
        </div>
      </li>

      <li class="carrinho-item">
        <div class="imagem">
          <img src="imagepicoles/picolemorango.png" alt="">
        </div>
        <div class="info">
          <h4>Picole Morango</h4>
          <div class="preco">
            <p>R$15,90</p>
            <div class="contador">
              <i class="bi bi-dash"></i>
              <span>1</span>
              <i class="bi bi-plus"></i>
            </div>
          </div>
        </div>
      </li>
    </ul>

    <a href="pagamento.php">
      <button id="comprar">Comprar</button>
    </a>
  </div>
</div>


  <div class="footer">
    <div class="footer-interior">
      <h1 class="titulocontatos">NOSSOS CONTATOS E SERVIÇOS</h1>
      <a href="https://www.instagram.com/accounts/login/">
        <img src="imagelogos/instagram.png" class="rede-social" alt="">
      </a>

      <a href="https://www.facebook.com/?locale=pt_BR">
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
</body>

</html>