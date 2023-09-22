<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">

    <!-- Fonte Alice -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    

    <title>Cadastro de Cliente</title>
</head>
<body>

<div id="img">
<img src="../imagens/logo1.png" width="200" heigth="200" />
</div>

<br>
<div class="container">
<br><br>

<form action="cadastra_cli.php" method="POST">

    <div class="form-group">
        <label for="nome"> Nome </label><br>
        <input type="text"  name="nome" class="form-control" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
	    <label for="email"> Email </label><br>
        <input type="text" name="email" class="form-control" placeholder="Digite seu email">
	</div> 

    <div class="form-group">
	    <label for="senha"> Senha </label><br>
        <input type="text"  name="senha" class="form-control" placeholder="Digite sua senha">
    </div>

    <div class="form-group">
	    <label for="bairro"> Bairro </label><br>
        <input type="text"  name="bairro" class="form-control" placeholder="Digite seu bairro">
    </div>

    <div class="form-group">
	    <label for="rua"> Rua </label><br>
        <input type="text"  name="rua" class="form-control" placeholder="Digite sua rua">
    </div>

    <div class="form-group">
	    <label for="numero"> Número </label><br>
        <input type="text"  name="numero" class="form-control" placeholder="Digite seu número">
    </div>

    <div class="form-group">
	    <label for="telefone"> Telefone </label><br>
        <input type="text"  name="telefone" class="form-control" placeholder="Digite seu telefone">
    </div><br><br>

    <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">

   </form>

   <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  
</body>
</html>