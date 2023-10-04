<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica login</title>
</head>
<body>
    <h3>VERIFICA LOGIN</h3>
    <?php
        $usuario    =   $_POST["usuario"];
        $senha      =   $_POST["senha"];
        require "conexao.php";
        $query ="SELECT * FROM tblogin WHERE usuario='$usuario' AND senha='$senha'";
        $sql=mysqli_query($conexao, $query) or die(mysqli_error($conexao));
        $resultado=mysqli_num_rows($sql);

        if($resultado == 0) {
            echo "Senha Inválida!";
            echo "<meta http-equiv='refresh' content='3;url=login.html' />";
        }

        else{
            session_start(); // Inicia a sessão
        $_SESSION["usuario"]    = $usuario; // Salva a variável na sessão
        $_SESSION["senha"]      = $senha;
        
        echo "<meta http-equiv='refresh' content='0;url=principal.php' />";
        }

        
    ?>
</body>
</html>
