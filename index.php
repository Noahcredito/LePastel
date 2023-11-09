<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
<style>
.box{
  font-size: 18.7px;
  text-align: center;
  background-color: #FFFFFF;
  width: 550px;
  height: 550px;
  border-radius: 50px;
  padding: 0.1px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 18%;
  font-family: Alice;
}

.imagem1{
  padding: 0.1px;
  position: absolute;
  top: 38%;
  transform: translateY(-50%);
  left: 61%;
}

.imagem2{
  padding: 0.1px;
  position: absolute;
  top: 64%;
  transform: translateY(-50%);
  left: 65%;
}

@media screen and (min-width: 320px) and (max-width: 480px){
  .box{
    font-size: 16.06px;
    text-align: center;
    background-color: #FFFFFF;
    width: 460px;
    height: 460px;
    border-radius: 50px;
    padding: 0.1px;
    position: absolute;
    top: 70%;
    transform: translateY(-50%);
    left: 37%;
    font-family: Alice;
  }

  .imagem1{
    padding: 0.1px;
    position: absolute;
    top: 150%;
    transform: translateY(-50%);
    left: 25%;
  }

  .imagem2{
    padding: 0.1px;
    position: absolute;
    top: 150%;
    transform: translateY(-50%);
    left: 30%;
  }
}

@media screen and (min-width: 769px) and (max-width: 1024px){
  .box{
    font-size: 10px;
    text-align: center;
    background-color: #FFFFFF;
    width: 200px;
    height: 150px;
    border-radius: 50px;
    padding: 0.1px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 20%;
    font-family: Alice;
  }

  .imagem1{
    padding: 0.1px;
    position: absolute;
    top: 34.5%;
    transform: translateY(-50%);
    left: 65%;
  }

  .imagem2{
    padding: 0.1px;
    position: absolute;
    top: 75%;
    transform: translateY(-50%);
    left: 75%;
  }
}

@media screen and (min-width: 1025px) and (max-width: 1200px){
  .box{
    font-size: 10px;
    text-align: center;
    background-color: #FFFFFF;
    width: 200px;
    height: 150px;
    border-radius: 50px;
    padding: 0.1px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 20%;
    font-family: Alice;
  }

  .imagem1{
    padding: 0.1px;
    position: absolute;
    top: 34.5%;
    transform: translateY(-50%);
    left: 65%;
  }

  .imagem2{
    padding: 0.1px;
    position: absolute;
    top: 75%;
    transform: translateY(-50%);
    left: 75%;
  }
}

@media screen and (min-width: 1920px){
  .box{
    font-size: 23.7px;
    text-align: center;
    background-color: #FFFFFF;
    width: 650px;
    height: 650px;
    border-radius: 50px;
    padding: 0.1px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 20%;
    font-family: Alice;
  }

  .imagem1{
    padding: 0.1px;
    position: absolute;
    top: 37%;
    transform: translateY(-50%);
    left: 59%;
  }

  .imagem2{
    padding: 0.1px;
    position: absolute;
    top: 63%;
    transform: translateY(-50%);
    left: 66%;
  }
}
</style>
</head>
<body>
<?php

require 'barra_lateral.php'?>
<div class="container">
<div class="item">
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
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>