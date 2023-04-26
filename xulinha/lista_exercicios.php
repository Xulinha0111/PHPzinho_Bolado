<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios</title>
</head>
<body style="background-color: #c0b8ff">
    
    <?php
    echo "<h3>CÁLCULO DE MENSALIDADE</h3>";
    echo "<hr align='left' color='#8177d4' width='300' size=3>";

    //Definindo variáveis
    $aluno = "Horácio Silva";
    $valor = 2100.5;
    $ano = date('Y');
    $parcelas = 6;
    $mensalidade = $valor/$parcelas;
    
    //Formatando as variáveis "valor" e "mensalidade"
    $valor = number_format($valor, 2, '.', '');
    $mensalidade = number_format($mensalidade, 2, '.', '');

    //Infromações para o usuário
    echo "<b>Nome do Aluno..................: </b>" . "<b><i>" . $aluno . "</b></i><br>";
    echo "<b>Valor do Curso..................: </b>" . "<font color = '#1155ad
     '>" . "R$" . $valor . "</font>" . "<br>";
    echo "<b>Ano.....................................: </b>" . $ano . "<br>";
    echo "<b>Quantidade de Parcelas....: </b>" . $parcelas . "<br>";
    echo "<b><u>Valor da Mensalidade</u>.......: </b>" . "<font color = '#870404'>" . "R$" . $mensalidade . "</font>";

    //Devolvendo os Tipos de Variáveis
    echo "<h4><u>TIPOS DE VARIÁVEIS UTILIZADAS</u></h4>";
    echo var_dump($aluno) . "<br>";
    echo var_dump($valor) . "<br>";
    echo var_dump($ano) . "<br>";
    ?>
    
</body>
</html>