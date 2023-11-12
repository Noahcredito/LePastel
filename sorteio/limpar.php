<?php
require '../conexao.php';

if ($con->connect_error) {
    die("Conexão com o banco de dados falhou: " . $con->connect_error);
}

$sql = "DELETE FROM tb_cli_sort";

if ($con->query($sql) === TRUE) {
    echo "A limpeza foi um sucesso.";
} else {
    echo "Erro ao apagar dados: " . $con->error;
}

$con->close();

header("Location: tela_sorteio.php"); 
?>
