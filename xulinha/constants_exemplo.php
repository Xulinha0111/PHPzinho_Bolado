<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Constants em PHP</title>
</head>
<body>
    <?php 
        echo "<h3 align='center'> EXEMPLO DE CONSTANT EM PHP</h3><hr>";
        //Definindo a constant em PHP

        /*
        Variável em PHP:
        $linguagem = 'PHP';
        */

        //Constant em PHP
        define("linguagem", "PHP");

        //Exibindo a constant "linguagem"
        echo "<strong> Linguagem </strong>".linguagem;

        define("característica", "A característica da linguagem <strong>PHP</strong>, é
        que ela precisa de um <strong>servidor</strong> para compilar e exibir no
        navegador.");

        //Exibindo a constant "característica"
        echo "<strong><p>Característica<p></strong>";
        echo característica . "</p>";
    ?>
    
</body>
</html>