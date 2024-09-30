<?php
session_start();
if(isset($_SESSION["email"]))
{
    $email  =   $_SESSION["email"];
    echo"seja bem vindo" .$email;
}
    else{
        echo"voce nao fez o login";
        echo"<meta http-equiv='refresh' content='3;url=login.php'>";
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro simples em php </title>
    </head>
    <body>
        <div class="container">
            <h3 class="text-center text-primary">Cadastro Simples em PHP</h3>
            <p><a href="clientes.php">Inserir</a></p> |
            <p><a href="contato.php">Contato</a></p> |
            <p><a href="logout.php">Sair</a></p>
        </div>


        
    </body>
    </html>