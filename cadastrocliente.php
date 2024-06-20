<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="homecss.css">

  <title>Planeta Festival-cadastro</title>
</head>

<body>
  <header>
    <nav>
      <ul class="listnav">
        <li>
          <div class="dropdown">
            <a href="">
              <svg id="svg01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
              </svg>
            </a>
            <ul class="droplist">
              <li><a href="">Produtos Festivos</a></li>
              <li><a href="cadastroespaco.php">Espaços Festivos</a></li>
              <li><a href="cadastrocliente.php">Cadastro Cliente</a></li>
              <li><a href="">Cadastro de Lojas/Vendas</a></li>
            </ul>
          </div>
        </li>
        <li>
          <h1><img id="astronalta" src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt=""><a href="index.php">Planeta Festival</a></h1>
        </li>

        <li>
          <div class="search-container">
            <input type="text" id="search-input" class="search-input" placeholder="Digite sua pesquisa...">
            <button class="search-button" onclick="search()">Pesquisar</button>
          </div>
        </li>
        <li>
          <a href="Login.php"><svg id="svg02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg></a>
        </li>
      </ul>

    </nav>
  </header>
  <div id="meio">
    <div id="caixacentral">
      <div id="CadastroCliente"> CADASTRO CLIENTE </div>
      <form action="insert.php" method="POST">
        <div class="form-container">
          <div class="input">
            <label for="nome" class="form-label">Nome completo:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome completo" required>
          </div>
          <div class="input">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" nrequired>
          </div>
          <div class="input">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
          </div>
          <div class="input">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" maxlength="14" oninput="formatCPF(this)" required>
          </div>
        </div>

        <div class="form-container">
          <div class="input">
            <label for="rua" class="form-label">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" required>
          </div>
          <div class="input">
            <label for="numero" class="form-label">Número da casa:</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número da casa" required>
          </div>
          <div class="input">
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o nome do bairro" required>
          </div>
          <div class="input">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da cidade" required>
          </div>
        </div>
        <button id="btnconfig" type="submit" class="btn btn-primary">Inserir</button>
        <a href="dados.php" class="btn btn-primary">Ver Dados</a>
      </form>
    </div>
  </div>

 
    <script src="../TrabalhoProjetoDeSoftaware-main-2/ProjetoSoftware/js/script.js"></script>
</body>

</html>
