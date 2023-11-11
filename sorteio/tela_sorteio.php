<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

.header {
      margin-left: auto;
      left: 17%;
      margin-right: auto;
      position: absolute;
      width: 83%;
      align-items: center;
      text-align: center;
      font-family: Alice;
      padding: 8px;
      background-color: #FFFFFF;
      font-size: 20px;
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

#btnCadastro {
    display: flex;
    justify-content: flex-end;
}

@media (max-width: 768px) {
    .conteiner {
        font-size: 18px;
    }
}

    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Tela de Sorteio</title>
</head>

<body>

    <?php 
    ini_set('session.cookie_httponly', 1);
    session_start();

    require '../barra_lateral_pasta.php';
    require '../conexao.php';
    
    $sql = "SELECT c.nome_cli FROM tb_sorteio s
    JOIN tb_cliente c ON (s.cod_cli = c.id_cli)
    WHERE s.data_sor >= DATE_SUB(NOW(), INTERVAL 1 DAY)
    AND s.data_sor <= NOW()
    LIMIT 1;";
  
    $result = $con->query($sql);
  
    if ($result === false) {
      die('Erro na consulta: ' . $con->error);
    }
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $nomeCliente = $row['nome_cli'];
    } else {
      $nomeCliente = null;
    };
  
    echo "<div class='header' " . (!$nomeCliente ? "style='display: none;'" : '') . ">";
    if ($nomeCliente) {
        echo "Cliente sorteado: $nomeCliente";
    }
    echo "</div>";

    echo "<div class='conteiner'>";

    echo '<form action="processa_cadastro.php" method="post">';

    $comandoSql = "select id_cli, nome_cli from tb_cliente";

    $resultado = mysqli_query($con, $comandoSql);

    echo "<select name='cli' id='cli' class='form-control'>";
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $id = $dados["id_cli"];
        $nome = $dados["nome_cli"];
        echo "<option value=$id> $nome </option>";
    }
    echo "</select>" . '<input type="submit" id="btnCadastro" value="Cadastrar">' .
        '</form>';


    echo '<button id="btnAtualizarDados">Atualizar Dados</button>';

    echo '<button id="btnSorteio">Sortear</button>';

    echo '<button id="btnLimpar">Limpar</button>';

    echo '<button id="btnListar">Listar sorteios</button>';

    echo "<br><br>";

    echo '<p><span id="idSorteado"></span></p><br>';

    echo '<div id="dados">';

    if (!$con) {
        die("Falha na conexão: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM tb_cli_sort cs
    JOIN tb_cliente c ON (cs.cod_cli = c.id_cli);";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            if (isset($linha['nome_cli'])) {
                echo $linha['nome_cli'] . '<br>';
            }
        }
    } else {
        echo "Nenhum dado encontrado";
    }

    mysqli_close($con);
    echo '</div>'

    ?>

    <script>

        document.getElementById('btnAtualizarDados').addEventListener('click', function() {
            location.reload();
        });

        document.getElementById('btnSorteio').addEventListener('click', function() {
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
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "sorteador.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var sorteioResponse = JSON.parse(xhr.responseText);
                    document.getElementById("idSorteado").textContent = sorteioResponse.sorteado;

                    var cod_cli = sorteioResponse.sorteado;
                    var cod_adm = <?php echo $_SESSION['user_id']; ?>;
                    var data = sorteioResponse.data;

                    var xhrInserirSorteio = new XMLHttpRequest();
                    xhrInserirSorteio.open("GET", "sorteador.php?cod_cli=" + cod_cli + "&cod_adm=" + cod_adm + "&data=" + data, true);
                    xhrInserirSorteio.onreadystatechange = function() {
                        if (xhrInserirSorteio.readyState === 4) {
                            if (xhrInserirSorteio.status === 200) {
                                document.getElementById("alerta").style.display = "block";
                                setTimeout(function() {
                                    document.getElementById("alerta").style.display = "none";
                                }, 3000);
                            } else {
                                alert("Erro ao salvar o sorteio.");
                            }
                        }
                    };
                    xhrInserirSorteio.send();
                } else {
                    alert("Erro ao sortear o cliente.");
                }
            }
        };
        xhr.send();
    });
});


        document.getElementById('btnLimpar').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "limpar.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
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