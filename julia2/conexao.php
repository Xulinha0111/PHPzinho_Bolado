<?php
$host   = "localhost"; // servidor
$user   = "root"; // usuário
$pass   = ""; // senha
$db     = "bdEscola"; // banco de dados
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error($conexao));
mysqli_select_db($conexao, $db);
?>