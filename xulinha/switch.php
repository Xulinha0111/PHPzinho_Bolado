<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Verdana, Arial;
            background-color: #e7e0f1;
        }
        h2{
            border-bottom:2px dashed #5541a3;
        }

        p{
            color: #5541a3
        }

        marquee {
            width: 160px;
            font-size: 22px;
            font-weight:700;
            font-style:italic;
            background-color:white;
            color: #5541a3;
            border: 2px solid #5541a3;
        }
    </style>
</head>

<body>
    <?php
        echo "<h2 align='center'>DIA DA SEMANA - SWITCH... CASE</h2>";
        $numero_Dia_Semana = date("w");
        echo "<p><strong>Dia da semana: </strong> $numero_Dia_Semana <p>";

        $Dia_Semana_Extenso = " ";
        switch($numero_Dia_Semana){

            case 0:
                $Dia_Semana_Extenso = "Domingo";
                break;

            case 1:
                $Dia_Semana_Extenso = "Segunda-Feira";
                break;

            case 2:
                $Dia_Semana_Extenso = "Terça-Feira";   
                break;

            case 3:
                $Dia_Semana_Extenso = "Terça-Feira";   
                break;

             case 4:
                $Dia_Semana_Extenso = "Terça-Feira";  
                break;

            case 5:
                $Dia_Semana_Extenso = "Terça-Feira";
                break;

            case 6:
                 $Dia_Semana_Extenso = "Terça-Feira";
                 break;
        
            default:
            $Dia_Semana_Extenso = "Erro... dia da semana inválido";
        }
        echo "<p><strong> Hoje é </strong>" . "<em>$Dia_Semana_Extenso</em></p>";
        echo "<p><marquee direction='right'> Dia De </marquee></p>";
        echo "<p><marquee behvior='altermate'> Seja Bem-Vindo! </marquee></p>";
    
    ?>
    
</body>
</html>