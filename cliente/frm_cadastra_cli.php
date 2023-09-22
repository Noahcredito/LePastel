<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
<script>
    function alerta(){
        alert("Digite o cep")
    }
</script>
<h3> Cadastro de Cliente </h3>
<form action="cadastra_cli.php" method="POST">
    <div class="form-group">
        <label for="nome"> Nome </label>
        <input type="nome"  id="nome" name="nome" class="form-control" >
	</div>
	  
    <div class="form-group">
	    <label for="email"> Email </label>
        <input type="email" id="email" name="email" class="form-control">
	</div> 

    <div class="form-group">
	    <label for="senha"> Senha </label>
        <input type="senha"  id="senha" name="senha" class="form-control">
    </div>

    <div class="form-group">
	    <label for="cep"> CEP </label>
        <input type="cep"  id="cep" name="cep" class="form-control">
    </div>

    <div class="form-group">
	    <label for="cidade"> Cidade </label>
        <input type="cidade"  id="cidade" name="cidade" class="form-control">
    </div>

    <div class="form-group">
	    <label for="bairro"> Bairro </label>
        <input type="bairro"  id="bairro" name="bairro" class="form-control">
    </div>

    <div class="form-group">
	    <label for="rua"> Rua </label>
        <input type="rua"  id="rua" name="rua" class="form-control">
    </div>

    <div class="form-group">
	    <label for="numero"> Número </label>
        <input type="numero"  id="numero" name="numero" class="form-control">
    </div>

    <div class="form-group">
	    <label for="complemento"> Complemento </label>
        <input type="complemento"  id="complemento" name="complemento" class="form-control">
    </div>

    <div class="form-group">
	    <label for="telefone"> Telefone </label>
        <input type="telefone"  id="telefone" name="telefone" class="form-control">
    </div>

    <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">

   </form>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
   <script src="../js/script.js" type="text/javascript"> </script>
</body>
</html>