<?php
// Inclua o arquivo de conexão com o banco de dados
require_once '../conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o valor selecionado da combobox (ID do cliente)
    $idCliente = $_POST['cli'];

    // Execute a consulta SQL para inserir o ID do cliente no banco de dados
    $sql = "INSERT INTO tb_cli_sort (cod_cli) VALUES ('$idCliente')";
    
    if (mysqli_query($con, $sql)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir o registro: " . mysqli_error($con);
    }
}

?>