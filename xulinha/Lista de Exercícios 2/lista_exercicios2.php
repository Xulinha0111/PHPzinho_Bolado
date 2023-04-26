<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios - 02</title>
    <style>
        fieldset{
        color: #8177d4;
        background: white;
        width: 13.5%;
        
        }
    </style>
</head>
<body style="background-color: #c0b8ff">
    <?php
    echo "<fieldset>";
    echo "<h2><font color='#252240'>CÁLCULO DE GASTO</h2></font>";
    echo "<form method='get' action='lista_exercicios2_resultado.php'>";

    echo "<p>";
        echo "<label for='receita1'> Receita 1: </label>";
        echo "<input type='number' name='rec1' size='4' maxlength='4'>";
    echo "</p>";

    echo "<p>";
        echo "<label for='receita2'> Receita 2: </label>";
        echo "<input type='number' name='rec2' size='4' maxlength='4'>";
    echo "</p>";

    echo "<hr align='left' color='#8177d4' width='250' size=3>"; 

    echo "<p>";
        echo "<label for='despesa1'> Despesa 1: </label>";
        echo "<input type='number' name='desp1' size='4' maxlength='4'>";
    echo "</p>";

    echo "<p>";
        echo "<label for='despesa2'> Despesa 2: </label>";
        echo "<input type='number' name='desp2' size='4' maxlength='4'>";
    echo "</p>";

    echo "<p>";
        echo "<label for='despesa3'> Despesa 3: </label>";
        echo "<input type='number' name='desp3' size='4' maxlength='4'>";
    echo "</p>";

    echo "<p>";
        echo "<label for='despesa4'> Despesa 4: </label>";
        echo "<input type='number' name='desp4' size='4' maxlength='4'>";
    echo "</p>";

    echo "<p>";
        echo "<input type='submit' name='somar' value='Somar'>";
        echo "<input type='reset' name='limpar' value='Limpar'";
    echo "</p>";

    echo "</form>";
    echo "</fieldset>";

    ?>
    
</body>
</html>