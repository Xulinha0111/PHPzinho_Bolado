<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Alunos - Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        td {
            padding: 3px;
        }

        label, input{
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
        echo "<h3 class='text-center text-info'>Controle de Comissão - Editar</h3>";
        require "conexao.php";
        $idescola    =   $_REQUEST["idescola"]; //Recupera o id da escola
        $sql        =   "SELECT * FROM tbEscola WHERE idescola='$idescola'";
        $resultado  =   mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        $linha      =   mysqli_fetch_array($resultado);
        $idescola   =   $linha["idescola"];
        $nome       =   $linha["nome"];
        $cep        =   $linha["cep"];
        $email      =   $linha["email"];
        $contato    =   $linha["contato"];

        echo "<form name='nome' method='post' action=''>";
            echo "<table>";
                echo "<tr>";
                    echo "<td><label>Código da Escola:</label></td>";
                    echo "<td><input type='text' name='idescola' value='$idescola' size='5' readonly>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Nome:</label></td>";
                    echo "<td><input type='text' name='nome' size='60' maxlength='60' value='$nome' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Cep:</label></td>";
                    echo "<td><input type='text' name='cep' size='10' maxlength='10' value='$cep' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>E-mail:</label></td>";
                    echo "<td><input type='e-mail' name='email' size='30' maxlength='30' value='$email' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Contato:</label></td>";
                    echo "<td><input type='text' name='contato' size='15' maxlength='15' value='$contato' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><input type='submit' name='editar' value='Editar' class='btn btn-primary'></td>";
                    echo "<td><a href='Aluno_Pesquisar.php' class='btn btn-danger'>Voltar</a></td>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";

        if(isset($_POST['editar'])) {
            $idescola   =   $_POST["idescola"];
            $nome       =   $_POST["nome"];
            $cep        =   $_POST["cep"];
            $email      =   $_POST["email"];
            $contato    =   $_POST["contato"];
            $sql        =   "UPDATE tbEscola SET nome='$nome', cep='$cep', email='$email', contato='$contato' WHERE idescola='$idescola'";
            echo $sql;
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type=\"text/javascript\">alert('Aluno Editado com sucesso!'); </script>";
            echo '<script>window.location.href = window.location.href;</script>';
        };
        ?>
</body>
</html>