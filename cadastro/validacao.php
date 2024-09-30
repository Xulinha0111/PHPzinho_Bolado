<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simples - PHP - Validação do Login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3 class="text-center text-primary">Validação do Login</h3>
    <?php
    session_start(); //inicializa a sessao 
    //as duas linhas abaixo, recupera os dados do formulario, e armazena as variaveis 
    $email  =   $_POST["email"];
    $senha  =   $_POST["senha"];
    $MensagemErro = ""; //Armazena as mensagens de erro 
    $erro = 0; //Se existir algum erro, adiciona +1 nesta variavel 
    if(empty($email)) //Se o email não foi digitado
    {
        $MensagemErro = "Por favor, informe o E-mail! <br>";
        $erro++; 
    }
    if(empty($senha)) {
        $MensagemErro  .= "Por favor, informe a Senha! <br>";
        $erro++; 
    }
    if($erro > 0){ //se o email e/ou senha não foi digitdo, exibe mensagem de erro
        echo $MensagemErro;
        echo "<p><a href='login.php'>Voltar</p>";
}
if($email == "julia@gmail.com"  && $senha == "123" ) //se o email e senha estiverem corretos
{
    //armazena o email digitado no formulario, na variavel da sessão 
    $_SESSION   =   $_POST["email"];
    echo "<p>Acesso Concedido! <br></p>";
    echo "<a href='principal.php'> Clique aqui para acessar</a>";
}
else {
    echo "<p>E-mail ou Senha Invalido</p>";
    echo "<p>Acesso negado! <br></p>";
    echo "<a href='login.php'>Clique aqui para retornar</a>";
}
?>
</body>
</html>