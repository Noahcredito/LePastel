<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Alteração do Administrador</title>
</head>

<body>
  <div class="container">
    <?php

    require "../conexao.php";
    
    header("refresh:2; url='../index.php'");

    $id=$_SESSION['user_id'];

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comandoSql = "update tb_adm set 
	nome_adm='$nome', email_adm='$email', senha_adm='$senha' where id_adm='$id'";

    $resultado = mysqli_query($con, $comandoSql);

    if ($resultado == true)
      echo "Alterado com sucesso";
    else
      echo "Erro na alteração";

    ?>

  </div>
</body>

</html>