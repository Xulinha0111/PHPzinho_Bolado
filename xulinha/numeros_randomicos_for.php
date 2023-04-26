<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Númeors Randômicos Utilizando Looping For</title>
</head>
<body>
    <?php
        echo "<h2>NÚMEROS RANDÔMICOS COM FOR</h2>";
        $numero = 0;
        
        for ($i = 1; $i <= 20; $i++)
        {
            $numero =  rand(1,200); //o comando rand sorteia números aleatórios entre um número inicial e final prédefinidos
            echo $numero;
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