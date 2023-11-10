<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>

<body>

    <?php
    header("refresh:2;url=../index.php");

    require "../conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $telefone = $_POST["telefone"];

    $comandoSql = "INSERT INTO tb_cliente
      (nome_cli, senha_cli, email_cli, cep_cli, cidade_cli, bairro_cli, rua_cli, numero_cli, complemento_cli, telefone_cli, status)
      VALUES
      ('$nome', '$senha', '$email', '$cep', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$telefone', 1);";

    $resultado = mysqli_query($con, $comandoSql);

    if ($resultado == true)
        echo "Cadastrado com sucesso";
    else
        echo "Erro no cadastro";

    ?>

</body>

</html>