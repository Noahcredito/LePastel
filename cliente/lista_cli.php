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
       $id=$_POST["id_cli"];
       $nome=$_POST["nome_cli"];
       $email=$_POST["email_cli"];
       $senha=$_POST["senha_cli"];
       $cep=$_POST["cep_cli"];
       $cidade=$_POST["cidade_cli"];
       $bairro=$_POST["bairro_cli"];        
       $rua=$_POST["rua_cli"];
       $numero=$_POST["numero_cli"];
       $complemento=$_POST["complemento_cli"];
       $telefone=$_POST["telefone_cli"];

       echo "Id: $id <br>";
       echo "Nome: $nome <br>";
       echo "Email: $email<br>";
       echo "Senha: $senha <br>";
       echo "Bairro: $bairro <br>";
       echo "CEP: $cep <br>";
       echo "Cidade: $cidade <br>";
       echo "Rua: $rua <br>";
       echo "Número: $numero <br>";
       echo "Complemento: $complemento <br>";
       echo "Telefone: $telefone <br>";
	   
	   echo "<a href='frm_altera_cli.php?id=$id'>Editar </a>";
	   echo "<a href='del_cli.php?id=$id'>Excluir </a> <br> <br>";
     }
    ?>
   </body>
</html> 