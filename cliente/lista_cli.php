<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Listagem de cliente</title>
  </head>
  <body>
    <div class="container">
	
    <h3>Listagem de cliente </h3>
    <?php
     require "../conexao.php";  

     /*2- criando o comando sql para consulta dos registros */
     $comandoSql= "select * from tb_cliente";

     /*3- executando o comando sql */
     $resultado=mysqli_query($con,$comandoSql);
     
     /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$_POST["id"];
       $nome=$_POST["nome"];
       $email=$_POST["email"];
       $senha=$_POST["senha"];
       $bairro=$_POST["bairro"];
       $rua=$_POST["rua"];
       $numero=$_POST["numero"];
       $telefone=$_POST["telefone"];

       echo "Id: $id <br>";
       echo "Nome: $nome <br>";
       echo "Email: $email<br>";
       echo "Senha: $senha <br>";
       echo "Bairro: $bairro <br>";
       echo "Rua: $rua <br>";
       echo "Número: $numero <br>";
       echo "Telefone: $telefone <br>";
	   
	   echo "<a href='frm_altera_cli.php?id=$id'>Editar </a>";
	   echo "<a href='del_cli.php?id=$id'>Excluir </a> <br> <br>";
     }
    ?>
   </body>
</html> 