<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>

<?php
header("refresh:2;url=../index.php");
    /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/

        require "../conexao.php";

    /*2- pegando os dados vindos do formulario e armazenando em variaveis */

        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $senha=$_POST["senha"];
        $cep=$_POST["cep"];
        $cidade=$_POST["cidade"];
        $bairro=$_POST["bairro"];
        $rua=$_POST["rua"];
        $numero=$_POST["numero"];
        $complemento=$_POST["complemento"];
        $telefone=$_POST["telefone"];
    /*3- criando o comando sql para insercao do registro */

      $comandoSql="INSERT INTO tb_cliente
      (nome_cli, senha_cli, email_cli, cep_cli, cidade_cli, bairro_cli, rua_cli, numero_cli, complemento_cli, telefone_cli)
      VALUES
      ('$nome', '$senha', '$email', '$cep', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$telefone');";
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