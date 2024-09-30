<?php
    $host    =  "localhost";
    $user    =  "root";
    $pass    =  "";
    $db      =  "bdescola";
    $conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error($conexao));
    mysqli_select_db($conexao, $db);
?>