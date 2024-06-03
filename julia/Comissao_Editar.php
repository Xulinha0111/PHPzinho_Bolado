<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Comissão - Editar</title>
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
        <p class="text-center">
            <img src="imagens/vendedor.png" alt="Cadastro de Vendedor" width="30%">
        </p>

        <?php
        echo "<h3 class='text-center text-info'>Controle de Comissão - Editar</h3>";
        require "conexao.php";
        $idcomissao           =  $_REQUEST["idcomissao"]; //Recupera o id do vendedor referente a pesquisa efetuada
        $sql                  =  "SELECT tbcomissao.idcomissao, tbcomissao.idcomissao_vendedor, tbvendedor.vendedor, 
                                  tbcomissao.data, tbcomissao.valor_venda, tbcomissao.percentual_comissao FROM tbcomissao
                                  INNER JOIN tbvendedor ON tbvendedor.idvendedor = tbcomissao.idcomissao_vendedor WHERE idcomissao='$idcomissao'";
        $resultado            =  mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        $linha                =  mysqli_fetch_array($resultado);
        $vendedor             =  $linha["vendedor"];
        $idcomissao_vendedor  =  $linha["idcomissao_vendedor"];
        $data                 =  $linha["data"];
        $valor_venda          =  $linha["valor_venda"];
        $percentual_comissao  =  $linha["percentual_comissao"];

        echo "<form name='vendedor' method='post' action=''>";
            echo "<table>";
                echo "<tr>";
                    echo "<td><label>Id Comissao:</label></td>";
                    echo "<td><input type='text' name='idcomissao' value='$idcomissao' size='5' readonly>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Vendedor:</label></td>";
                    echo "<td><input type='hidden' name='idcomissao_vendedor' size='60' maxlength='60' value='$idcomissao_vendedor' required>";
                    echo "<select name='idcomissao_vendedor' id='idcomissao_vendedor'";
                    echo "<option>$vendedor</option>";
                    $pesquisa = "SELECT * FROM tbvendedor ORDER BY vendedor";
                    $sql = mysqli_query($conexao, $pesquisa) or die(mysqli_error($conexao));

                    while ($campo = mysqli_fetch_row($sql)) {
                        echo "<option value=$campo[0]> $campo[1]</option>";
                    };
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Data</label></td>";
                    echo "<td><input type='date' name='data' size='30' maxlength='30' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Valor da Venda</label></td>";
                    echo "<td><input type='number' name='valor_venda' step='0.01' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><label>Percentual de Comissão:</label></td>";
                    echo "<td><input type='decimal' name='percentual_comissao' min='1' max='10' step='0.01' required></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><input type='submit' name='editar' value='Editar' class='btn btn-primary'></td>";
                    echo "<td><a href='Comissao_Pesquisar.php' class='btn btn-danger'>Voltar</a></td>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";

        if(isset($_POST['editar'])) {
            $idcomissao           =  $_POST["idcomissao"];
            $idcomissao_vendedor  =  $_POST["idcomissao_vendedor"];
            $valor_venda          =  $_POST["valor_venda"];
            $percentual_comissao  =  $_POST["percentual_comissao"];
            $data                 =  $_POST["data"];
            $sql                  =   "UPDATE tbcomissao SET idcomissao_vendedor='$idcomissao_vendedor', valor_venda='$valor_venda', percentual_comissao='$percentual_comissao', data='$data' WHERE idcomissao='$idcomissao'";
            echo $sql;
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type=\"text/javascript\">alert('Comissão Editada com sucesso!'); </script>";
            echo '<script>window.location.href = window.location.href;</script>';
        };
        ?>
</body>
</html>