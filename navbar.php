
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REALE GELATO</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cardapiomassa.css">
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cardapiomilkshake.css">
    <link rel="stylesheet" href="css/cardapiopicoles.css">
</head>

  <body>

        <form action="">
            <div id="container-login">
                <div class="caixa-cadastro" id="caixalogin">
                    <h1>Login</h1>
                    <input type="text" placeholder="E-mail">
                    <br><br>

                    <input type="password" id="senha" placeholder="Senha">
                    <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarsenha()"></i>
                    <br><br>
                    <input type="text" id="fone" placeholder="Telefone">

                    <br><br>
                    <a href="index.html">
                        <button>CRIAR CONTA</button>
                    </a>
                    <br><br>
                    <a href="index.html">
                        <button>ENTRAR</button>
                    </a>

                    <h6>Não desejo me conectar agora</h6>
                </div>
            </div>
        </form>

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


        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        <script src="js/pginicial.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
  </body>