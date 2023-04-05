<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 2 números utilizando formulário</title>
    <style type="text/css">
        h3 {
            color: #9b69d1;
            border-bottom:1px solid #9b69d1;
            width:36%
        }
        label, input {
            color:#9b69d1;
            font-weight:bold;
            margin-left:5px;
        }
    </style>
</head>
<body>
    <?php 
    echo "<h3>SOMA DE 2 NÚMEROS UTILIZANDO FORMULÁRIO</h3>";
    echo "<form method='get' action='exibir_soma.php'>";

        echo "<p>";
            echo "<label for='numero1'> Número 1: </label>";
            echo "<input type='text' name='num1' size='4' maxlength='4'>";
        echo "</p>";

        echo "<p>";
            echo "<label for='numero2'> Número 2: </label>";
            echo "<input type='text' name='num2' size='4' maxlength='4'>";
        echo "</p>";

        echo "<p>";
            echo "<input type='submit' name='somar' value='Somar'>";
            echo "<input type='reset' name='limpar' value='Limpar'";
        echo "</p>";

    echo "</form>"
    ?>
</body>
</html>