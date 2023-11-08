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
    width: 100%; /* Alterado para ocupar toda a largura disponível */
    max-width: none; /* Removido o tamanho máximo */
    padding: 5%;
    font-family: Alice;
    margin-left: 19%; /* Espaço para a barra lateral */
    margin-top: 3%; /* Margem superior */
    margin-right: 3%; /* Margem direita */
    border-radius: 5%;
}

#btnCadastro {
    display: flex;
    justify-content: flex-end;
}


/* Adicione uma media query para ajustar o tamanho em telas menores, se necessário */
@media (max-width: 768px) {
    .conteiner {
        font-size: 18px; /* Ajuste o tamanho da fonte em telas menores */
    }
}

    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Tela de Sorteio</title>
</head>

<body>

    <?php require '../barra_lateral.html';
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

    echo '<button id="btnLimpar">Limpar</button>';

    echo '<button id="btnListar">Listar sorteios</button>';

    echo "<br><br>";

    echo '<p>Sorteado: <span id="idSorteado"></span></p><br>';

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
                echo $linha['nome_cli'] . '<br>';
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
            location.reload();
        });

        document.getElementById('btnListar').addEventListener('click', function() {
            window.location.assign("lista_sort.php");
        });

        document.getElementById('btnLimpar').addEventListener('click', function() {
            location.reload();
        });


        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("btnSorteio").addEventListener("click", function() {
                // Fazer uma solicitação ao "sorteador.php"
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "sorteador.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.getElementById("idSorteado").textContent = xhr.responseText;
                    } else if (xhr.status !== 200) {
                        alert("Erro ao sortear o cliente.");
                    }
                };
                xhr.send();
            });
        });

        document.getElementById('btnLimpar').addEventListener('click', function() {
            // Fazer uma solicitação para o arquivo "limpar.php"
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "limpar.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText); // Exibe a resposta do servidor em um alerta
                } else if (xhr.status !== 200) {
                    alert("Erro ao apagar dados.");
                }
            };
            xhr.send();
        });

    </script>

    </div>
</body>

</html>