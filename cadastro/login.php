<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simples em PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h3>Cadastro Simples em PHP</h3>
        <h3>Acesso ao sistema</h3>
        <form name="login" method="post" action="validacao.php">
            <div class="form_group">
                <label for="email">E-mail:</label>
                <input type="text" name="email" maxlength="40">
            </div>
            <div class="form_group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" maxlength="20">
            </div>
            <input type="submit" value="Cadastrar" name="cadastrar">
            <br><br>
            <center><a href='login.html'>Voltar para a Tela de Login</a></center>
            <br>
        </form>
    </div>
    <?php
        if(isset($_POST["cadastrar"])) // Se clicou no botão cadastrar
        {
            $usuario    =   $_POST["usuario"]; // Recupera o que foi digitado na caixa usuário e armazena na variável $usuario
            $senha      =   $_POST["senha"];
            require "conexao.php"; // Importa o arquivo de conexão com o banco
            $sql="INSERT INTO tblogin (codigo, usuario, senha)"; // Variável $sql recebe informações das colunas e da tabela, para inserir os valores digitados abaixo.
            $sql.=" VALUES (null, '$usuario', '$senha')";
            mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
            echo "<h3>Login cadastrado com sucesso!</h3>";
        }
    ?>
</body>
</html>