<?php
// Inclua o arquivo de conexão com o banco de dados
require_once '../conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o valor selecionado da combobox
    $valor = $_POST['valor'];

    // Execute a consulta SQL para inserir o valor no banco de dados
    $sql = "INSERT INTO tb_cli_sort (cod_cli) VALUES ('$valor')";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir o registro: " . mysqli_error($conexao);
    }
}
?>