<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="formulario">
        <form method="POST" action="">
            <label for="nome"> Escreva abaixo o seu lindo nome:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <input type="submit" id="Button" value="Enviar">
            <input type="reset" id="Button" value="Limpar">
        </form>
    </div>

    <?php
    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Verifique se o campo 'nome' foi preenchido
        if (!empty($_POST["nome"])) {
            $nome = $_POST["nome"];
            echo "<a id='linkResultado' href='resultado.php?nome=$nome'>Clique aqui para ver seu nome :)</a>";
        } 
        
        else {
            echo "<div id='resultado'>Por favor, preencha seu nome.</div>";
        }
    }
    ?>

</form>
</body>
</html>