<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="estilos_formulario.css">
</head>

<body>
    <?php
    require "menu.php"; // Importa o menu do sistema de Controle de Despesas
    ?>
    <div id="cadastro">
        <h3>CADASTRO DE CLIENTES</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" name="nome" size="40" maxlength="40" placeholder="Informe seu nome completo" required>
                </tr>
                <tr>
                    <td><label for="cidade">Cidade:</label></td>
                    <td><input type="text" name="cidade" size="30" maxlength="30" required>
                </tr>
                <tr>
                    <td><label for="cpf">CPF:</label></td>
                    <td><input type="text" name="cpf" size="14" maxlength="14" required>
                </tr>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="email" name="email" size="30" maxlength="30" required>
                </tr>
                <tr>
                    <td><label for="contato">Contato:</label></td>
                    <td><input type="text" name="contato" size="15" maxlength="15" required>
                </tr>
                <tr>
                    <td><label for="DataNascimento">Dt.Nasc.:</label></td>
                    <td><input type="date" name="DataNascimento" required>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="cadastrar" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["cadastrar"])) {
            $nome           = $_POST["nome"];
            $cidade         = $_POST["cidade"];
            $cpf            = $_POST["cpf"];
            $email          = $_POST["email"];
            $contato        = $_POST["contato"];
            $DataNascimento = $_POST["DataNascimento"];
            require "conexao.php";
            $sql = "INSERT INTO clientes(codigo, nome, cidade, cpf, email, contato, DataNascimento)";
            $sql .= " VALUES (null, '$nome', '$cidade', '$cpf', '$email', '$contato', '$DataNascimento')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Cliente cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
    </div>
</body>

</html>