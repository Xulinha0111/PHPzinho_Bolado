<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Confirme Suas informações</h2>
<?php
  // Verifica se os campos foram enviados via POST
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores dos campos do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Verifica se os campos estão preenchidos
    if (!empty($name) && !empty($email) && !empty($age)) {
      echo '<table>';
      echo '<tr><td><strong>Nome:</strong></td><td>' . $name . '</td></tr>';
      echo '<tr><td><strong>Email:</strong></td><td>' . $email . '</td></tr>';
      echo '<tr><td><strong>Idade:</strong></td><td>' . $age . ' anos</td></tr>';
      echo '</table>';

      // Verifica a idade e exibe a mensagem correspondente
      if ($age > 18) {
        echo '<p class="message">Você é maior de idade. Sua taxa é de R$30,00.</p>';
      } else {
        echo '<p class="message">Você é menor de idade. Sua taxa é de R$25,00.</p>';
      }
    } else {
      echo '<p class="message">Preencha todos os campos. <a href="..\Lista de Exercícios  - 3\html.html"> Click Aqui</a> para Voltar.</p>';
    }
  } else {
    echo '<p class="message">Nenhuma informação recebida. <a href="..\Lista de Exercícios  - 3\html.html"> Click Aqui</a> para Voltar.</p>';
  }
  ?>
<center>

<h5 style='color:#266d2c'>
Website Desenvolvido por <strong> Julia Bellini Sorrente </strong> -
&copy 2023</h5>
<em>Todos do direitos reservados</em>

</center>

</body>
</html>