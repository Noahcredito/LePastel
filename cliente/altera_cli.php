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

    /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
    //$con=mysqli_connect("localhost","root","","bd_LePastel");
    require "../conexao.php";
    
    /*2- pegando os dados vindos do formulario e armazenando em variaveis */
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
	  
    /*3- criando o comando sql para alteracao do registro */
	$comandoSql="update tb_cliente set 
	nome_cli='$nome', email_cli='$email', senha_cli='$senha', bairro_cli='$bairro', cep_cli='$cep', cidade_cli='$cidade',
    rua_cli='$rua', numero_cli='$numero', complemento_cli='$complemento', telefone_cli='$telefone' where id_cli='$id'";
	
	/*4- executando o comando sql */
	$resultado=mysqli_query($con,$comandoSql);
	
	/*5- verificando se o comando sql foi executado */
     if($resultado==true)
		  echo "Alterado com sucesso";
	 else
		 echo "Erro na alteração";
	 
	

  ?>
  
  </div>
    </body>
</html>