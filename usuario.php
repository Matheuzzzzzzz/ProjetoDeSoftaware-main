<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$database = "ProjetoSoftware";

$resultadoSelect = 0;

session_start();
$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->error) {
  die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM cadastro WHERE id = $id";
$resultadoSelect = $mysqli->query($sql);
$user = $resultadoSelect->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de usuario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="homecss.css">
  <style>
  </style>
</head>

<body>

  <ul class="listnav">
    <li>
      <div class="dropdown">
        <a href="">
          <svg id="svg01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
          </svg>
        </a>
        <ul class="droplist">
          <li><a href="">Produtos Festivos</a></li>
          <li><a href="cadastroespaco.php">Espaços Festivos</a></li>
          <li><a href="cadastrocliente.php">Cadastro Cliente</a></li>
          <li><a href="usuario.php">Pagina de Usuário</a></li>
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
          <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
        </svg></a>
    </li>
  </ul>

  <section class="profile-container">



    <div class="profile">
      <img src="https://th.bing.com/th/id/R.263f265f72625c82a7bd9da17e4e4079?rik=Rt72LrrXmqkV9w&riu=http%3a%2f%2fdavidlanau.com%2fwp-content%2fuploads%2fver-id-usuario-wordpress.png&ehk=XAm7KoFspF5NwcvklaWUrHuBuvbOC8n1nUNVwT3I6ME%3d&risl=&pid=ImgRaw&r=0" ?>
      <?php foreach ($user as $key => $value) : ?>
        <h1><?= $key ?> : <?= $value ?></h1>
      <?php endforeach; ?>

      <a href="atualiza.php" class="btn">Atualizar Perfil</a>
      <a href="home.php" class="delete-btn">Sair</a>
      <div class="flex-btn">
        <a href="Login.php" class="option-btn">login</a>
        <a href="cadastrocliente.php" class="option-btn">registrar</a>
      </div>
    </div>

  </section>
  <?php
  ?>
</body>

</html>
