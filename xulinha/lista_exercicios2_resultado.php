<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetua o cálculo e exibe a soma de 2 números</title>
    <style>
        fieldset{
        background: white;
        width: 13.5%;
        
        }
    </style>
</head>
<body style="background-color: #c0b8ff">
    <?php
    echo "<fieldset>";
    echo "<h2><font color='#252240'>RESULTADO</h2></font>";

    $receita1 = $_GET["rec1"];
    $receita2 = $_GET["rec2"];
    $soma = $receita1 + $receita2;

    echo "<font color='#8177d4'>Receita 1: </font>" . "R$" . $receita1 . "<br>";
    echo "<font color='#8177d4'>Receita 2: </font>" . "R$" . $receita2 . "<br>";
    echo "<strong><font color='#070424'>Total das Receitas:... R$" . $soma . '</strong></font color>';

    echo "<hr align='left' color='#8177d4' width='250' size=3>"; 
    
    $despesa1 = $_GET["desp1"];
    $despesa2 = $_GET["desp2"];
    $despesa3 = $_GET["desp3"];
    $despesa4 = $_GET["desp4"];
    $soma2 = $despesa1 + $despesa2 + $despesa3 + $despesa4;

    echo "<font color='#8177d4'> Despesa 1: </font>" . "R$" . $despesa1 . "<br>";
    echo "<font color='#8177d4'> Despesa 2: </font>" . "R$" . $despesa2 . "<br>";
    echo "<font color='#8177d4'> Despesa 3: </font>" . "R$" . $despesa3 . "<br>";
    echo "<font color='#8177d4'> Despesa 4: </font>" . "R$" . $despesa4 . "<br>";
    echo "<strong><font color='#070424'>Total das Despesas:... R$" . $soma2 . '</strong></font color>';

    echo "<hr align='left' color='#8177d4' width='250' size=3>"; 

    $receita1 = number_format($receita1, 2, '.', '');
    $receita2 = number_format($receita2, 2, '.', '');

    $despesa1 = number_format($despesa1, 2, '.', '');
    $despesa2 = number_format($despesa2, 2, '.', '');
    $despesa3 = number_format($despesa3, 2, '.', '');
    $despesa4 = number_format($despesa4, 2, '.', '');

    $soma = number_format($soma, 2, '.', '');
    $soma2 = number_format($soma2, 2, '.', '');

    if ($soma > $soma2)
    {
        echo "<h4>Resultado:  <i><strong>Crédito</i></strong</h4>";
    }

    else
    {
        echo "<h4>Resultado: <i><strong>Débitoito</i></strong</h4>";
    }

    echo "</fieldset>"

    ?>
</body>
</html>