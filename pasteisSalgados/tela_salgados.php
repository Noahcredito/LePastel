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
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 32%;
  text-align: center;
  color: #000000;
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
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 4%;
  text-align: center;
  color: #000000;
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
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 23%;
  text-align: center;
  color: #000000;
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
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 30%;
  text-align: center;
  color: #000000;
}
.imagem5{
  position: absolute;
  top: 60%;
  left: 20%;
}
.imagem5 img{
  border-radius: 10%;
}
.texto5{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 31%;
  text-align: center;
  color: #000000;
}
.imagem6{
  position: absolute;
  top: 60%;
  left: 40%;
}
.imagem6 img{
  border-radius: 10%;
}
.texto6{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 30%;
  text-align: center;
  color: #000000;
}
.imagem7{
  position: absolute;
  top: 60%;
  left: 60%;
}
.imagem7 img{
  border-radius: 10%;
}
.texto7{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 30%;
  text-align: center;
  color: #000000;
}
.imagem8{
  position: absolute;
  top: 60%;
  left: 80%;
}
.imagem8 img{
  border-radius: 10%;
}
.texto8{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 12%;
  text-align: center;
  color: #000000;
}
.imagem9{
  position: absolute;
  top: 120%;
  left: 20%;
}
.imagem9 img{
  border-radius: 10%;
}
.texto9{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 20%;
  text-align: center;
  color: #000000;
}
.imagem10{
  position: absolute;
  top: 120%;
  left: 40%;
}
.imagem10 img{
  border-radius: 10%;
}
.texto10{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 25%;
  text-align: center;
  color: #000000;
}
.imagem11{
  position: absolute;
  top: 120%;
  left: 60%;
}
.imagem11 img{
  border-radius: 10%;
}
.texto11{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 2%;
  text-align: center;
  color: #000000;
}
.imagem12{
  position: absolute;
  top: 120%;
  left: 80%;
}
.imagem12 img{
  border-radius: 10%;
}
.texto12{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 29%;
  text-align: center;
  color: #000000;
}
.imagem13{
  position: absolute;
  top: 180%;
  left: 20%;
}
.imagem13 img{
  border-radius: 10%;
}
.texto13{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 15%;
  text-align: center;
  color: #000000;
}
.imagem14{
  position: absolute;
  top: 180%;
  left: 40%;
}
.imagem14 img{
  border-radius: 10%;
}
.texto14{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 14%;
  text-align: center;
  color: #000000;
}
.imagem15{
  position: absolute;
  top: 180%;
  left: 60%;
}
.imagem15 img{
  border-radius: 10%;
}
.texto15{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 5%;
  text-align: center;
  color: #000000;
}
.imagem16{
  position: absolute;
  top: 180%;
  left: 80%;
}
.imagem16 img{
  border-radius: 10%;
}
.texto16{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 9%;
  text-align: center;
  color: #000000;
}
.imagem17{
  position: absolute;
  top: 240%;
  left: 20%;
}
.imagem17 img{
  border-radius: 10%;
}
.texto17{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 17%;
  text-align: center;
  color: #000000;
}
.imagem18{
  position: absolute;
  top: 240%;
  left: 40%;
}
.imagem18 img{
  border-radius: 10%;
}
.texto18{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 16%;
  text-align: center;
  color: #000000;
}
.texto{
  position: absolute;
  top: 300%;
  left: 20%;
  font-family: Alice;
  color: #000000;
}
.imagem19{
  position: absolute;
  top: 308%;
  left: 20%;
}
.imagem19 img{
  border-radius: 10%;
}
.texto19{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 29%;
  text-align: center;
  color: #000000;
}
.imagem20{
  position: absolute;
  top: 308%;
  left: 40%;
}
.imagem20 img{
  border-radius: 10%;
}
.texto20{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 6%;
  text-align: center;
  color: #000000;
}
.imagem21{
  position: absolute;
  top: 308%;
  left: 60%;
}
.imagem21 img{
  border-radius: 10%;
}
.texto21{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 0%;
  text-align: center;
  color: #000000;
}
.imagem22{
  position: absolute;
  top: 308%;
  left: 80%;
}
.imagem22 img{
  border-radius: 10%;
}
.texto22{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 17%;
  text-align: center;
  color: #000000;
}
.imagem23{
  position: absolute;
  top: 368%;
  left: 20%;
}
.imagem23 img{
  border-radius: 10%;
}
.texto23{
  position: absolute;
  font-family: Alice;
  font-size: 20px;
  left: 27%;
  text-align: center;
  color: #000000;
}

