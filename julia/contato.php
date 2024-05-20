<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="Contato">
        <h3>Contato</h3>
        <form name="contato" method="post" action="">
            <table>
                <tr>
                    <td><label for="nome">Nome</label></td>
                    <td><input type="text" name="nome" size="40" maxlength="40" placeholder="Informe seu nome completo" required>
                </tr>
                <tr>
                    <td><label for="email">E-mail</label></td>
                    <td><input type="email" name="email" size="40" maxlength="40" required>
                </tr>
                <tr>
                    <td><label for="cidade">Assunto</label></td>
                    <td><input type="text" name="cidade" size="40" maxlength="40" required>
                <tr>
                    <td><label for="contato">Mensagem</label></td> 
                    <td><textarea name="Mensagem" id="mensagem" cols="40" rows="5">Digite aqui sua mensagem...</textarea>
                </tr>
               
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="enviar" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>