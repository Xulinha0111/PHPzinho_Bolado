<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Aluno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        table {
            width: 700px;
            th, td{
                border: 1px solid;
                padding: 3px;
            }
            th {
                background-color: gray;
                color: white;
                font-weight: 800;
            }

            td:hover{
                background-color: lightgray;
            }

            a:link{
                text-decoration:none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <p class="text-center">
            <img src="imagens\alunos.png" alt="Cadastro de Alunos" width="30%">
        </p>

        <?php
        echo "<h3 class='text-center text-info'>Controle de Alunos - Pesquisa</h3>";
        require "conexao.php";
        $sql="SELECT * FROM tbEscola ORDER BY nome";
        $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
        echo "<table align='center'>";
            echo "<th>Código da Escola</th>";
            echo "<th>Nome do Aluno</th>";
            echo "<th>Cep</th>";
            echo "<th>E-mail</th>";
            echo "<th>Contato</th>";
            echo "<th>Editar</th>";
        echo "</th>";
        while($linha=mysqli_fetch_array($resultado)){
            $idescola =   $linha["idescola"];
            $nome     =   $linha["nome"];
            $cep      =   $linha["cep"];
            $email    =   $linha["email"];
            $contato  =   $linha["contato"];

            echo "<tr>";
                echo "<td align='right'>$idescola</td>";
                echo "<td align='left'>$nome</td>";
                echo "<td align='left'>$cep</td>";
                echo "<td align='left'>$email</td>";
                echo "<td align='rigth'>$contato</td>";
                echo "<td><a href='Aluno_Editar.php?idescola=$idescola'>Editar</a></td>";
            echo "</tr>";
        };
        echo "</table>";
        ?>
        <br>
        <p class="text-center text-info">    
            Não está cadastrado? - <a href="index.php">Cadastrar Aluno</a>
        </p>
    </div>
</body>
</html>