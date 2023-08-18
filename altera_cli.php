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
    require "conexao.php";
    
    /*2- pegando os dados vindos do formulario e armazenando em variaveis */
      $id=$_POST["id"];
	  $nome=$_POST["nome"];
      $email=$_POST["email"];
      $senha=$_POST["senha"];
      $bairro=$_POST["bairro"];
      $rua=$_POST["rua"];
      $numero=$_POST["numero"];
      $telefone=$_POST["telefone"];

	  
    /*3- criando o comando sql para alteracao do registro */
	$comandoSql="update tb_cliente set 
	nome_cli='$nome', email_cli='$email', senha_cli='$senha', bairro_cli='$bairro',
    rua_cli='$rua', numero_cli='$numero', telefone_cli='$telefone' where id_cli='$id'";
	
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