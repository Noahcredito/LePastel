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

<script>
    function alerta(){
        alert("Digite o cep")
    }
</script>
<h3> Cadastro de Cliente </h3>

<form action="cadastra_cli.php" method="POST">

    <div class="form-group">

        <label for="nome"> Nome </label><br>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
	    <label for="email"> Email </label><br>
        <input type="text" id="email" name="email" class="form-control" placeholder="Digite seu email">
	</div> 

    <div class="form-group">
	    <label for="senha"> Senha </label><br>
        <input type="text" id="senha" name="senha" class="form-control" placeholder="Digite sua senha">
    </div>

    <div class="form-group">
	    <label for="cep"> CEP </label>
        <input type="text" id="cep" name="cep" class="form-control" placeholder="Digite seu CEP">
    </div>

    <div class="form-group">
	    <label for="cidade"> Cidade </label>
        <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Digite sua cidade">
    </div>

    <div class="form-group">
	    <label for="bairro"> Bairro </label>
        <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Digite seu bairro">
    </div>

    <div class="form-group">
	    <label for="rua"> Rua </label>
        <input type="text" id="rua" name="rua" class="form-control" placeholder="Digite o nome da rua">
    </div>

    <div class="form-group">
	    <label for="numero"> Número </label>
        <input type="text" id="numero" name="numero" class="form-control" placeholder="Digite o número do logradouro">
    </div>

    <div class="form-group">
	    <label for="complemento"> Complemento </label>
        <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Digite um complemento">
    </div>


    <div class="form-group">
	    <label for="telefone"> Telefone </label><br>
        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone">
    </div><br><br>

    <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">

   </form>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
   <script src="../js/script.js" type="text/javascript"> </script>

</body>
</html>