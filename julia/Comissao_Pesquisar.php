<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Comissão - Pesquisar</title>
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
            <img src="imagens/comissao-de-vendas.png" alt="Comissão de Vendas" width="30%">
        </p>

        <?php
        echo "<h3 class='text-center text-info'>Controle de Comissão - Pesquisa</h3>";
        require "conexao.php";
        $sql="SELECT tbcomissao.idcomissao, tbcomissao.idcomissao_vendedor, tbvendedor.vendedor, 
        tbcomissao.data, tbcomissao.valor_venda, tbcomissao.percentual_comissao FROM tbcomissao
        INNER JOIN tbvendedor ON tbvendedor.idvendedor = tbcomissao.idcomissao_vendedor ORDER BY vendedor";
        $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
        echo "<table align='center'>";
            echo "<th>ID da Comissão</th>";
            echo "<th>Vendedor</th>";
            echo "<th>Data da Venda</th>";
            echo "<th>Valor</th>";
            echo "<th>Percentual de Comissão</th>";
            echo "<th>Editar</th>";
        echo "</th>";
        while($linha=mysqli_fetch_array($resultado)){
            $idcomissao           =  $linha["idcomissao"];
            $vendedor             =  $linha["vendedor"];
            $data                 =  $linha["data"];
            $valor_venda          =  $linha["valor_venda"];
            $percentual_comissao  =  $linha["percentual_comissao"];
            
            echo "<tr>";
            echo "<td align='right'>$idcomissao</td>";
                echo "<td align='right'>$vendedor</td>";
                echo "<td align='rigth'>$data</td>";
                echo "<td align='left'>$valor_venda</td>";
                echo "<td align='left'>$percentual_comissao</td>";
                echo "<td><a href='Comissao_Editar.php?idcomissao=$idcomissao'>Editar</a></td>";
            echo "</tr>";
        };
        echo "</table>";
        ?>
        <h4 class="text-center text-info bg-danger">
            <a href="comissao.php">Voltar</a>
        </h4>
    </div>
</body>
</html>