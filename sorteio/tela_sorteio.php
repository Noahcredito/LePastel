<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte Alice -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

<style>

.conteiner{
  font-size: 22px;
  text-align: justify;
  background-color: #FFFFFF;
  width: 80%;
  height: 85%;
  border-radius: 50px;
  padding: 40px;
  position: absolute;
  top: 30px;
  left: 250px;
  font-family: Alice;
}

#btnCadastro{
    display: flex;
    align-items: right;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Tela de Sorteio</title>
</head>
<body>

<?php require '../cliente/lista_cli_select.php';
    require '../barra_lateral.html';
    require '../conexao.php';

echo "<div class='conteiner'>";
    /*espaço pro select/combo box*/
    echo '<form action="processa_cadastro.php" method="post">';  

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
   echo "</select>".'<input type="submit" id="btnCadastro" value="Cadastrar">'.
    '</form>';
    echo "<br><br>";

    /*espaço para mostrar usuários da tb_cli_sort*/

    echo '<div id="dados">';

    echo '</div>'

    /*corfirmação se o usuário ainda não foi cadastrado*/
?>

<script>
        $(document).ready(function() {
            // Função para buscar os dados do banco de dados
            function atualizarDados() {
                $.ajax({
                    url: 'buscar_dados.php', // O arquivo PHP que buscará os dados no banco
                    method: 'GET',
                    success: function(response) {
                        $('#dados').html(response); // Atualiza o conteúdo da div com os dados retornados
                    }
                });
            }

            // Atualiza os dados automaticamente a cada 5 segundos
            setInterval(atualizarDados, 1000); // 5000 milissegundos = 5 segundos
        });

    </script>




</div>
</body>
</html>