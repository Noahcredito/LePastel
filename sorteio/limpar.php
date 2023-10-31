<?php
require '../conexao.php';

// Verificar a conexão
if ($con->connect_error) {
    die("Conexão com o banco de dados falhou: " . $con->connect_error);
}

// Consulta SQL para apagar todos os dados na tabela
$sql = "DELETE FROM tb_cli_sort"; // Substitua "nome_da_sua_tabela" pelo nome real da tabela

if ($con->query($sql) === TRUE) {
    echo "A limpeza foi um sucesso.";
} else {
    echo "Erro ao apagar dados: " . $con->error;
}

// Fechar a conexão com o banco de dados
$con->close();

// Redirecionar de volta para a página de origem
header("Location: tela_sorteio.php"); 
?>
