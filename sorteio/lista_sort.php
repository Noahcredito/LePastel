<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            display: flex;
            align-items: flex-start;
            background-color: #FFE780;
            overflow: hidden;
        }



        .conteiner {
            font-size: 22px;
            text-align: justify;
            background-color: #FFFFFF;
            width: 100%;/* Alterado para ocupar toda a largura disponível */
            max-width: none;/* Removido o tamanho máximo */
            padding: 5%;
            font-family: Alice;
            margin-left: 19%;/* Espaço para a barra lateral */
            margin-top: 3%;/* Margem superior */
            margin-right: 3%;/* Margem direita */
            border-radius: 5%;
        }
    </style>

    <title>Listagem de Sorteios</title>
</head>

<body>
    <?php
    require "../conexao.php";
    require "../barra_lateral.html";

    /*2- criando o comando sql para consulta dos registros */
    $comandoSql = "SELECT nome_adm, nome_cli, data_sor from tb_sorteio s
     JOIN tb_adm a ON (s.cod_adm = a.id_adm)
     JOIN tb_cliente c ON (c.id_cli = s.cod_cli);";

    /*3- executando o comando sql */
    $resultado = mysqli_query($con, $comandoSql);

    /*4- pegando os dados da consulta criada e exibindo */
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $nomeAdm = $_GET["nome_adm"];
        $nomeCli = $_GET["nome_cli"];
        $data = $_GET["data_sor"];

        echo "Nome do administrador: $nomeAdm <br>";
        echo "Nome do cliente: $nomeCli<br>";
        echo "Data: $data <br>";

        echo "<hr>";
    }
    ?>
</body>

</html>