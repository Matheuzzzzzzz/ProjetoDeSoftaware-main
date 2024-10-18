<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
    <link rel="stylesheet" href="exibircss.css">
    <link rel="stylesheet" type="text/css" href="exibircss.css" media="screen" />
    <link rel="stylesheet" href="homecss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<div id="divexibir">
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


    $sql = "SELECT * FROM cadastroespaco WHERE id = {$_GET['id']}";
    $resultadoSelect = $conn->query($sql);

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
        <button id="btnconfig" type="submit" class="btn btn-primary">Alugar</button>
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
 <style> 
    /* Reset styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Main container */
main {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* Card styles */
.card {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    overflow: hidden;
}

.card-img-top {
    width: 100%;
    height: 600px; /* Adjust height as needed */
    object-fit: cover;
}

.card-body {
    padding: 15px;
}

.card-title {
    font-size: 30px;
    font-weight: bold;
}

.card-text {
    font-size: 24px;
    color: #666;
}

/* Button styles */
#btnconfig {
    width: 200px;
    height: 50px;
    background-color: #021352;
    border: none;
    text-align: center;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    color: white;
    padding: 10px 20px;
    font-weight: bold;
    transition: 1.5s;
}
#btnconfig:hover {
  background-color:hwb(227 0% 77%);  
}

 </style>
</div>

    <h1 class="localtxt"> Local </h1>

    <footer class="pe">
        <div id="borda">
            <div class="promo">
                <h3>Cadastre seu espaço para garantir clientes!</h3>

                <div>
                    <img src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt=""> <a href="">
                        Acesse Aqui
                    </a>
                </div>
            </div>
            <button id="btnentrar">Entrar</button>
            <button id="btncadastrov">Cadastra-se</button>
        </div>

        <ul id="ulfooter">
            <li>All Access
                <ul class="listbelow">
                    <li>Seu plano ideal</li>
                </ul>
            </li>
            <li>
                Planeta Festival
                <ul class="listbelow">
                    <li>Conheça</li>
                    <li>Carreiras</li>
                    <li>Sala de Imprensa</li>
                    <li>Eventos</li>
                </ul>
            </li>
            <li>Atendimento
                <ul class="listbelow">
                    <li></li>
                    <li>Entre em contato</li>
                    <li>Perguntas frequentes</li>
                </ul>
            </li>
            <li>INFORMAÇÕES
                <ul class="listbelow">
                    <li>Termos de Serviço</li>
                    <li>Política de Privacidade</li>
                    <li>Política de Cookies</li>
                    <li>Regulamentos de Promoções</li>
                    <li>Regras de Convivências Membros WeWork</li>
                    <li>Código de Conduta Fornecedores</li>
                </ul>
            </li>
        </ul>

    </footer>

</body>