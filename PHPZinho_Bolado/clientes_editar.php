<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_menu.css">
    <title>Controle de Despesas - Editar</title>
</head>

<body>
    <?php
        require "menu.php";
        echo "<h3>Editar Cadastro de Clientes</h3>";
        require "conexao.php";
        $codigo = $_REQUEST["codigo"]; //recupera o código selecionado na pesquisa de clientes
        $sql="SELECT * FROM clientes WHERE codigo='$codigo'";

        $resultado=mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        $linha=mysqli_fetch_array($resultado);
        $nome    = $linha["nome"];
        $cidade  = $linha["cidade"];
        $cpf     = $linha["cpf"];
        $email   = $linha["email"];
        $contato = $linha["contato"];

        echo "<form name='cadastro' method='post' action=''>";
            echo "<table align='center'>";

                echo "<tr>";
                    echo "<td> <label for='nome'>Nome: </label>";
                    echo "<td> <input type='text' name='nome' value='$nome' size='50' maxlength='50' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> <label for='nome'>Cidade: </label>";
                    echo "<td> <input type='text' name='cidade' value='$cidade' size='30' maxlength='30' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> <label for='nome'>CPF: </label>";
                    echo "<td> <input type='text' name='cpf' value='$cpf' size='14' maxlength='14' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> <label for='nome'>E-mail: </label>";
                    echo "<td> <input type='text' name='email' value='$email' size='30' maxlength='30' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td> <label for='nome'>Contato: </label>";
                    echo "<td> <input type='text' name='contato' value='$contato' size='15' maxlength='15' required>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2' align='center'> <input type='submit' name='salvar' value='Salvar'></td>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";
        if(isset($_POST["salvar"]))
        {
        $nome    = $_POST["nome"];
        $cidade  = $_POST["cidade"];
        $cpf     = $_POST["cpf"];
        $email   = $_POST["email"];
        $contato = $_POST["contato"];
        require "conexao.php";
        $sql="UPDATE clientes SET nome='$nome', cidade='$cidade', cpf='$cpf', email='$email', contato='$contato' WHERE codigo='$codigo'";
        mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        echo "<script type =\"text/javascript\">alert('Cliente cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
    ?>
</body>
</html>