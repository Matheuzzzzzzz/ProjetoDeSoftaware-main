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

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    die("Você não está logado.<p><a href='index.php'>Logar</a></p>");
}

$id_usuario = $_SESSION['id'];
$usuario = $_SESSION['nome'];

$busca = $_GET['busca'];



// Obter parâmetros de busca e ordenação
$busca = isset($_GET['busca']) ? $_GET['busca'] : '';


// Preparar a consulta
$resultado = $conn->query($sql);

// Verificar se há resultados
if ($resultado->num_rows > 0) {
    while($produto = $resultado->fetch_assoc()) {
        ?>
            <div class="card m-3">
                <picture>
                    <img src="<?php echo $produto['link-img'] ?>" class="card-img-top" alt="produto">
                </picture>
                
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produto['produto'] ?></h5>
                    <p class="card-text"><?php echo $produto['descricao'] ?></p>
                    <a href="produto.php?id=<?php echo $produto['id'] ?>" class="btn btn-primary">Ver Produto</a>
                </div>
            </div>
    <?php

    }
} else {
    echo "Nenhum produto encontrado.";
}


$resultado = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeta Festival</title>
</head>
<body>
    
</body>
</html>
