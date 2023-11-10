<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Alteração de Cliente</title>
</head>

<body>
    <?php
    header("refresh:2; url='../index.php'");
    require "../conexao.php";

    $id=$_SESSION['user_id'];

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $telefone = $_POST["telefone"];

    $comandoSql = "update tb_cliente set 
    nome_cli='$nome', email_cli='$email', senha_cli='$senha', bairro_cli='$bairro', cep_cli='$cep', cidade_cli='$cidade',
    rua_cli='$rua', numero_cli='$numero', complemento_cli='$complemento', telefone_cli='$telefone' where id_cli='$id'";

    $resultado = mysqli_query($con, $comandoSql);

    if ($resultado == true)
      echo "Alterado com sucesso";
    else
      echo "Erro na alteração";

    ?>

</body>

</html>