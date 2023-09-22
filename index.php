<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
<style>
body {margin:0;}
.navbar{
  background-color: #000000;
  position: fixed;
  top: 0;
  width: 200px;
  height: 100%;
}
.box{
  font-size: 23px;
  text-align: center;
  background-color: #FFFFFF;
  width: 600px;
  height: 550px;
  border-radius: 50px;
  padding: 0.1px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 250px;
  font-family: Alice;
}
.imagem1{
  padding: 0.1px;
  position: absolute;
  top: 34.5%;
  transform: translateY(-50%);
  left: 880px;
}
.imagem2{
  padding: 0.1px;
  position: absolute;
  top: 65.5%;
  transform: translateY(-50%);
  left: 1020px;
}
.container{
  height: 20%;
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
  background: #FFFFFF;
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
}
</style>
</head>
<body style="background-color:#FFE780">

<div class="navbar">
  <img src = "imagens/logo.png" width="200px" height="200px">
  <div class="container">
    <input type="checkbox" id="checkbox-menu">

    <label for="checkbox-menu">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
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
    <img src="imagens/foto1_inicio.jpeg" width="550px" height="295px">
  </div>

  <div class="imagem2">
    <img src="imagens/foto2_inicio.jpeg" width="550px" height="300px">
  </div>
</body>
</html>