<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <title>Cadastro de ADM</title>

</head>
<body>
    
<div id="img">
<img src="../imagens/logo1.png" width="200" heigth="200" />
</div>

<br>
<div class="container">
    <br><br>
<form action="cadastra_adm.php" method="POST">

    <div class="form-group">
        <label for="nome"> Nome </label><br>
        <input type="text"  name="nome" class="form-control" placeholder="Digite seu nome">
	</div>
	  
    <div class="form-group">
	    <label for="email"> Email </label><br>
        <input type="text" name="email" class="form-control" placeholder="Digite o email">
	</div> 

    <div class="form-group">
	    <label for="cpf"> Senha </label><br>
        <input type="password"  name="senha" class="form-control" placeholder="Digite a senha">

        <br><br>
        <input type="password"  name="senhacon" class="form-control" placeholder="Confirme a senha">
    </div><br><br>

    <input type="submit" value="Cadastrar" class="btn">

   </form>
   <br><br>
</div>

</body>
</html>