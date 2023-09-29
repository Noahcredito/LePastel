<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Sorteio</title>
</head>
<body>
    <?php require 'cliente/lista_cli_select.php';
    require 'barra_lateral.html';
    
    /*espaço pro select/combo box*/
    echo lista_cli_select();
    /*espaço para mostrar usuários da tb_cli_sort*/

    /*corfirmação se o usuário ainda não foi cadastrado*/
   ?>
</body>
</html>