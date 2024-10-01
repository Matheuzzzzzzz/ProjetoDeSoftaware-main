<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homecss.css">
  <title>Planeta Festival</title>
  <style>
    h5{
      color: white !important;
    }
   main{
    margin-top: 50px;
    display: flex;
    flex-wrap: wrap;
    
   }
  </style>
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
                    
                            <li><a href="cadastroespaco.php">Espaços Festivos</a></li>
                            <li><a href="cadastrocliente.php">Cadastro Cliente</a></li>
                            <li><a href="usuario.php">Pagina de Usuário</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <h1><img id="astronalta" src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt=""><a href="index.php">Planeta Festival</a></h1>
                </li>

                <li>
                <form class="search-container" action="busca.php" method="get">
            <input type="text" name="busca" id="search-input" class="search-input" placeholder="Digite sua pesquisa...">
            <button type="submit">Pesquisar</button>
          </form>
                </li>
                <li>
                    <a href="Login.php"><svg id="svg02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        
                        </svg></a>
                </li>
            </ul>

        </nav>
    </header>

  <?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "ProjetoSoftware";


  try {
    $conn = new mysqli($hostname, $username, $password, $database);
  } catch (Exception $e) {
    die("Erro ao conectra: " . $e->getMessage());
  }

  session_start();
  if (!isset($_SESSION['id'])) {
    die("Você não está logado.<p><a href='index.php'>Logar</a></p>");
  }

  $id_usuario = $_SESSION['id'];

  $busca = $_GET['busca'];



  // Obter parâmetros de busca e ordenação
  $busca = isset($_GET['busca']) ? $_GET['busca'] : '';

  $sql = "SELECT * FROM cadastroespaco WHERE nomeespaco LIKE '%$busca%' ORDER BY id ";
  // Preparar a consulta
  $resultado = $conn->query($sql);

  // Verificar se há resultados
  if ($resultado->num_rows > 0) {
    while ($produto = $resultado->fetch_assoc()) {
  ?>
  <main>
      <div class="card m-3" style="width: fit-content;">
       <picture>
          <img src="<?php echo $produto['imagem'] ?>" class="card-img-top" alt="produto">
        </picture>

        <div class="card-body">
          <h5 class="card-title"><?= $produto['nomeespaco'] ?></h5>
          <p class="card-text"><?= $produto['descricao'] ?></p>
          <a href="exibir.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Ver Espaço</a>
        </div>
      </div>
    </main>
  <?php

    }
  } else {
    echo "<p>Nenhum espaço encontrado.</p>";
  }
  

  $resultado = $conn->query($sql);


  ?>

</body>

</html>
