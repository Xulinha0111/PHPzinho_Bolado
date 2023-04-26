<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
</head>
<body>
    <?php
    echo "<h3> <center> OPERADORES MATEMÁTICOS EM PHP</h3>";

    $valor1 = 12; //Variável do tipo Inteiro
    $valor2 = 13; //Variável do tipo Inteiro
    $adicao = $valor1 + $valor2; // Efetua o cálculo das variáveis
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;
   
    echo "<h4> Operação 1 - Adição </h4>";
    echo "<hr align='left' color='#1E07AC' width='250' size=3>";
    echo "Valor 1: $valor1 <br>Valor 2: $valor2 <br>";
    echo "A soma é: $adicao";

    echo "<h4> Operação 2 - Subtração </h4>";
    echo "<hr align='left' color='#1E07AC' width='250' size=3>";
    echo "Valor 1: $valor1 <br>Valor 2: $valor2 <br>";
    echo "A subtração é: $sub";

    echo "<h4> Operação 3 - Multiplicação </h4>";
    echo "<hr align='left' color='#1E07AC' width='250' size=3>";
    echo "Valor 1: $valor1 <br>Valor 2: $valor2 <br>";
    echo "A multiplicação é: $mult";

    echo "<h4> Operação 4 - Divisação </h4>";
    echo "<hr align='left' color='#1E07AC' width='250' size=3>";
    echo "Valor 1: $valor1 <br>Valor 2: $valor2 <br>";
    echo "A divisão é: $div";

    echo "<h4> Exibindo o tipo da variável </h4>";
    echo "<hr align='left' color='#1E07AC' width='250' size=3>";
    echo "A variável valor1 é do tipo: ";
    echo var_dump($valor1), "<br>"; 
    echo "A variável valor2 é do tipo: ";
    echo var_dump($valor2);
    ?>
</body>
</html>