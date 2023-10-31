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
        .conteiner {
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

        #btnCadastro {
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
    $comandoSql = "select id_cli, nome_cli from tb_cliente";

    /*3- executando o comando sql */
    $resultado = mysqli_query($con, $comandoSql);

    //criando o objeto select

    echo "<select name='cli' id='cli' class='form-control'>";
    /*4- pegando os dados da consulta criada e exibindo */
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $id = $dados["id_cli"];
        $nome = $dados["nome_cli"];
        echo "<option value=$id> $nome </option>";
    }
    echo "</select>" . '<input type="submit" id="btnCadastro" value="Cadastrar">' .
        '</form>';

    /*espaço para mostrar usuários da tb_cli_sort*/
    echo '<button id="btnAtualizarDados">Atualizar Dados</button>';

    echo '<button id="btnSorteio">Sortear</button>';

    echo "<br><br>";

    echo '<div id="dados">';
    // Verifica se a conexão foi bem-sucedida
    if (!$con) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // Consulta SQL para buscar os dados (substitua pela sua consulta)
    $sql = "SELECT * FROM tb_cli_sort cs
    JOIN tb_cliente c ON (cs.cod_cli = c.id_cli);";
    $resultado = mysqli_query($con, $sql);

    // Exibe os dados na página
    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            if (isset($linha['nome_cli'])) {
                echo $linha['nome_cli'].'<br>';
            }
        }
    } else {
        echo "Nenhum dado encontrado";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($con);
    echo '</div>'

    ?>

    <script>
        document.getElementById('btnAtualizarDados').addEventListener('click', function() {
            // Recarregua a página para buscar os dados atualizados do banco de dados
            location.reload();
        });

        document.getElementById("btnSorteio").addEventListener("click", function () {
            // Fazer uma solicitação para "sorteador.php"
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "sorteador.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("idSorteado").textContent = xhr.responseText;
                } else if (xhr.status !== 200) {
                    alert("Erro ao sortear o cliente.");
                }
            };
            xhr.send();
        });
    </script>

    </div>
</body>

</html>