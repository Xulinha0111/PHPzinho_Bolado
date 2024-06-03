<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Comissão</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3 class="text-center text-info">Controle de Comissão - Cadastro de Comissão</h3>
    <form name="login" method="post" action="">
        <p>
            <label>Vendedor:</label><br>
            <select nome="$idcomissao_vendedor" id="$idcomissao_vendedor">
                <?php
                    require "conexao.php";
                    $pesquisa = "SELECT * FROM tbvendedor ORDER BY vendedor";
                    $sql = mysqli_query($conexao, $pesquisa) or die(mysqli_error($conexao));

                    while ($campo = mysqli_fetch_row($sql)) {
                        echo "<option value=$campo[0]> $campo[1]</option>";
                    }
                    
                ?>
            </select>
        </p>
        <p>
            <label>Data da Venda:</label><br>
            <input type="date" name="data" size="30" maxlength="30" required>
        </p>
        <p>
            <label>Valor da Venda:</label><br>
            <input type="number" name="valor_venda" step="0.01" required>
        </p>
        <p>
            <label>Percentual da Comissão:</label><br>
            <input type="decimal" name="percentual_comissao" min="1" max="10" step="0.01" required>
        </p>
        
        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
    </form>
    <?php
        if(isset($_POST["cadastrar"])) {
            $idcomissao_vendedor  =  $_POST["idcomissao_vendedor"];
            $valor_venda          =  $_POST["valor_venda"];
            $percentual_comissao  =  $_POST["percentual_comissao"];
            $data                 =  $_POST["data"];
            require "conexao.php";
            $sql="INSERT INTO tbcomissao(idcomissao, idcomissao_vendedor, valor_venda, percentual_comissao, data)";
            $sql.=" VALUES(null,'$idcomissao_vendedor', '$valor_venda', '$percentual_comissao', '$data')" or die(mysqli_error($conexao));
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type=\"text/javascript\">alert('Comissão Cadastrada com sucesso!'); </script>";
        }
    ?>

        <p class="text-center text-sucess"><a href="comissao.php">Voltar</a></p>
</div>
</body>
</html>