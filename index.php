<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" media="all">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    .header {
      margin-left: auto;
      margin-right: auto;
      position: absolute;
      width: 20%;
      align-items: center;
      text-align: center;
      font-family: Alice;
      padding: 20px;
      background-color: #FFFFFF;
    }
    .box {
      font-size: 18.7px;
      text-align: center;
      background-color: #FFFFFF;
      width: 550px;
      height: 550px;
      border-radius: 50px;
      padding: 0.1px;
      margin: 0 auto;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 18%;
      font-family: Alice;
      margin-top: 20px;
    }
    .imagem1 {
      padding: 0.1px;
      position: absolute;
      top: 38%;
      transform: translateY(-50%);
      left: 61%;
    }
    .imagem2 {
      padding: 0.1px;
      position: absolute;
      top: 64%;
      transform: translateY(-50%);
      left: 65%;
    }
</style>
</head>

<body>
  <?php
  require 'barra_lateral.php';
  require 'conexao.php';

  $sql = "SELECT c.nome_cli FROM tb_sorteio s
  JOIN tb_cliente c ON (s.cod_cli = c.id_cli)
  WHERE s.data_sor >= DATE_SUB(NOW(), INTERVAL 1 DAY)
  AND s.data_sor <= NOW()
  LIMIT 1;";

  $result = $con->query($sql);

  if ($result === false) {
    die('Erro na consulta: ' . $con->error);
  }
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nomeCliente = $row['nome_cli'];
  } else {
    $nomeCliente = null;
  };
  ?>

  <div class="header">
    <?php if ($nomeCliente) : ?>
      <h2>Cliente: <?php echo $nomeCliente; ?></h2>
    <?php endif; ?>
  </div>

<div class="box">
    <p> SOBRE NÓS </p>
    <p>A Le Pastel nasceu do sonho da sua fundadora de empreender e compartilhar suas delícias com todos que amam uma boa comida. No ano de 2021 o projeto foi tirado do papel e finalmente o sonho teve início.</p>
    <p>Iniciamos com poucos sabores e com uma equipe reduzida, mas após 2 anos podemos dizer que conquistamos o paladar dos amantes de pastel da nossa cidade.</p>
    <p>Hoje contamos com uma ampla estrutura de preparo, entregas e equipe treinada e preparada para garantir que os nossos clientes possam saborear o melhor pastel da cidade, com ingredientes de qualidade, atendimento personalizado e sabor inigualável.</p>
    <p>Escolha o seu sabor preferido e aproveite o pastel mais recheado, saboroso e sequinho de Rio Preto e região.</p>
    <p>Equipe Le Pastel Food Delivery</p>
  </div>

  <div class="imagem1">
    <img src="imagens/foto1_inicio.jpeg" width="550px" height="320px">
  </div>

  <div class="imagem2">
    <img src="imagens/foto2_inicio.jpeg" width="550px" height="320px">
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>