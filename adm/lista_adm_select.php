<?php
  function lista_adm_select(){
   /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_projeto");
     require "conexao.php";  

     /*2- criando o comando sql para consulta dos registros */
     $comandoSql= "select id_adm, nome_adm from tb_adm";

     /*3- executando o comando sql */
     $resultado=mysqli_query($con,$comandoSql);

     //criando o objeto select
     
     echo "<select name='adm' class='form-control'>";
     /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id= $dados["id_adm"];
       $nome=$dados["nome_adm"];
       echo "<option value=$id> $nome </option>";
       
    }
    echo "</select>";

  }//fim do lista_adm_select()

//lista_adm_select();

function lista_adm_select_id($id_adm){
    /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
      //$con=mysqli_connect("localhost","root","","bd_projeto");
      require "conexao.php";  
 
      /*2- criando o comando sql para consulta dos registros */
      $comandoSql= "select id_adm, nome_adm from tb_adm";
 
      /*3- executando o comando sql */
      $resultado=mysqli_query($con,$comandoSql);
 
      //criando o objeto select
      
      echo "<select name='adm' class='form-control'>";
      /*4- pegando os dados da consulta criada e exibindo */
      while($dados=mysqli_fetch_assoc($resultado)){
        $id= $dados["id_adm"];
        $nome=$dados["nome_adm"];
        if($id_adm==$id)
          echo "<option value=$id selected> $nome </option>";
        else
          echo "<option value=$id> $nome </option>";
     }
     echo "</select>";
 
   }//fim do lista_adm_select_id()

    //lista_adm_select_id(2)

?>