<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    if (isset($_GET["nome"])) {
        $nome = $_GET["nome"];
        echo "<div id='resultado2'><p>Seu nome é: $nome</p></div>";
        echo "<a id='linkResultado' href='sessao.php'>Clique aqui para voltar :)</a>";
    } 
    
    else {
        echo "<div id='linkResultado'>Você não digitou seu nome >:( <a href='sessao.php'>Clicke Aqui</a> para voltar.</div>";
    }
    ?>
    
</body>
</html>