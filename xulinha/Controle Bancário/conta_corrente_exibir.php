<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Dados - Conta Corrente</title>
    <a href="/"></a>
    <link rel="stylesheet" href="estilos_cc.css">
</head>
<body>

    <?php

    echo "<h3>CONTROLE BANCÁRIO - CADASTRO DE CONTA CORRENTE</h3>";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){ //Verificar se foi efetuado o cadasGET

         $nome_correntista = $_GET["nome"];
         echo "<strong>Nome do correntista: </strong>" . $nome_correntista;
         
         $nome_banco = $_GET["banco"];
            if($nome_banco == 'santander'){
               echo "<br><strong>Cliente do Banco Santander.</strong>";
            }

            elseif($nome_banco == 'caixa'){
               echo "<br><strong>Cliente da Caixa Econômica Federal.</strong>";
            }

            elseif($nome_banco == 'mercantil'){
               echo "<br><strong>Cliente do Banco Mercantil.</strong>";
            }

            elseif($nome_banco == 'bradesco'){
               echo "<br><strong>Cliente do Banco do Bradesco.</strong>";
            }

            elseif($nome_banco == 'brasil'){
               echo "<br><strong>Cliente do Banco do Brasil.</strong>";
            }

            else{
               echo "<br><strong>Você não selecionou nenhum banco.";
            }

        $agencia = $_GET["agencia"];
        $conta = $_GET["conta_corrente"];
        $data_abertura = $_GET["data_abertura"];
        $saldo_inicial = $_GET["saldo_inicial"];
        $deposito = $_GET["deposito"];

        echo "<br><strong>Agência: </strong>" . $agencia;
        echo "<br><strong>Conta Corrente: </strong>" . $conta;
        echo "<br><strong>Data de abertura </strong>" . $data_abertura;
        echo "<br><strong>Saldo Inicial: R$ </strong>" . $saldo_inicial;
        echo "<br><strong>Depósito: </strong>" . $deposito;
        
        $tipo = $_GET["tipo_conta"];

            if($tipo == 'Conta Comum'){
                echo "<br><strong>Sua conta é comum</strong>";
             }

             else{
                echo "<br><strong>Sua conta é especial</strong>";
             }

        $total = ($saldo_inicial + $deposito);
        echo "<br><strong>Saldo Atual: </strong>" . $total;
        }

    else{
         echo "<h3>Atenção... você tem que cadastrar os dados primeiro!</h3>";
         echo "<a href='Conta_Corrente.html'>Cadastro de Conta Corrente</a>";
        }

    ?>

</body>

</html>





