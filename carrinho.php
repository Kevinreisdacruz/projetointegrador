<?php
  include'navbar.php'
?>

  <div class="container">
    <div class="carrinho">
      <div class="cabecalho-carrinho">
        <a href="index.php">
          <button>
            <i class="bi bi-arrow-left-short"></i>
          </button>
        </a>
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
              <div class="contador">
                <i class="bi bi-dash"></i>
                <span>1</span>
                <i class="bi bi-plus"></i>
              </div>
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
              <div class="contador">
                <i class="bi bi-dash"></i>
                <span>1</span>
                <i class="bi bi-plus"></i>
              </div>
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
        <button class="comprar"> Finalizar Compra</button>
      </a>

      <a href="index.php">
        <button class="comprar">Adicionar</button>
      </a>
    </div>
  </div>

<?php
  include'footer.php'
?>