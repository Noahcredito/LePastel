<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ADM</title>
</head>
<body>

<?php
    /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/

        require "conexao.php";

    /*2- pegando os dados vindos do formulario e armazenando em variaveis */

        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $senha=$_POST["senha"];

    /*3- criando o comando sql para insercao do registro */

      $comandoSql="INSERT INTO tb_adm
      (nome_adm, senha_adm, email_adm)
      VALUES
      ('$nome', '$senha', '$email');";
     // echo $comandoSql;

    /*4- executando o comando sql */
      $resultado=mysqli_query($con,$comandoSql);

    /*5- verificando se o comando sql foi executado*/

        if($resultado==true)
            echo "Cadastrado com sucesso";
        else
            echo "Erro no cadastro";

   ?>
    
</body>
</html>