a:link{
  color: #000000;
}
a:visited{
  color: #000000;
}
a:hover{
  color: #000000;
}
a:active{
  color: #000000;
}
</style>
</head>
<body>
<?php require '../barra_lateral_pasta.php'?>

  <div class="imagem1">
    <img src = "../imagens/vento.png" width="220px" height="220px">
    <div class="texto1">
    <a href="pastel_vento.php">VENTO</a>
    <p>P R$5,00<br>
    G R$7,00</p>
    </div>
  </div>

  <div class="imagem2">
    <img src = "../imagens/lombo.png" width="220px" height="220px">
    <div class="texto2">
    <a href="pastel_lombo.php">LOMBO CANADENSE</a>
    <p>P R$8,00<br>
    G R$11,00</p>
    </div>
  </div>

  <div class="imagem3">
    <img src = "../imagens/calabresa.png" width="220px" height="220px">
    <div class="texto3">
    <a href="pastel_calabresa.php">CALABRESA</a>
    <p>P R$8,00<br>
    G R$11,00</p>
    </div>
  </div>
  
  <div class="imagem4">
    <img src = "../imagens/frango.png" width="220px" height="220px">
    <div class="texto4">
    <a href="pastel_frango.php">FRANGO</a>
    <p>P R$8,00<br>
    G R$11,00</p>
    </div>
  </div>

  <div class="imagem5">
    <img src = "../imagens/carne.png" width="220px" height="220px">
    <div class="texto5">
    <a href="pastel_carne.php">CARNE</a>
    <p>P R$9,00<br>
    G R$12,00</p>
    </div>
  </div>

  <div class="imagem6">
    <img src = "../imagens/misto.png" width="220px" height="220px">
    <div class="texto6">
    <a href="pastel_misto.php">MISTO</a>
    <p>P R$11,00<br>
    G R$14,00</p>
    </div>
  </div>

  <div class="imagem7">
    <img src = "../imagens/pizza.png" width="220px" height="220px">
    <div class="texto7">
    <a href="pastel_pizza.php">PIZZA</a>
    <p>P R$11,00<br>
    G R$14,00</p>
    </diV>
  </div>

  <div class="imagem8">
    <img src = "../imagens/frango_a_moda.png" width="220px" height="220px">
    <div class="texto8">
    <a href="pastel_frango_a_moda.php">FRANGO À MODA</a>
    <p>P R$13,00<br>
    G R$16,00</p>
    </div>
  </div>

  <div class="imagem9">
    <img src = "../imagens/file_ao_alho.png" width="220px" height="220px">
    <div class="texto9">
    <a href="pastel_file_ao_alho.php">FILÉ AO ALHO</a>
    <p>P R$13,00<br>
    G R$16,00</p>
    </div>
  </div>

  <div class="imagem10">
    <img src = "../imagens/dog_misto.png" width="220px" height="220px">
    <div class="texto10">
    <a href="pastel_dog_misto.php">DOG MISTO</a>
    <p>P R$14,00<br>
    G R$17,00</p>
    </div>
  </div>

  <div class="imagem11">
    <img src = "../imagens/calabresa_especial.png" width="220px" height="220px">
    <div class="texto11">
    <a href="pastel_calabresa_especial.php">CALABRESA ESPECIAL</a>
    <p>P R$14,00<br>
    G R$17,00</p>
    </div>
  </div>

  <div class="imagem12">
    <img src = "../imagens/paulista.png" width="220px" height="220px">
    <div class="texto12">
    <a href="pastel_paulista.php">PAULISTA</a>
    <p>P R$14,00<br>
    G R$17,00</p>
    </div>
  </div>

  <div class="imagem13">
    <img src = "../imagens/a_portuguesa.png" width="220px" height="220px">
    <div class="texto13">
    <a href="pastel_a_portugesa.php">A PORTUGUESA</a>
    <p>P R$15,00<br>
    G R$18,00</p>
    </div>
  </div>

  <div class="imagem14">
    <img src = "../imagens/misto_especial.png" width="220px" height="220px">
    <div class="texto14">
    <a href="pastel_misto_especial.php">MISTO ESPECIAL</a>
    <p>P R$15,00<br>
    G R$18,00</p>
    </div>
  </div>

  <div class="imagem15">
    <img src = "../imagens/brocolis.png" width="220px" height="220px">
    <div class="texto15">
    <a href="pastel_brocolis_especial.php">BRÓCOLIS ESPECIAL</a>
    <p>P R$15,00<br>
    G R$18,00</p>
    </div>
  </div>

  <div class="imagem16">
    <img src = "../imagens/frango_especial.png" width="220px" height="220px">
    <div class="texto16">
    <a href="pastel_frango_especial.php">FRANGO ESPECIAL</a>
    <p>P R$16,00<br>
    G R$19,00</p>
    </div>
  </div>

  <div class="imagem17">
    <img src = "../imagens/dog_especial.png" width="220px" height="220px">
    <div class="texto17">
    <a href="pastel_dog_especial.php">DOG ESPECIAL</a>
    <p>P R$17,00<br>
    G R$20,00</p>
    </div>
  </div>

  <div class="imagem18">
    <img src = "../imagens/file_especial.png" width="220px" height="220px">
    <div class="texto18">
    <a href="pastel_file_especial.php">FILÉ ESPECIAL</a>
    <p>P R$17,00<br>
    G R$20,00</p>
    </div>
  </div>

  <div class="texto">
    <h2>VEGETARIANOS</h2>
  </div>

  <div class="imagem19">
    <img src = "../imagens/queijo.png" width="220px" height="220px">
    <div class="texto19">
    <a href="pastel_queijo.php">QUEIJO</a>
    <p>P R$9,00<br>
    G R$12,00</p>
    </div>
  </div>

  <div class="imagem20">
    <img src = "../imagens/palmito_cremoso.png" width="220px" height="220px">
    <div class="texto20">
    <a href="pastel_palmito_cremoso.php">PALMITO CREMOSO</a>
    <p>P R$9,00<br>
    G R$12,00</p>
    </div>
  </div>

  <div class="imagem21">
    <img src = "../imagens/brocolis_com_queijo.png" width="220px" height="220px">
    <div class="texto21">
    <a href="pastel_brocolis_com_queijo.php">BRÓCOLIS COM QUEIJO</a>
    <p>P R$10,00<br>
    G R$13,00</p>
    </div>
  </div>

  <div class="imagem22">
    <img src = "../imagens/vegetariano.png" width="220px" height="220px">
    <div class="texto22">
    <a href="pastel_vegetariano.php">VEGETARIANO</a>
    <p>P R$15,00<br>
    G R$18,00</p>
    </div>
  </div>

  <div class="imagem23">
    <img src = "../imagens/4_queijos.png" width="220px" height="220px">
    <div class="texto23">
    <a href="pastel_4_queijos.php">4 QUEIJOS</a>
    <p>P R$18,00<br>
    G R$21,00</p>
    </div>
  </div>
</body>
</html>