<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3 class="text-center text-info">Controle de Comissão - Cadastro de Vendedores</h3>
    <form name="login" method="post" action="">
        <p>
            <label>Vendedor:</label><br>
            <input type="text" name="vendedor" size="30" maxlength="30" required>
        </p>
        <p>
            <label>E-mail:</label><br>
            <input type="e-mail" name="email" size="30" maxlength="30" required>
        </p>
        <p>
            <label>Contato:</label><br>
            <input type="text" name="contato" size="30" maxlength="30" required>
        </p>
        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
    </form>
    <?php
        if(isset($_POST["cadastrar"])) {
            $vendedor   =   $_POST["vendedor"];
            $email      =   $_POST["email"];
            $contato    =   $_POST["contato"];
            require "../conexao.php";
            $sql="INSERT INTO tbvendedor(idvendedor, vendedor, email, contato)";
            $sql.=" VALUES(null,'$vendedor','$email', '$contato')" or die(mysqli_error($conexao));
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type=\"text/javascript\">alert('Vendedor Cadastrado com sucesso!'); </script>";
        }
    ?>

        <p class="text-center text-sucess"><a href="index.php">Voltar</a></p>
</div>
</body>
</html>