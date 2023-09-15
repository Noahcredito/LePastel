<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Listagem dos Administradores</title>
  </head>
  <body>
    <div class="container">
	
    <h3>Listagem dos Administradores </h3>
    <?php
     require "../conexao.php";  

     /*2- criando o comando sql para consulta dos registros */
     $comandoSql= "select * from tb_adm";

     /*3- executando o comando sql */
     $resultado=mysqli_query($con,$comandoSql);
     
     /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$_GET["id_adm"];
       $nome=$_GET["nome_adm"];
       $email=$_GET["email_adm"];
       $senha=$_GET["senha_adm"];

       echo "Id: $id <br>";
       echo "Nome: $nome <br>";
       echo "Email: $email<br>";
       echo "Senha: $senha <br>";
	   
	   echo "<a href='frm_altera_adm.php?id=$id'>Editar </a>";
	   echo "<a href='del_adm.php?id=$id'>Excluir </a> <br> <br>";
     }
    ?>
   </body>
</html> 