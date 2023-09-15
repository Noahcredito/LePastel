<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}
/*.navbar{
  background-color: #000000;
  position: fixed;
  top: 0;
  width: 200px;
  height: 100%;
}*/
.box{
  text-align: center;
  background-color: #FFFFFF;
  width: 550px;
  height: 350px;
  border-radius: 50px;
  padding: 0.1px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 250px;
}
.imagem{
  padding: 0.1px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 1000px;
}
.bar{
  height: 7px;
  width: 70px;
  background-color: #FFFFFF;
  display: block;
  border-radius: 5px;
  transition: 0.3s ease;
  position: absolute;
  top: 35%;
  left: 3.80%;
}
#bar1{
  transform: translateY(-14px);
}
#bar2{
  transform: translateY(0);
}
#bar3{
  transform: translateY(14px);
}
.nav li a
{
  color: #FFFFFF;
  text-decoration: none;
}
.nav li a:hover
{
  font-weight: bold;
}
.nav li
{
  list-style: none;
  padding: 16px 0;
}
.nav
{
  padding: 0;
  margin: 0 20px;
  transition: 0.3s ease;
  display: none;
}
.menu-bg, #menu-bar{
  top:0;
  left:0;
  position: absolute;
}
.menu-bg{
  z-index: 1;
  width: 0;
  height: 0;
  margin: 30px 0 20px 20px;
  border-radius: 50%;
  transition: 0.3s ease;
}
#menu-bar{
  z-index:2;
}
.change-bg
{
  width: 550px;
  height: 540px;
  transform: translate(-60%, -30%);
}
</style>
</head>
<body style="background-color:#FFE780">

<div class="navbar">
  <img src = "imagens/logo.png" width="200px" height="200px">
</div>

<div class="box">
    <p> SOBRE NÓS </p>
    <p>A Le Pastel nasceu do sonho da sua fundadora de empreender e compartilhar suas delícias com todos que amam uma boa comida. No ano de 2021 o projeto foi tirado do papel e finalmente o sonho teve início.</p>
    <p>Iniciamos com poucos sabores e com uma equipe reduzida, mas após 2 anos podemos dizer que conquistamos o paladar dos amantes de pastel da nossa cidade.</p>
    <p>Hoje contamos com uma ampla estrutura de preparo, entregas e equipe treinada e preparada para garantir que os nossos clientes possam saborear o melhor pastel da cidade, com ingredientes de qualidade, atendimento personalizado e sabor inigualável.</p>
    <p>Escolha o seu sabor preferido e aproveite o pastel mais recheado, saboroso e sequinho de Rio Preto e região.</p>
    <p>Equipe Le Pastel Food Delivery</p>	
  </div>

  <div class="imagem">
    <img src="imagens/foto_inicio.jpg" width="450px" height="450px">
  </div>

  <div id="menu-bar">
     <div id="menu">
          <div id="bar1" class="bar"></div>
          <div id="bar2" class="bar"></div>
          <div id="bar3" class="bar"></div>
     </div>
     <ul class="nav" id="nav">
         <li><a href="#">Pastéis Salgados</a></li>
         <li><a href="#">Pastéis Doces</a></li>
         <li><a href="#">Bebidas</a></li>
     </ul>
</div>
<div class="menu-bg" id="menu-bg"></div>

</body>
</html>