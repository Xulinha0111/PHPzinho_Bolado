<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre as funções Require e Incluse</title>
</head>
<body style="background-color: 	#E6E6FA">
    <?php
        include "cabec.php"; // A função include importa blocos de códigos
    ?>

    <form name="string" method="post" action="">
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" maxlength="50" size="40"
            required placeholder="informe seu nome completo">
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" size="30" maxlength="30" required>
        </p>

        <p>
            <input type="submit" name="mostrar" value="Mostar">
        </p>
    </form>

    <?php
        if(isset($_POST["mostrar"]))
        {
            $nome = $_POST["nome"];
            $emai = $_POST["email"];

            echo "<p>Converte para MAIÚSCULAS</p>";
            echo "Nome: " . strtoupper($nome);
            echo "<p>Converte para MINÚSCULAS</p>";
            echo "<p>E-mail: " . strtoupper($email); "</p>";
        }

        require "rodape.php";
    ?>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>