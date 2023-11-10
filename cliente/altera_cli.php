<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Alteração de Cliente</title>
  </head>
  <body>
   <div class="container">
    <?php

    require "../conexao.php";
    
      $id=$_POST["id_cli"];
	    $nome=$_POST["nome_cli"];
      $email=$_POST["email_cli"];
      $senha=$_POST["senha_cli"];
      $bairro=$_POST["bairro_cli"];  
      $cep=$_POST["cep_cli"];
      $cidade=$_POST["cidade_cli"];      
      $rua=$_POST["rua_cli"];
      $numero=$_POST["numero_cli"];
      $complemento=$_POST["complemento_cli"];
      $telefone=$_POST["telefone_cli"];
	  
	$comandoSql="update tb_cliente set 
	nome_cli='$nome', email_cli='$email', senha_cli='$senha', bairro_cli='$bairro', cep_cli='$cep', cidade_cli='$cidade',
    rua_cli='$rua', numero_cli='$numero', complemento_cli='$complemento', telefone_cli='$telefone' where id_cli='$id'";
	
	$resultado=mysqli_query($con,$comandoSql);
	
     if($resultado==true)
		  echo "Alterado com sucesso";
	 else
		 echo "Erro na alteração";
	 
	

  ?>
  
  </div>
    </body>
</html>