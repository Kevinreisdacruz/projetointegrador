<?php include 'navbar.php' ?>

  <form action=''>
    <div id='container-login'>
      <div class='caixa-cadastro' id='caixalogin'>
        <h1>Login</h1>
        <input type='text' placeholder='E-mail'>
        <br><br>

        <input type='password' id='senha' placeholder='Senha'>
        <i class='bi bi-eye-fill' id='btn-senha' onclick='mostrarsenha()'></i>
        <br><br>
        <input type='text' id='fone' placeholder='Telefone'>

        <br><br>
        <a href='index.php'>
          <button>CRIAR CONTA</button>
        </a>
        <br><br>
        <a href='index.php'>
          <button>ENTRAR</button>
        </a>

        <h6>Não desejo me conectar agora</h6>
      </div>
    </div>
  </form>


  <div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>
    <div class='carousel-inner'>
      <div class='carousel-item active' data-bs-interval='4000'>
        <img src='imagecarrosel/sei-la.png' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item' data-bs-interval='4000'>
        <img src='imagecarrosel/saboresnvsmilks.png' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item' data-bs-interval='4000'>
        <img src='imagecarrosel/pisinicial.png' class='d-block w-100' alt='...'>
      </div>
    </div>
  </div>

  <div class='card-container' data-aos='fade-right'>
    <div class='card'>
      <img src='imagemassa/massa-cardapio.png' alt=''>
      <div class='card-content'>
        <h3>massa</h3>
        <p>Conhecido como sorvete artesanal, Sobremesa cremosa e saborosa,feita com igredientes frescos e
          naturais.Preparados em pequenos lotes para garantir qualidade, sabores excepcionais, frescor e suavidade a
          clientela.E um verdadeiro deleite para os amantes de sobremesa.
        </p>
        <a href='cardapiomassa.php' class='btn'>VEJA MAIS</a>
      </div>
    </div>

    <div class='card'>
      <img src='imagemilkshake/milkshake-cardapio.png' alt=''>
      <div class='card-content'>
        <h3>milkshake</h3>
        <p>Milkshakes cremosos e refrescantes,feito com massa de morango, chocolate,creme e baunilha com igredientes
          saborosos. Com a consistência espessa e suave,sera feito em copos altos com canudos largos, com chantilly em
          cima,seguido com suas caldas.
        </p>
        <a href='cardapiomilkshake.php' class='btn'>VEJA MAIS</a>
      </div>
    </div>

    <div class='card'>
      <img src='imagepicoles/picole-cardapio.png' alt=''>
      <div class='card-content'>
        <h3>picoles</h3>
        <p>É deliciosa sobremesa que transforma sabores em momentos refrescantes. Com sua forma icônica e cores
          vibrantes, ele lhe promete uma sensação unica com um frescor incrivel a cada mordida com seu exterior crocante
          ou suave.
        </p>
        <a href='cardapiopicoles.php' class='btn'>VEJA MAIS</a>
      </div>
    </div>
  </div>


  <div class='container'>
    <div class='fundosobrenos' data-aos='zoom-in'>
      <h1>SOBRE NÓS</h1>
      <div class='escrita'>
        <h3 id='frase'>BEM-VINDO À NOSSA SORVETERIA ITALIANA, ONDE TRADIÇÃO E SABOR SE ENCONTRAM PARA CRIAR MOMENTOS
          SABOROSOS PARA <br><br> SUA
          VIDA. ESTAMOS LOCALIZADOS EM RIO CLARO-SP,CENTRO, VENHA VISITAR NOSSA SORVETERIA ITALIANA ,ONDE CADA
          SORVETE É UMA OBRA PRIMA. <br><br> FEITA COM PAIXÃO E OS MELHORES INGREDIENTES EM NOSSO ESPAÇO ACOLHEDOR E
          ENCANTADOR, VOCÊ DESCOBRIRÁ UMA VARIEDADE DE SABORES QUE CAPTURAM A ESSÊNCIA DAS <br><br> SORVETERIAS
          ITALIANAS. DESDE E OS
          CLASSICOS COMO PISTACHE, CADA SORVETE NOSSO É PREPARADO DIARIAMENTE PARA GARANTIR FRESCOR E QUALIDADE
          INCOMPARÁVEIS. </h3>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>