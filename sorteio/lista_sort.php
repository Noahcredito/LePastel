<?php
session_start();
?>

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
            width: 100%;
            max-width: none;
            padding: 5%;
            font-family: Alice;
            margin-left: 19%;
            margin-top: 5%;
            margin-right: 3%;
            border-radius: 20px;
        }
    </style>

    <title>Listagem de Sorteios</title>
</head>

<body>
    <?php
    require "../conexao.php";
    require "../barra_lateral_pasta.php";
    echo '<div class="conteiner">';
    $comandoSql = "SELECT a.nome_adm, c.nome_cli, data_sor FROM tb_sorteio s
                   JOIN tb_adm a ON (s.cod_adm = a.id_adm)
                   JOIN tb_cliente c ON (s.cod_cli = c.id_cli) ORDER BY s.id_sor desc;";

    $resultado = mysqli_query($con, $comandoSql);

    while ($dados = mysqli_fetch_assoc($resultado)) {
        $nomeAdm = $dados["nome_adm"];
        $nomeCli = $dados["nome_cli"];
        $data = $dados["data_sor"];

        echo "Nome do administrador: $nomeAdm <br>";
        echo "Nome do cliente: $nomeCli <br>";
        echo "Data: $data <br>";

        echo "<hr>";
    }
    echo '</div>';
    ?>
</body>

</html>