<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="homecss.css">

    <title>Planeta Festival</title>
</head>
<style>
    *{
        color: white;
    }
</style>
<body>
<div class="main"></div>
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



    $sql = "SELECT * FROM cadastro ORDER BY ID";

    $resultado = $conn->query($sql);
    ?>
    <div class="container">
        <div class="border p-3">
            <h1 class="text-center">Cadastro Cliente</h1>
            <a href="../php/cadaastrocliente.php" class="btn btn-success">Ínicio</a>
            <?php
            foreach ($resultado as $linha) :

            ?>
                <table class="table table-success table-striped-columns table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">nome</th>
                            <th scope="col">email</th>
                            <th scope="col">senha</th>
                            <th scope="col">cpf</th>
                            <th scope="col">rua</th>
                            <th scope="col">numero</th>
                            <th scope="col">bairro</th>
                            <th scope="col">cidade</th>
                            <th scope="col" class="text-center" colspan="2">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $linha["id"] ?></th>
                            <td><?= $linha['nome'] ?></td>
                            <td><?= $linha['email'] ?></td>
                            <td><?= $linha['senha'] ?></td>
                            <td><?= $linha['cpf'] ?></td>
                            <td><?= $linha['rua'] ?></td>
                            <td><?= $linha['numero'] ?></td>
                            <td><?= $linha['bairro'] ?></td>
                            <td><?= $linha['cidade'] ?></td>
                            <td><a href="atualiza.php?id=<?= $linha['id']?>" class="btn btn-warning padding">Atualizar<i class="bi bi-pencil-square"></i></a></td>
                            <td><a href="delete.php?id=<?= $linha['id']?>" class="btn btn-danger">Deletar<i class="bi bi-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            endforeach;

            unset($_POST, $resultado, $resultado, $resultadoInsert);
            $conn->close();
            ?>
        </div>

    </div>


</body>

</html>