<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}
.imagem1{
  position: absolute;
  top: 5%;
  left: 330px;
}
.imagem1 img{
  border-radius: 10%;
}
.imagem2{
  position: absolute;
  top: 5%;
  left: 630px;
}
.imagem2 img{
  border-radius: 10%;
}
.imagem3{
  position: absolute;
  top: 5%;
  left: 930px;
}
.imagem3 img{
  border-radius: 10%;
}
.imagem4{
  position: absolute;
  top: 5%;
  left: 1230px;
}
.imagem4 img{
  border-radius: 10%;
}
.imagem5{
  position: absolute;
  top: 50%;
  left: 330px;
}
.imagem5 img{
  border-radius: 10%;
}
/*.navbar{
  background-color: #000000;
  position: fixed;
  top: 0;
  width: 200px;
  height: 100%;
}

.imagem{
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
<?php require 'barra_lateral.html' ?>

<!--div class="navbar">
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

<div class="imagem1">
    <img src = "imagens/doce_de_leite.png" width="250px" height="250px">
  </div>

  <div class="imagem2">
    <img src = "imagens/chocolate.png" width="250px" height="250px">
  </div>

  <div class="imagem3">
    <img src = "imagens/romeu_e_julieta.png" width="250px" height="250px">
  </div>
  
  <div class="imagem4">
    <img src = "imagens/shot.png" width="250px" height="250px">
  </div>

  <div class="imagem5">
    <img src = "imagens/chocobis.png" width="250px" height="250px">
  </div>
</body>
</html>