<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Exclusão de cliente</title>
  </head>
  <body>
   <div class="container">
    <h3> Exclusão de cliente </h3>
   <?php
      $id=$_GET["id_cli"];
      echo "Deseja excluir o registro? ";
      echo "<a href=exclui_cli.php?id=$id> <button>  Sim</button> </a>";
      echo "<a href=lista_cli.php> <button>  Não</button> </a>";

    ?>
  </body>
</html>