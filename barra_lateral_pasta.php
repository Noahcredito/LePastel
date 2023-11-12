<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
.navbar{
  background-color: #000000;
  position: fixed;
  top: 0;
  width: 17.2%;
  height: 100%;
}

#botaoCadastrar{
  position: absolute;
  background-color: #FFCE08;
  color: #000000;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  font-size: 16px;
  cursor: pointer;
  top: 32%;
  left: 28%;
}

#botaoLogin{
  position: absolute;
  background-color: #FFCE08;
  color: #000000;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  font-size: 16px;
  cursor: pointer;
  top: 38%;
  left: 28.7%;
}

.btn:hover {
    background-color: #3636B3;
}

.btn:active {
    transform: translateY(1px);
    box-shadow: none;
}

.imagem{
  cursor: pointer;
  width: 100%;
  height: 25%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container{
  width: 50%;
  height: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

#menu-toggle {
    display: none;
}

#menu-icon {
    font-size: 35px;
    cursor: pointer;
    position: fixed;
    top: 45%;
    left: 7.5%;
    z-index: 2;
    color: #FFCE08;
}

#menu {
    background-color: #FFFFFF;
    color: #000000;
    text-align: center;
    position: fixed;
    left: -280px;
    width: 230.8px;
    height: 165px;
    transition: left 0.3s;
    z-index: 1;
    top: 52.5%;
}

#menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

#menu ul li {
    padding: 8px;
}

#menu ul li a {
    color: #000000;
}

#menu-toggle:checked + #menu-icon + #menu {
    left: 0;
}

#caixaLinks{
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    z-index: 1;
    cursor: pointer;
    top: 82.5%;
    left: 30%;
}

#caixaLinks a{
      color: #000000;
}

#caixaLinks a:hover{
      color: #000000;
}
</style>

<script>
    function toggleCaixa() {
      var caixa = document.getElementById("caixaLinks");
      caixa.style.display = (caixa.style.display === "none") ? "block" : "none";
    }
</script>
</head>
<body style="background-color:#FFE780">
<?php

echo"<div class='navbar'>";
    echo"<a href='../index.php'>
          <img src = '../imagens/logo.png' width='100%' height='200px'>
        </a>";

    if(!isset($_SESSION['user'])){
      echo"<a href='../cliente/frm_cadastra_cli.html'>
             <button id='botaoCadastrar' class='btn'>Cadastre-se</button>
           </a>

           <a href='../frm_login.html'>
             <button id='botaoLogin' class='btn'>Fazer Login</button>
           </a>";
    };
?>

  <div class="container">

    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" id="menu-icon">&#9776;</label>
    <div id="menu">
        <ul>
            <li><a href="../pasteisSalgados/tela_salgados.php">Pastéis Salgados</a></li>
            <li><a href="../pasteisDoces/tela_doces.php">Pastéis Doces</a></li>
            <li><a href="../tela_bebidas.php">Bebidas</a></li>
            <?php
        if (!isset($_SESSION['user']) || $_SESSION['user'] != 'admin') {
          echo '</ul>';
        }else{
          echo '<li><a href="sorteio/tela_sorteio.php">Sorteio</a></li>';
          echo '</ul>';
        }
        ?>
    </div>
  </div>

  <div class="imagem">
     <img src = "../imagens/engrenagem.png" width="40px" height="40px" alt="Imagem" onclick="toggleCaixa()">
  </div>

  <?php
  if ($_SESSION['user'] == 'comum') {
    echo '<div id="caixaLinks">';
    echo '<a href="../cliente/frm_altera_cli.php">Alterar Perfil</a>';
    echo '</div>';
  } elseif ($_SESSION['user'] == 'admin') {
    echo '<div id="caixaLinks">';
    echo '<a href="../adm/frm_altera_adm.php">Alterar Perfil</a>';
    echo '</div>';
  } else {
    echo '<div id="caixaLinks">';
    echo '<a>Faça login</a>';
    echo '</div>';
  }
  ?>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>