<?php
require '../conexao.php';

// Verificar a conexão
if ($con->connect_error) {
    die("Conexão com o banco de dados falhou: " . $con->connect_error);
}

// Consulta para obter todos os IDs da tabela
$sql = "SELECT cod_cli FROM tb_sort_cli";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Armazena os IDs em um array
    $ids = array();
    while ($row = $result->fetch_assoc()) {
        $ids[] = $row['cod_cli'];
    }

    // Sortear um ID aleatório
    $id_sorteado = $ids[array_rand($ids)];

    // Fechar a conexão
    $conn->close();

    // Retornar o ID sorteado
    echo $id_sorteado;
} else {
    echo "Nenhum registro encontrado na tabela.";
}

?>
