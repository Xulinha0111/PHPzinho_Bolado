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
        <h3>CADASTRO DE CONTAS</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="codigo">Código:</label></td>
                    <td><input type="text" name="codigo" size="30" maxlength="30" required>
                </tr>
                <tr>
                    <td><label for="data">Data:</label></td>
                    <td><input type="date" name="data" size="14" maxlength="14" required>
                </tr>
                <tr>
                    <td><label for="valor">Valor:</label></td>
                    <td><input type="text" name="valor" size="30" maxlength="30" required>
                </tr>
                <tr>
                    <td><label for="historico">Histórico:</label></td>
                    <td><input type="text" name="historico" size="15" maxlength="15" required>
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
            $codigo         = $_POST["codigo"];
            $data            = $_POST["data"];
            $valor          = $_POST["valor"];
            $historico        = $_POST["historico"];
            require "conexao.php";
            $sql = "INSERT INTO contas(lancamento, Codigo_Cliente, data, valor, historico)";
            $sql .= " VALUES ('null', '$codigo', '$data', '$valor', '$historico')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Cliente cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
    </div>
</body>

</html>