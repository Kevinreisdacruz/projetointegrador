<?php
include 'navbar.php'
?>

<div class="box-carrinho">
  <div class="interior-carrinho shadow">
    <div class="produtos-carrinho">
      <div class="image-produto">
        <img src="imagemassa/massamenta-carrinho.png" alt="">
        <h6 style="font-weight: bold; padding-left: 1rem;">SORVETE  MASSA DE MENTA</h6> 
      </div><br>
      

      <div class="image-produto">
        <img src="imagemilkshake/milkpistache-carrinho.png" alt="">
        <h6 style="font-weight: bold; padding-left: 1rem;">MILKSHAKE DE PISTACHE</h6> 
        <hr>
      </div><br>
      

      <div class="image-produto">
        <img src="imagepicoles/picolechocolate-carrinho.png" alt="">
        <h6 style="font-weight: bold; padding-left: 1rem;">PICOLE DE CHOCOLATE</h6> 
      </div><br>
      

      
    </div>
    <hr style="width: 100%;">

    <div class="resumo">
      <h4 style="font-weight: bold; ">RESUMO DO PEDIDO</h4>

      <div class="resumo-content">
        <h5 style="font-weight: bold;">VALOR TOTAL: R$80,90 </h5>
        <h5></h5>
      </div>

      <div class="botoes">
        <a href="./pagamento.php">
        <button class="finalizar-compra shadow-sm" style="font-weight: bold; color: white;">FINALIZAR COMPRA</button><br>
        </a>
        <a href="index.php#scroll" >
        <button class="adicionar-produto shadow-sm" style="font-weight: bold; color: white;">ADICIONAR MAIS PRODUTOS</button>
        </a>
      </div>

    </div>
  </div>
</div>

<?php
include 'footer.php'
?>