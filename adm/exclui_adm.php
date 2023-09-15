<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Exclusão do Administrador</title>
  </head>
  <body>
   <div class="container">
    <h3> Exclusão do Administrador </h3>
   <?php

     /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_projeto");
     require "../conexao.php"; 
	 
    /*2- pegando o valor do id vindo de del_cliente*/
	$id_adm=$_GET["id"];
    
    /*3- criando o comando sql para exclusao do registro */
	$comandoSql="delete from tb_adm where id_adm='$id_adm'";
   
    /*4- executando o comando sql */
	$resultado=mysqli_query($con,$comandoSql);
   
    /*5- verificando se o comando sql foi executado */
	if($resultado==true)
		echo "Excluido com sucesso";
	else
		echo "Erro na exclusao";
	

  ?>
  </body>
</html>