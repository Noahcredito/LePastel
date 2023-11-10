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
</style>

  <title>Alteração de Cliente</title>
</head>
<body font-family='Alice'>
<?php

require "../conexao.php";
require "../barra_lateral_pasta.php";

  echo '<div class="conteiner">';
    echo '<h3> Alteração de Cliente </h3>';

    $id = $_SESSION["user_id"];

    $comandoSql = "select * from tb_cliente where id_cli=$id";

    $resultado = mysqli_query($con, $comandoSql);

    $dados = mysqli_fetch_assoc($resultado);

    $nome = $dados["nome_cli"];
    $email = $dados["email_cli"];
    $senha = $dados["senha_cli"];
    $cep = $dados["cep_cli"];
    $cidade = $dados["cidade_cli"];
    $bairro = $dados["bairro_cli"];
    $rua = $dados["rua_cli"];
    $numero = $dados["numero_cli"];
    $complemento = $dados["complemento_cli"];
    $telefone = $dados["telefone_cli"];

    ?>

    <form action="altera_cli.php" method="POST">

      <div class="form-group">
        <label for="nome"> Nome </label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome ?>">
      </div>

      <div class="form-group">
        <label for="email"> Email </label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>">
      </div>

      <div class="form-group">
        <label for="senha"> Senha </label>
        <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $senha ?>">
      </div>

      <div class="form-group">
        <label for="cep"> CEP </label>
        <input type="text" id="cep" name="cep" class="form-control" value="<?php echo $cep ?>">
      </div>

      <div class="form-group">
        <label for="cidade"> Cidade </label>
        <input type="text" id="cidade" name="cidade" class="form-control" value="<?php echo $cidade ?>">
      </div>

      <div class="form-group">
        <label for="bairro"> Bairro </label>
        <input type="text" id="bairro" name="bairro" class="form-control" value="<?php echo $bairro ?>">
      </div>

      <div class="form-group">
        <label for="rua"> Rua </label>
        <input type="text" name="rua" id="rua" class="form-control" value="<?php echo $rua ?>">
      </div>

      <div class="form-group">
        <label for="numero"> Numero </label>
        <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $numero ?>">
      </div>

      <div class="form-group">
        <label for="complemento"> Complemento </label>
        <input type="text" name="complemento" id="complemento" class="form-control" value="<?php echo $complemento ?>">
      </div>

      <div class="form-group">
        <label for="telefone"> Telefone </label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $telefone ?>">
      </div>

      <input type="submit" value="Alterar" class="btn">

    </form>


  </div>
</body>

</html>