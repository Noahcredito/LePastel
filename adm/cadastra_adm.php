<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ADM</title>
</head>

<body>

    <?php
    require "../conexao.php";
    header("refresh:2; url='../index.php'");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comandoSql = "INSERT INTO tb_adm
      (nome_adm, senha_adm, email_adm)
      VALUES
      ('$nome', '$senha', '$email');";

    $resultado = mysqli_query($con, $comandoSql);

    if ($resultado == true)
        echo "Cadastrado com sucesso";
    else
        echo "Erro no cadastro";

    ?>

</body>

</html>