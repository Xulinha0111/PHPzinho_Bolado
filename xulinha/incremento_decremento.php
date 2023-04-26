<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento e Decremento em PHP</title>
</head>
<body>
    <?php
    echo "<h3><center>INCREMENTO E DECREMENTO EM PHP </h3></center><hr>";
    echo "<h4>Incremento</h4>";

    /*
    Incremento (Acumular)
    $contador +=1 (é a mesma coisa de fazer $contador = $contador + 1)
    $contador ++ (adiciona de 1 em 1)
    */

    $contador = 0;
    echo "Variável contador inicializando em " . $contador;

    $contador +=1; //Incrementando mais 1 na variável "contador"
    echo "<p> Valor da variável <strong>contador</strong> com incremento de " . $contrador .
    "</p>";

    $contador +-5; //Incrementa mais 5 na variável "contador"
    echo "<p> Valor da variável <strong>contador</strong> com incremento de 5, é igual a
    $contador" .  "</p>";



    echo "<h4>Decremento</h4>";
    $contador2 -=2;
    echo "Com decremento de 2, o contador atual é igual a " . $contador2;


    ?>
</body>
</html>