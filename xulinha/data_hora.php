<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora PHP</title>
</head>
<body>
    <?php 
    echo "<h3><center>DATA E HORA EM PHP</h3></center><hr>";
        /*
        Data
        Parâmetros: 
        d = dia
        m = mês
        f = mês por extenso
        y = ano

        Hora
        Parâmetros:
        h = hora
        i = minutos
        s = segundos
        */
    //Extraindo o dia, mês e ano
    $dia = date('d');
    $mes = date('m');
    $mesAbreviado = date('M');
    $mesCompleto = date('F');
    $ano = date('y');

    //Definindo o Fusorário local
    date_default_timezone_set("America/Sao_Paulo");

    echo "<h4>Exibe a data do sistema operacional: </h4>";
    echo "Dia: " . $dia . "<br>" . "Mêm em número: " . $mes . 
    "<br>" . "Mês Abreviado: " . $mesAbreviado . "<br>" . "Mês Completo: " . $mesCompleto . 
    "<br>" . "Ano: " . $ano;

    //Extraindo hora, minuto e segundo
    $hora = date('h');
    $minuto = date('i');
    $segundo = date('s');

    echo "<h4>Exibe a hora do sistema operacional: </h4>";
    echo "Hora: " . $hora . "<br>" . "Minuto: " . $minuto . "<br>" . "Segundos: " . $segundo;

    echo "<h4> Exercício </h4>";
    echo "Hoje é ", $dia, " do mês ", $mesAbreviado, " de ", $ano, "." ,"<br>";
    echo "Agora são ", $hora, " horas e ", $minuto, " minutos.", "<br>";
    
    ?>
</body>
</html>