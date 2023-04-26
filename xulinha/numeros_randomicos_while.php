<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Númeors Randômicos Utilizando Looping While</title>
</head>
<body>
    <?php
        echo "<h2>NÚMEROS RANDÔMICOS COM WHILE</h2>";
        $numero = 0;
        $cont = 1;
        while($cont < 20)
        {
            $numero =  rand(1,200); //o comando rand sorteia números aleatórios entre um número inicial e final prédefinidos
            echo $numero; 
            $cont ++;
            echo "<br>";

            if ($numero == 50)
            {
                echo "<p>Looping interrompido...</p>";
                break;
            }
        }

        
       
    
    
    ?>
</body>
</html>