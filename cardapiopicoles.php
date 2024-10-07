<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PICOLE</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cardapioproduto.css">
</head>

<body>

<?php include 'navbar.php' ?>

  <div class="all-cards" data-aos="fade-right"  data-aos-duration="2500">
    <div class="card">
      <div class="content-inside">
        <div class="img-content">
          <img src="imagepicoles/picolecoco.png" alt="">
        </div>
        <h3>COCO</h3>
        <h4>SABOR SUAVE E TRANQUILO</h4>
        <h3>R$15,90</h3>
        <div class="button-buy">
          <a href="carrinho.html">
            <button class="btn-buy">COMPRAR</button>
          </a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="content-inside">
        <div class="img-content">
          <img src="imagepicoles/picolechocolate.png" alt="">
        </div>
        <h3>CHOCOLATE</h3>
        <h4>SABOROSO, CREMOSO E DELICIOSO</h4>
        <h3>R$15,90</h3>
        <div class="button-buy">
          <a href="carrinho.html">
            <button class="btn-buy">COMPRAR</button>
          </a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="content-inside">
        <div class="img-content">
          <img src="imagepicoles/picolemorango.png" alt="">
        </div>
        <h3>MORANGO</h3>
        <h4>SABOROSO COM FRESCOR</h4>
        <h3>R$15,90</h3>
        <div class="button-buy">
          <a href="carrinho.html">
            <button class="btn-buy">COMPRAR</button>
          </a>
        </div>
      </div>
    </div>

  </div>

  <?php include "footer.php" ?>