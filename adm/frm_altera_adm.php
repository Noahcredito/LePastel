<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

  <title>Alteração do Administrador</title>

  <style>
    .conteiner {
      font-size: 22px;
      text-align: justify;
      background-color: #FFFFFF;
      width: 79%;
      max-width: none;
      padding: 5%;
      font-family: Alice;
      margin-left: 19%;
      margin-top: 2.5%;
      margin-right: 3%;
      border-radius: 20px;
    }

    .btn {
      margin-bottom: 10px;
      background-color: #8080FF;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .btn:hover {
      background-color: #3636B3;
    }

    .btn:active {
      transform: translateY(1px);
      box-shadow: none;
    }

    #btnDesativar {
      margin-bottom: 10px;
      background-color: red;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    #btnDesativar:hover {
      background-color: darkred;
    }

    #btnDesativar:active {
      transform: translateY(1px);
      box-shadow: none;
    }

  </style>

</head>
<body>
<?php
    require "../conexao.php";
    require "../barra_lateral_pasta.php";

  echo  '<div class="conteiner">
    <h3> Alteração do Administrador </h3>';
    

    $id = $_SESSION["user_id"];

    $comandoSql = "select * from tb_adm where id_adm='$id'";

    $resultado = mysqli_query($con, $comandoSql);

    $dados = mysqli_fetch_assoc($resultado);

    $nome = $dados["nome_adm"];
    $email = $dados["email_adm"];
    $senha = $dados["senha_adm"];

    ?>

    <form action="altera_adm.php" method="POST">

      <div class="form-group">
        <label for="nome"> Nome </label>
        <input type="text" name="nome" class="form-control" value="<?php echo $nome ?>">
      </div>

      <div class="form-group">
        <label for="email"> Email </label>
        <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
      </div>

      <div class="form-group">
        <label for="senha"> Senha </label>
        <input type="password" name="senha" class="form-control" value="<?php echo $senha ?>">
      </div>

      <input type="submit" value="Alterar" class="btn">

    </form>

    <button id="btnDesativar" onclick="confirmarDesativacao()">Desativar conta</button>

  <script>
    function confirmarDesativacao() {
      var confirmar = confirm("Você realmente deseja desativar sua conta?");

      if (confirmar)
        window.location.href = "desativa_adm.php";
      else
        alert("Operação cancelada pelo usuário.");
    }
  </script>

  </div>
</body>

</html>