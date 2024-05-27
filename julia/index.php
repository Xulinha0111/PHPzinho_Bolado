<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Comissão - Acesso ao Sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-info">Controle de Comissão - Acesso ao Sistema</h3>
        <form name="login" method="post" action="">
            <p>
                <label>Usuário:</label><br>
             <input type="text" name="usuario" size="30" maxlength="30" required>
            </p>
            <p>
                <label>Senha:</label><br>
                <input type="password" name="senha" size="20" maxlength="20" required>
            </p>
            <p>
                <input type="submit" name="acessar" value="Acessar" class="btn btn-primary">
            </p>
        </form>
        <?php
            if(isset($_POST["acessar"])) { // isset verifica se foi efetuado click no botão acessar
                $usuario    =   $_POST["usuario"];
                $senha      =   $_POST["senha"];

                require "conexao.php"; // Importa os dados da conexão com o banco de dados

                $query = "SELECT * FROM tbusuarios WHERE usuario = '$usuario' AND senha = '$senha'";
                $sql = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
                $resultado =mysqli_num_rows($sql);

                if ($resultado == 0) {
                    echo "<p class='text-center text-info'>Usuário ou Senha Inválida</p>";
                }
                else
                {
                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    header("location:principal.php"); // Carrega a página principal
                }
            }
        ?>
        <p class="text-center text-info">Não está cadastrado?<a href='CriarUsuario.php'> - Cadastrar Usuário</a></p>
    </div>
</body>
</html>