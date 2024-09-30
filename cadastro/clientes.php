<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <script>
        $(function () {
            $(".fone").mask("(00) 00000-0000", {placeholder: "(00) 00000-0000"});
            $(".cep").mask("00000-000", {placeholder: "00000-000"});
            $(".cpf").mask("000.000.000-00", {placeholder: "000.000.000-00"});
        })
    </script>

    <div class="container">
        <h3 class="text-center text-primary">CADASTRO SIMPLES EM PHP UTILIZANDO JQUERY</h3>
        <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label>Cidade: </label></td>
                    <td><input type="text" name="cidade" size="30" maxlength="30" required></td>
                </tr>

                <tr>
                    <td><label>UF: </label></td>
                    <td>
                        <select name="uf">
                            <option value="SP">SP</option>
                            <option value="RJ">RJ</option>
                            <option value="MG">MG</option>
                            <option value="DF">DF</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label>Contato: </label></td>
                    <td><input type="text" name="contato" size="15" maxlength="15" required></td>
                </tr>

                <tr>
                    <td><label>CPF: </label></td>
                    <td><input type="cpf" name="cpf" size="14" maxlength="14" required></td>
                </tr>

                <tr>
                    <td><label>E-mail: </label></td>
                    <td><input type="email" name="email" size="30" maxlength="30" required></td>
                </tr>

                <tr>
                    <td colapsan="2" align="center"> 
                        <input type="submit" name="inserir" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST["inserir"])) //Se clicou no botão "inserir"
            {
                require "conexao.php";
                $nome     =   $_POST["nome"];
                $cidade   =   $_POST["cidade"];
                $uf       =   $_POST["uf"];
                $email    =   $_POST["email"];
                $contato  =   $_POST["contato"];
                $cpf      =   $_POST["cpf"];
                $sql = "INSERT INTO tbaluno(codigo, nome, cidade, uf, email, contato, cpf)";
                $sql.= " VALUES(null, '$nome', '$cidade', '$uf', '$email', '$contato', '$cpf')";
                mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
                echo "<script>alert('Aluno cadastrado com sucesso!')</script>";
            }
        ?>
    </div>
<body>
</body>
</html>