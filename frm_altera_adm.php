<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Alteração do Administrador</title>
  </head>
  <body>
  <div class="container">
    <h3> Alteração do Administrador </h3>
   <?php

     /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
     //$con=mysqli_connect("localhost", "root", "", "bd_LePastel");
     require "conexao.php";
    
    /*2- pegando o valor vindo da url */
	  $id=$_GET["id"];
    
    /*3- criando o comando sql para listar os dados do cliente selecionado */
	  $comandoSql="select * from tb_adm where id_adm='$id'";
	
	/*4- executando o comando sql */
	$resultado=mysqli_query($con, $comandoSql);
	
	/*5- pegando os dados da consulta criada e armazenando em variaveis */
  $dados= mysqli_fetch_assoc($resultado);

  $nome=$_POST["nome"];
  $email=$_POST["email"];
  $senha=$_POST["senha"];

  ?>
  <!--preenchendo o formulario com dados da consulta -->
  <form action="altera_adm.php" method="POST">
  <div class="form-group">
      <label for="id"> Id </label>
      <input readonly type="text"  name="id" class="form-control" value="<?php echo $id?>">
	 	 </div>

     <div class="form-group">
      <label for="nome"> Nome </label>
      <input type="text"  name="nome" class="form-control" value="<?php echo $nome?>">
	 	 </div>

     <div class="form-group">
	   <label for="email"> Email </label>
       <input type="email" name="email" class="form-control" value="<?php echo $email?>">
	  </div> 

      <div class="form-group">
	   <label for="senha"> Senha </label>
       <input type="senha" name="senha" class="form-control" value="<?php echo $senha?>">
	  </div> 

   </form>
  
  
  </div>
 </body>
</html>