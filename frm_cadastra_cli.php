<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    
<form action="cadastra_cli.php" method="POST">
    <div class="form-group">
        <label for="nome"> Nome </label>
        <input type="text"  name="nome" class="form-control" >
	</div>
	  
    <div class="form-group">
	    <label for="email"> Email </label>
        <input type="email" name="email" class="form-control">
	</div> 

    <div class="form-group">
	    <label for="senha"> Senha </label>
        <input type="text"  name="senha" class="form-control">
    </div>

    <div class="form-group">
	    <label for="bairro"> Bairro </label>
        <input type="text"  name="bairro" class="form-control">
    </div>

    <div class="form-group">
	    <label for="rua"> Rua </label>
        <input type="text"  name="rua" class="form-control">
    </div>

    <div class="form-group">
	    <label for="numero"> Número </label>
        <input type="text"  name="numero" class="form-control">
    </div>

    <div class="form-group">
	    <label for="telefone"> Telefone </label>
        <input type="text"  name="telefone" class="form-control">
    </div>

    <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">

   </form>

</body>
</html>