<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ProjetoSoftware/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/homecss.css">

    <title>Planeta Festival-inserir</title>
</head>
<body>
    
    <?php
    //dados de conexão

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ProjetoSoftware";

    //conectar ao banco de dados

    try {
        $conn = new mysqli($hostname, $username, $password, $database);
    } catch (Exception $e) {
        die("Erro ao conecar: " . $e->getMessage());
    }
    //Recebendo variáveis do formulário 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];


    if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($rua) || empty($numero) || empty($bairro) || empty($cidade)):

    ?>

        <div class="alert alert-warning" role="alert">
            Dados não podem ficar vazios!
        </div>

    <?php
    endif;



    //criar comando
    $sql = "INSERT INTO cadastro VALUES(NULL, '$nome', '$email','$senha','$cpf','$rua','$numero','$bairro','$cidade')";
    //executar comando
    $resultado = $conn->query($sql);
    if ($resultado != 0) :
    ?>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Erro ao Inserir Dados!
        </div>
    <?php endif; ?>
    <button type="button" class="btn btn-danger" onclick="history.back()">Danger</button>
</body>
</html>