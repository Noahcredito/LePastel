<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Exclusão do Administrador</title>
  </head>
  <body>
   <div class="container">
    <h3> Exclusão do Administrador </h3>
   <?php
      $id=$_GET["id_adm"];
      echo "Deseja excluir o registro? ";
      echo "<a href=exclui_adm.php?id=$id> <button>  Sim</button> </a>";
      echo "<a href=lista_adm.php> <button>  Não</button> </a>";

    ?>
  </body>
</html>