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
  left: 20%;
}

.imagem1 img{
  border-radius: 10%;
}

.texto1{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 16%;
  text-align: center;
}

.imagem2{
  position: absolute;
  top: 5%;
  left: 40%;
}

.imagem2 img{
  border-radius: 10%;
}

.texto2{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 23%;
  text-align: center;
}

.imagem3{
  position: absolute;
  top: 5%;
  left: 60%;
}

.imagem3 img{
  border-radius: 10%;
}

.texto3{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 10%;
  text-align: center;
}
.imagem4{
  position: absolute;
  top: 5%;
  left: 80%;
}

.imagem4 img{
  border-radius: 10%;
  margin-right: 15%;
}

.texto4{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 30%;
  text-align: center;
}

.imagem5{
  position: absolute;
  top: 65%;
  left: 20%;
}

.imagem5 img{
  border-radius: 10%;
}

.texto5{
  color: #000000;
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 27%;
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
<?php require '../barra_lateral_pasta.php'?>

  <div class="imagem1">
    <img src = "../imagens/doce_de_leite.png" width="220px" height="220px">
    <div class="texto1">
    <a href="pastel_doce_de_leite.php">DOCE DE LEITE</a>
    <p>P R$8,00<br>
    G R$11,00</p>
    </div>
  </div>

  <div class="imagem2">
    <img src = "../imagens/chocolate.png" width="220px" height="220px">
    <div class="texto2">
    <a href="pastel_chocolate.php">CHOCOLATE</a>
    <p>P R$9,00<br>
    G R$12,00</p>
    </div>
  </div>

  <div class="imagem3">
    <img src = "../imagens/romeu_e_julieta.png" width="220px" height="220px">
    <div class="texto3">
    <a href="pastel_romeu_e_julieta.php">ROMEU E JULIETA</a>
    <p>P R$10,00<br>
    G R$13,00</p>
    </div>
  </div>
  
  <div class="imagem4">
    <img src = "../imagens/shot.png" width="220px" height="220px">
    <div class="texto4">
    <a href="pastel_shot.php">SHOT</a>
    <p>P R$10,00<br>
    G R$13,00</p>
    </div>
  </div>

  <div class="imagem5">
    <img src = "../imagens/chocobis.png" width="220px" height="220px">
    <div class="texto5">
    <a href="pastel_chocobis.php">CHOCOBIS</a>
    <p>P R$11,00<br>
    G R$14,00</p>
    </div>
  </div>
</body>
</html>