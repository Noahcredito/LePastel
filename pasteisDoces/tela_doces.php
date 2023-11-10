<?php
ini_set('session.cookie_httponly', 1);
session_start();
?>

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

.texto1{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 34.2%;
  text-align: center;
}

.imagem2{
  position: absolute;
  top: 5%;
  left: 630px;
}

.imagem2 img{
  border-radius: 10%;
}

.texto2{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 34.2%;
  text-align: center;
}

.imagem3{
  position: absolute;
  top: 5%;
  left: 930px;
}

.imagem3 img{
  border-radius: 10%;
}

.texto3{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 34.2%;
  text-align: center;
}
.imagem4{
  position: absolute;
  top: 5%;
  left: 1230px;
}

.imagem4 img{
  border-radius: 10%;
}

.texto4{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 34.2%;
  text-align: center;
}

.imagem5{
  position: absolute;
  top: 50%;
  left: 330px;
}

.imagem5 img{
  border-radius: 10%;
}

.texto5{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 34.2%;
  text-align: center;
}

a:link {
  color: #000000;
}
a:visited {
  color: #000000;
}
a:hover {
  color: #000000;
}
a:active {
  color: #000000;
}
</style>
</head>
<body>
<?php require '../barra_lateral.php'?>

  <div class="imagem1">
    <img src = "imagens/doce_de_leite.png" width="250px" height="250px">
    <div class="texto1">
    <a href="pastel_doce_de_leite.php">DOCE<br>DE LEITE</a>
    <p>P R$8,00<br>
    G R$11,00</p>
    </div>
  </div>

  <div class="imagem2">
    <img src = "imagens/chocolate.png" width="250px" height="250px">
    <div class="texto2">
    <a href="pastel_chocolate.php">CHOCOLATE</a>
    <p>P R$9,00<br>
    G R$12,00</p>
    </div>
  </div>

  <div class="imagem3">
    <img src = "imagens/romeu_e_julieta.png" width="250px" height="250px">
    <div class="texto3">
    <a href="pastel_romeu_e_julieta.php">ROMEU<br>E JULIETA</a>
    <p>P R$10,00<br>
    G R$13,00</p>
    </div>
  </div>
  
  <div class="imagem4">
    <img src = "imagens/shot.png" width="250px" height="250px">
    <div class="texto4">
    <a href="pastel_shot.php">SHOT</a>
    <p>P R$10,00<br>
    G R$13,00</p>
    </div>
  </div>

  <div class="imagem5">
    <img src = "imagens/chocobis.png" width="250px" height="250px">
    <div class="texto5">
    <a href="pastel_chocobis.php">CHOCOBIS</a>
    <p>P R$11,00<br>
    G R$14,00</p>
    </div>
  </div>
</body>
</html>