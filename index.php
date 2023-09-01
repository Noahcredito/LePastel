<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  text-align: center;
  background-color: #FFFFFF;
  width: 550px;
  height: 390px;
  border-radius: 50px;
  padding: 0.1px;
  position: absolute;
  top: 50%;
  left: 34%;
  transform: translate(-50%, -50%);
}
.navbar .menu-faketrigger{
  position: absolute;
  z-index: 1000;
  width: 35px;
  height: 35px;
  opacity: 5;
  cursor: pointer;
}
.navbar .menu-faketrigger:checked ~ ul {
  background-color: #ff0000;
}
.navbar .menu-lines{
  position: absolute;
  z-index: 999;
  width: 35px;
  height: 35px;
}
.navbar .menu-lines span{
  display: block;
  width: 35px;
  height: 5px;
  margin-bottom: 10px;
  background-color: #fdc031;
  border-radius: 3px;
  transition: all ease .2s;
}
.navbar .menu-faketrigger:checked~.menu-lines span:nth-child(1) {
  transform-origin: 0% 100%;
  transform: rotate(45deg) scaleX(1.25);
}
.navbar .menu-faketrigger:checked~.menu-lines span:nth-child(2) {
  opacity: 0;
}
.navbar .menu-faketrigger:checked~.menu-lines span:nth-child(3) {
  transform-origin: 0% 100%;
  transform: rotate(-45deg) scaleX(1.25);
}
</style>
</head>
<body style="background-color:#FFE780">

<div class="navbar">
<img src = "imagens/logo.png" width="200px" height="200px">

<input type="checkbox" class="menu-faketrigger"/>

<div class="menu-lines">
  <span></span>
  <span></span>
  <span></span>
</div>

<ul>
  <li><a href="">Pastéis Salgados</a></li>
  <li><a href="">Pastéis Doces</a></li>
  <li><a href="">Pastéis Bebidas</a></li>
</ul>
</div>

<div class="box">
    <p> SOBRE NÓS </p>
    <p>O Le Pastel Food Delivery surgiu no ano de 2021, ano de pandemia, época onde muitos estavam sendo dispensados de seus empregos, algo que aconteceu em nosso meio, o desemprego chegou e com isso, a necessidade de se obter uma renda estável também.</p>
    <p>Já havíamos tido uma experiência em trabalhar nessa área, mas foi em outra cidade e acabou não dando certo, porém devido a todos os ocorridos decidimos abrir essa rede de Delivery.</p>
    <p>Aqui no Le Pastel Food Delivery podemos garantir a vocês fregueses que não irá faltar sabor no seu pastel, atenção no atendimento, sorteios concorrendo aos nossos deliciosos pastéis, não faltará aquela embalagem embalada com todo amor, nossos funcionários se dedicam ao máximo para que vocês possam receber sempre aquele pastel sequinho e muito saboroso, venham experimentar, faça uma compra conosco todo mês e concorra a brindes incríveis no final dos meses.</p>
    <p>Obrigada pela atenção.<br>
    Atenciosamente equipe do Le Pastel Food Delivery!!!</p>	
  </div>

</body>
</html>