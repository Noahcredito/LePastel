<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ADM</title>
</head>
<body>
    
<form action="cadastra_adm.php" method="POST">
    <div class="form-group">
        <label for="nome"> Nome </label>
        <input type="text"  name="nome" class="form-control" >
	</div>
	  
    <div class="form-group">
	    <label for="email"> Email </label>
        <input type="email" name="email" class="form-control">
	</div> 

    <div class="form-group">
	    <label for="cpf"> Senha </label>
        <input type="text"  name="senha" class="form-control">
    </div>

    <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">

   </form>

</body>
</html>