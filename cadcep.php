<?php
include 'navbar.php'
?>

<div class="box">
    <div class="fundo-cep">
        <div class="titulo-cep">
            <h1 style="font-weight: bold;">ENDEREÇO</h1>
        </div>
        <div class="inf-cep">
            <input type="text" required='required'>
            <span>CEP</span>
        </div>
        <div class="inf-cep">
            <input type="text" required='required'>
            <span>BAIRRO</span>
        </div>
        <div class="inf-cep">
            <input type="text" required='required'>
            <span>RUA</span>
        </div>
        <div class="inf-cep">
            <input type="text" required='required'>
            <span>NUMERO DA CASA</span>
        </div>
        <div class="inf-cep">
            <input type="text" required='required'>
            <span>COMPLEMENTO</span>
        </div>

        <div class="confirmar-cep">
            <button class="botao-cep" style="font-weight: bold;">CONFIRMAR ENDEREÇO</button>
        </div>

    </div>
</div>

<?php
    include 'footer.php'
?>