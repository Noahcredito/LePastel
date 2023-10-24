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
  font-size: 20.9px;
  text-align: center;
  background-color: #FFFFFF;
  width: 600px;
  height: 550px;
  border-radius: 50px;
  padding: 0.1px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 17%;
  font-family: Alice;
}
.imagem1{
  padding: 0.1px;
  position: absolute;
  top: 34.5%;
  transform: translateY(-50%);
  left: 55%;
}
.imagem2{
  padding: 0.1px;
  position: absolute;
  top: 65.5%;
  transform: translateY(-50%);
  left: 63.75%;
}

/*body {margin:0;}
.navbar{
  background-color: #000000;
  position: fixed;
  top: 0;
  width: 200px;
  height: 100%;
}

.imagem{
  top: 0;
  height: 35%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container{
  height: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
#checkbox-menu{
  position: absolute;
  opacity: 0;
}
label{
  cursor: pointer;
  position: relative;
  display: block;
  height: 22px;
  width: 50px;
}
label span{
  position: absolute;
  display: block;
  height: 5px;
  width: 100%;
  border-radius: 30px;
  background: #FFCE08;
  transition: 0.25s ease-in-out;
}
label span:nth-child(1){
  top: 0;
}
label span:nth-child(2){
  top: 9px;
}
label span:nth-child(3){
  top: 18px;
}
#checkbox-menu:checked + label span:nth-child(1){
  transform: rotate(-45deg);
  top: 8px;
}
#checkbox-menu:checked + label span:nth-child(2){
  opacity: 0;
}
#checkbox-menu:checked + label span:nth-child(3){
  transform: rotate(45deg);
  top: 8px;
}*/
</style>
</head>
<body>
<?php require 'barra_lateral.html'?>
<!-- div class="navbar">
  <img src = "imagens/logo.png" width="200px" height="200px">
  <div class="container">
    <input type="checkbox" id="checkbox-menu">

    <label for="checkbox-menu">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <div class="imagem">
    <img src = "imagens/engrenagem.png" width="40px" height="40px">
  </div>

</div-->
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
    <img src="imagens/foto1_inicio.jpeg" width="550px" height="295px">
  </div>

  <div class="imagem2">
    <img src="imagens/foto2_inicio.jpeg" width="550px" height="300px">
  </div>
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>