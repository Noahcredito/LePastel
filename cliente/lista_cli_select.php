<?php
  function lista_cli_select(){
   /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_projeto");
     require "../conexao.php";  

     /*2- criando o comando sql para consulta dos registros */
     $comandoSql= "select id_cli, nome_cli from tb_cliente";

     /*3- executando o comando sql */
     $resultado=mysqli_query($con,$comandoSql);

     //criando o objeto select
     
     echo "<select name='cli' id='cli' class='form-control'>";
     /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id= $dados["id_cli"];
       $nome=$dados["nome_cli"];
       echo "<option value=$id> $nome </option>";
       
    }
    echo "</select>";

  }//fim do lista_cli_select()

//lista_cli_select();

function lista_cli_select_id($id_cli){
    /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
      //$con=mysqli_connect("localhost","root","","bd_projeto");
      require "../conexao.php";  
 
      /*2- criando o comando sql para consulta dos registros */
      $comandoSql= "select id_cli, nome_cli from tb_cli";
 
      /*3- executando o comando sql */
      $resultado=mysqli_query($con,$comandoSql);
 
      //criando o objeto select
      
      echo "<select name='cliente' class='form-control'>";
      /*4- pegando os dados da consulta criada e exibindo */
      while($dados=mysqli_fetch_assoc($resultado)){
        $id= $dados["id_cli"];
        $nome=$dados["nome_cli"];
        if($id_cli==$id)
          echo "<option value=$id selected> $nome </option>";
        else
          echo "<option value=$id> $nome </option>";
     }
     echo "</select>";
 
   }//fim do lista_cli_select_id()

    //lista_cli_select_id(2)

?>