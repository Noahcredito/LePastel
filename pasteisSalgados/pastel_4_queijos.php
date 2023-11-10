<?php
ini_set('session.cookie_httponly', 1);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
body {margin:0;}
.imagem-pastel{
  padding: 0.1px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 20%;
}

.imagem-pastel img{
  border-radius: 5%;
  text-align: center;
}

.texto{
  position: absolute;
  font-family: Alice;
  font-size: 25px;
  top: 50%;
  transform: translateY(-50%);
  left: 65%;
  text-align: center;
}
</style>
</head>
<body style="background-color:#FFE780">
<?php require 'barra_lateral_pasta.php'?>
  <div class="imagem-pastel">
    <img src = "imagens/4_queijos.png" width="50%" height="50%">
  </div>

  <div class="texto">
    <p>Pastel de 4 Queijos<br>
    P R$18,00<br>
    G R$21,00<br><br>
    Ingredientes: Queijo Provolone, Mussarela, Catupiry e Cream-Cheese</p>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>