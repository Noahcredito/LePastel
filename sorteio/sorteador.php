<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_SESSION['user_id'])) {
        echo "Usuário não autenticado. Faça login antes de continuar.";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['user_id'])) {
        require '../conexao.php';

        if ($con->connect_error) {
            die("Conexão com o banco de dados falhou: " . $con->connect_error);
        }

        $cod_adm = $_SESSION['user_id'];

        $sql = "SELECT cod_cli FROM tb_cli_sort ORDER BY RAND() LIMIT 1";
        $result = $con->query($sql);

        if ($result === false) {
            die("Erro na consulta SQL: " . $con->error);
        }

        if ($result->num_rows > 0) {
            $linha = $result->fetch_assoc();
            $cod_cli = $linha['cod_cli'];

            date_default_timezone_set('America/Sao_Paulo');
            $data = date('Y-m-d H:i:s');

            $sqlInserir = "INSERT INTO tb_sorteio (cod_cli, cod_adm, data_sor) VALUES ('$cod_cli', '$cod_adm', '$data')";

            if ($con->query($sqlInserir) === TRUE) {
                echo "Sorteio realizado e dados salvos com sucesso!";
            } else {
                echo "Erro ao salvar os dados: " . $con->error;
            }

            $con->close();
        } else {
            echo "Nenhum registro encontrado na tabela tb_cli_sort.";
        }
    }
}
?>
