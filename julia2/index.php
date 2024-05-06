<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3 class="text-center text-info">Cadastro de Alunos</h3>
    <form name="login" method="post" action="">
        <p>
            <label>Nome Completo do Aluno:</label><br>
            <input type="text" name="nome" size="30" maxlength="30" required>
        </p>
        <p>
            <label>Cep:</label><br>
            <input type="text" name="cep" size="9" maxlength="9" required>
        </p>
        <p>
            <label>E-mail do Aluno:</label><br>
            <input type="email" name="email" size="60" maxlength="60" required>
        </p>
        <p>
            <label>Celular para Contato:</label><br>
            <input type="text" name="contato" size="15" maxlength="15" required>
        </p>
        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
        

        <p class="text-center text-info">    
            Já está cadastrado? - <a href="Aluno_Pesquisar.php">Pesquisar Aluno</a>
        </p>
    </form>
    <?php
        if(isset($_POST["cadastrar"])) {
            $nome       =   $_POST["nome"];
            $cep        =   $_POST["cep"];
            $email      =   $_POST["email"];
            $contato    =   $_POST["contato"];
            require "conexao.php";
            $sql="INSERT INTO tbEscola(idescola, nome, cep, email, contato)";
            $sql.=" VALUES(null,'$nome','$cep', '$email', '$contato')" or die(mysqli_error($conexao));
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type=\"text/javascript\">alert('Aluno Cadastrado com sucesso!'); </script>";
        }
    ?>
</div>
</body>
</html>