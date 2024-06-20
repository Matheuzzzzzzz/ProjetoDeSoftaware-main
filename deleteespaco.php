<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="homecss.css">

    <title>Planeta Festival</title>
</head>

<body>
    <div class="container">
        <div class="border p-3">
            <?php
            $resultadoSelect = 0;
            $resultadoDelete = 0;
            //dados de conexão
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "ProjetoSoftware";
            //Conectar ao banco de dados
            try {
                $conn = new mysqli($hostname, $username, $password, $database);
            } catch (Exception $e) {
                die("<div class='alert alert-danger' role='alert'>Erro

ao conectar: " . $e->getMessage() . "</div>");
            }
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                try {
                    //Criar o comando
                    $sql = "SELECT * FROM cadastroespaco WHERE id = '$id'";
                    //Executar o comando
                    $resultadoSelect = $conn->query($sql);
                } catch (Exception $e) {
                    echo "<div class='alert alert-danger' role='alert'>
Erro ao deletar
</div>";
                }
            }
            if (isset($_POST['submit'])) {
                //Criar o comando
                $sql = "DELETE FROM cadastroespaco WHERE id = {$_POST['id']}";
                try {
                    //Executar o comando
                    $resultadoDelete = $conn->query($sql);
                } catch (Exception $e) {
                    echo "<div class='alert alert-danger' role='alert'>
Erro ao processar: {$e->getMessage()}
</div>";
                }
            }
            ?>
            <?php if ($resultadoDelete) : ?>
                <div class='alert alert-success' role='success'>
                    Dado deletado com sucesso!
                </div>
                <div>
                    <a href="dadosespaco.php" class="btn btn-primary">Ver

                        dados</a>

                    <a href="cadastroespaco.php" class="btn

btn-primary">Início</a>
                </div>
            <?php else : ?>
                <h1>Dados</h1>
                <?php foreach ($resultadoSelect as $r) : ?>
                    <p>ID: <?= $r['id'] ?></p>
                    <p>Nome Espaço: <?= $r['nomeespaco'] ?></p>
                    <p>Nome Local: <?= $r['nomelocal'] ?></p>
                    <p>Tipo: <?= $r['tipo'] ?></p>
                    <p>Descrição: <?= $r['descricao'] ?></p>
                    <p>Rua: <?= $r['rua'] ?></p>
                    <p>Numero: <?= $r['numero'] ?></p>
                    <p>Bairro: <?= $r['bairro'] ?></p>
                    <p>Cidade: <?= $r['cidade'] ?></p>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

                        <input type="hidden" name="id" value="<?=

                                                                $r['id'] ?>">

                        <input type="submit" class="btn btn-primary" name="submit" value="Deletar">

                        <a href="dadosespaco.php" class="btn btn-primary">Ver

                            dados</a>

                        <a href="cadastroespaco.php" class="btn
btn-primary">Início</a>
                    </form>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php
    $conn->close();
    ?>
</body>

</html>
