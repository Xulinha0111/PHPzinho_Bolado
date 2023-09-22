<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas - Pesquisa do Cliente</title>
    <link rel="stylesheet" href="estilos_menu.css">
</head>
<body>
    <?php
        require "menu.php";
        echo "<h3>LISTAGEM DOS CONTAS</h3>";
        require "conexao.php";
        $sql = "SELECT * FROM contas ORDER BY Codigo_Cliente";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='100' align='right'>Lancamento</th>";
                echo "<th width='300' align='left'>Código</th>";
                echo "<th width='100' align='left'>Data</th>";
                echo "<th width='250' align='left'>Valor</th>";
                echo "<th width='50' align='left'>Editar</th>";
            echo "</tr>";
            while($linha=mysqli_fetch_array($resultado))
            {
                //Nas linhas abaixo obtém cada coluna da tabela de contas- e armazena em cada variável
                $lancamento = $linha["lancamento"];
                $codigo = $linha["Codigo_Cliente"];
                $data = $linha["data"];
                $valor = $linha["valor"];
                //Exibe os dados
                echo "<tr>";
                    echo "<th width='100' align='right'>$lancamento</th>";
                    echo "<th width='300' align='left'>$codigo</th>";
                    echo "<th width='100' align='left'>$data</th>";
                    echo "<th width='250' align='left'>$valor</th>";
                    echo "<th width='50'><a href='clientes_editar.php?codigo=$codigo'>Editar</a></th>";
                echo "</tr>";
            }
    ?>
</body>
</html>