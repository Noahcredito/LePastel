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
    <h3> Alteração de Cliente </h3>
   <?php

     /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
     //$con=mysqli_connect("localhost", "root", "", "bd_LePastel");
     require "conexao.php";
    
    /*2- pegando o valor vindo da url */
	  $id=$_GET["id"];
    
    /*3- criando o comando sql para listar os dados do cliente selecionado */
	  $comandoSql="select * from tb_cliente where id_cli='$id'";
	
	/*4- executando o comando sql */
	$resultado=mysqli_query($con, $comandoSql);
	
	/*5- pegando os dados da consulta criada e armazenando em variaveis */
  $dados= mysqli_fetch_assoc($resultado);

  $nome=$_POST["nome"];
  $email=$_POST["email"];
  $senha=$_POST["senha"];
  $bairro=$_POST["bairro"];
  $rua=$_POST["rua"];
  $numero=$_POST["numero"];
  $telefone=$_POST["telefone"];

  ?>
  <!--preenchendo o formulario com dados da consulta -->
  <form action="altera_cli.php" method="POST">
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

      <div class="form-group">
	   <label for="bairro"> Bairro </label>
       <input type="bairro" name="bairro" class="form-control" value="<?php echo $bairro?>">
	  </div> 

      <div class="form-group">
	   <label for="rua"> Rua </label>
       <input type="rua" name="rua" class="form-control" value="<?php echo $rua?>">
	  </div> 

      <div class="form-group">
	   <label for="numero"> Numero </label>
       <input type="numero" name="numero" class="form-control" value="<?php echo $numero?>">
	  </div> 

      <div class="form-group">
	   <label for="telefone"> Telefone </label>
       <input type="telefone" name="telefone" class="form-control" value="<?php echo $telefone?>">
	  </div> 
	     <input type="submit" value="Alterar" class="btn btn-outline-secondary">

   </form>
  
  
  </div>
 </body>
</html>