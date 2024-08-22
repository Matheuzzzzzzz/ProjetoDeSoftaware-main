<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="homecss.css">

    <title>Planeta Festival</title>
    <title>Planeta Festival-atualiza</title>
</head>
<style>

</style>


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
<div id="meio">
    <div id="caixacentral">
        <div id="CadastroCliente"> Atualizar dados</div>

        <?php

        $resultadoSelect = 0;
        $resultadoUpdate;


        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "ProjetoSoftware";


        try {
            $conn = new mysqli($hostname, $username, $password, $database);
        } catch (Exception $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }

        if (isset($_GET['id'])) {
            $sql = "SELECT * FROM cadastroespaco WHERE id = {$_GET['id']}";
            $resultadoSelect = $conn->query($sql);
        } else if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $nomeespaco = $_POST['nomeespaco'];
            $nomeespaco = $_POST['nomelocal'];
            $tipo = $_POST['tipo'];
            $descricao = $_POST['descricao'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $imagem = $_POST['imagem'];
            $sql = "UPDATE cadastroespaco SET nomeespaco = '{$nomeespaco}', nomelocal = '{$nomelocal}', tipo = '{$tipo}', descricao = '{$descricao}', rua = '{$rua}', numero = '{$numero}', bairro = '{$bairro}', cidade = '{$cidade}', imagem = '{$imagem}' WHERE id = '{$id}'";
            //$sql = "UPDATE `aluno` SET `nome`='{$nome}',`email`='{$email}' WHERE `id` = '$id'";
            $resultadoUpdate = $conn->query($sql);
        }
        ?>
        <?php if ($resultadoSelect) : ?>
            <?php foreach ($resultadoSelect as $r) : ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="mb-4">
                        <label for="exampleInputText1" class="form-label">ID Cliente:</label>
                        <input type="text" class="form-control" id="exampleInputText1" disabled value="<?= $r['id'] ?>">
                        <input type="text" name="id" value="<?= $r['id'] ?>" hidden>
                    </div>
                    <div class="form-container">
                        <div class="input">
                            <label for="nomeespaco" class="form-label">Nome do Espaço:</label>
                            <input type="text" id="nomeespaco" name="nomeespaco" class="form-control" placeholder="Digite um nome para o espaço" value="<?= $r['nomeespaco'] ?>">
                        </div>
                        <div class="input">
                            <label for="nomelocal" class="form-label">Nome do Local:</label>
                            <input type="text" class="form-control" id="nomelocal" name="nomelocal" placeholder="Digite o nome do local" value="<?= $r['nomelocal'] ?>">
                        </div>
                        <div class="input">
                            <label for="tipo" class="form-label">Tipo:</label>
                            <select name="tipo">
                                <option value="<?= $r['tipo'] ?>">Casa</option>
                                <option value="<?= $r['tipo'] ?>">Sitío</option>
                                <option value="<?= $r['tipo'] ?>">Espaço de Eventos</option>
                                <option value="<?= $r['tipo'] ?>">Casa de Show</option>
                                <option value="<?= $r['tipo'] ?>">Salão de Festa</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="descricao" class="form-label">Descrição do Local:</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Escolha o tipo do local" value="<?= $r['descricao'] ?>">
                        </div>
                    </div>
                    <div class="input">
                        <label for="imagem" class="form-label">Link da Imagem:</label>
                        <input type="text" class="form-control" id="imagem" name="imagem" placeholder="coloque o link da imagem" value="<?= $r['imagem']?>">
                    </div>
                    <div class="form-container">
                        <div class="input">
                            <label for="rua" class="form-label">Rua:</label>
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" value="<?= $r['rua'] ?>">
                        </div>
                        <div class="input">
                            <label for="numero" class="form-label">Número da Casa:</label>
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número da casa" value="<?= $r['numero'] ?>">
                        </div>
                        <div class="input">
                            <label for="bairro" class="form-label">Bairro:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o nome do bairro" value="<?= $r['bairro'] ?>">
                        </div>
                        <div class="input">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o nome da cidade" value="<?= $r['cidade'] ?>">
                        </div>
                    </div>
                    <button id="btnconfig" type="submit" class="btn btn-primary" name="submit">Inserir</button>
                    <a href="dadosespaco.php" class="btn btn-primary">Ver Dados</a>
                </form>

    </div>
    </form>
<?php endforeach; ?>
<?php elseif (isset($resultadoUpdate)) : ?>
    <?php if ($resultadoUpdate) : ?>
        <div class="atualiza" class="alert alert-sucess" role="alert">
            Atualizado com sucesso
        </div>
        <a href="cadastroespaco.php" class="btn btn-danger" class="atualiza">voltar</a>
    <?php else : ?>
        <div class="alert alert-error" role="alert" class="atualiza">
            erro ao atualizar
        </div>
        <a href="cadastroespaco.php" class="btn btn-danger" class="atualiza">voltar</a>
<?php endif;
        endif; ?>
<script src="../TrabalhoProjetoDeSoftaware-main-2/ProjetoSoftware/js/script.js"></script>

</body>

</html>
