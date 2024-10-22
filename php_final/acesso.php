<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.L.V.In</title>
    <link rel="stylesheet" href="principal.css">
</head>
<h1>A.L.V.In</h1><br><br>
<h2>Seja bem-vindo ao seu Auxiliar de Leitura Virtual pela Internet (A.L.V.In)!</h2><br><br>

<body class="login">
    <div class="login">
        <?php
            echo "Por favor, insira seus dados:<br><br>"
        ?>
        <form method="post" action="principal.php">
            <label for="nome">Usuário:</label>
            <input type="text" id="nome" name="nome" ><br><br>
            <label for="senha">Senha:</label>
            <input type="text" id="senha" name="senha" ><br><br>

            <button type="submit" value="Acessar">Acessar</button><br><br>

            <a href="cadastro.php">
                <button>Caso não tenha cadastro, realize-o aqui!</button>
            </a>
        </form>
        <?php

        $usuario = array($_POST["nome"], $_POST["senha"]);

        $_SESSION["nome"] = $_POST["nome"];

        $_SESSION["senha"] = $_POST["senha"];

        if($_SESSION["nome"]==$_GET["user"]&&$_SESSION["senha"]==$_GET["password"])
        {
            $_SESSION["nome"] = $_POST["nome"];

            //header('Location: inicial.php');
        }

        else
        {
            print("Dados inválidos");
        }

    ?>
    </div>

</body>
</html>