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
<body class="login">
    <div class="login">
        <?php
            echo "É bom tê-lo(a) conosco!<br>Para se cadastrar, insira seus dados:<br><br>"
        ?>
        <form method="post" action="">
            <label for="user2">Nome de usuário:</label>
            <input type="text" id="user2" name="user2" required><br><br>

            <label for="senha">Senha:</label>
            <input type="text" id="senha" name="senha" required><br><br>

            <button type="submit">Enviar</button><br><br>

    <?php
        session_start();

        $usuario = array($_POST["user2"], $_POST["senha"]);

        $_SESSION["user2"] = $_POST["user2"];

        $_SESSION["senha"] = $_POST["senha"];

        echo "$usuario[0] cadastrado com sucesso!";

        echo '<br><br><br><br>';
    ?>
    </div>
</body>
</html>