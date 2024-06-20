<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeta Festival</title>
    <link rel="stylesheet" href="homecss.css">
    <style>
        form{
          margin-top: 200px;
            width: 400px;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;   
            flex-direction: column; 
            background-color: #021352;
            color: white;
        }
       *{
        margin: 0;
        padding: 0 auto;
        box-sizing: border-box;
       }
       html {
    display: table;
    margin: auto;
}

body {
    display: table-cell;
    vertical-align: middle;

}
    </style>
</head>
<body>
<div class="main"></div>
<?php

?>
    <form method="Post" action="home.php">
            <h1>Login</h1>
        <label>Usuario:</label>
        <input type="text" name="nome" id="nome"><br>
        <label>Senha:</label>
        <input type="password" name="senha" id="senha"><br>
            <input type="submit" value="entrar" id="entrar" name="entrar"><br>
            <button>Cadastrar</button>
    </form>

</body>
</html>