<?php


$resultadoSelect = 0;
$resultadoUpdate;

$host = "localhost";
$usuario = "root";
$senha = "";
$database = "ProjetoSoftware";


$mysqli = new mysqli($host,$usuario,$senha,$database);
if($mysqli->error){
 die("Falha ao conectar ao banco de dados: ". $mysqli->error);
}
if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);


        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();


            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];


            header("Location: index.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
  font-family: Arial, sans-serif;  
  margin: 0;  
  padding: 20px;  
}

H1 {
  text-align: center;  
  font-size: 2em;  
  margin-bottom: 20px;  
}


.form-container {
  display: flex;  
  flex-direction: column;  
  width: 300px;  
  margin: 0 auto;  
  border: 1px solid #ddd;  
  border-radius: 5px;  
  padding: 20px;  
}


.input {
  margin-bottom: 15px;  
}


.form-label {
  display: block;  
  margin-bottom: 5px;  
  font-weight: bold;  
}


.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;  
  border-radius: 3px;
  box-sizing: border-box;
}


.form-control:focus {
  border-color: #66afe9;
  outline: none;
}


.btn {
  display: block;
  margin-left: 42%;
  margin-top: 1%;
  width: 16.2%;  
  padding: 10px 20px;  
  background-color: #021352;  
  color: white;  
  border: none;
  border-radius: 5px;  
  cursor: pointer;
}


.btn:hover {
  background-color:hwb(227 0% 77%);  
}
    </style>
    <H1>Login</H1>
    <form action="" method="POST"> <!-- action em branco-->
        <div class="form-container">
         
          <div class="input">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" nrequired>
          </div>
          <div class="input">
            <label for="nome" class="form-label">Senha</label>
            <input type="password" id="nome" name="senha" class="form-control" placeholder="Digite seu nome completo" required>
          </div>
        </div>
        <button id="btnconfig" type="submit" class="btn btn-primary">Entrar</button>
    </form>
</body>
</html>
