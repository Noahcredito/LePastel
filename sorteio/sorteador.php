<?php
require '../conexao.php';

// Verificar a conexão
if ($con->connect_error) {
    die("Conexão com o banco de dados falhou: " . $con->connect_error);
}

// Consulta SQL para selecionar um ID aleatório da tabela "tb_cli_sort"
$sql = "SELECT cod_cli FROM tb_cli_sort ORDER BY RAND() LIMIT 1";
$result = $con->query($sql);

if ($result === false) {
    die("Erro na consulta SQL: " . $con->error);
}

if ($result->num_rows > 0) {
    $linha = $result->fetch_assoc();
    $idSorteado = $linha['cod_cli'];

    // Consulta SQL para buscar o nome do cliente com base no ID sorteado
    $sqlNomeCliente = "SELECT nome_cli FROM tb_cliente WHERE id_cli = $idSorteado";
    $resultNomeCliente = $con->query($sqlNomeCliente);

    if ($resultNomeCliente->num_rows > 0) {
        $linhaNomeCliente = $resultNomeCliente->fetch_assoc();
        $nomeClienteSorteado = $linhaNomeCliente['nome_cli'];
        $con->close();
        echo $nomeClienteSorteado;
    } else {
        echo "Nome de cliente não encontrado.";
    }
} else {
    echo "Nenhum registro encontrado na tabela.";
}
?>
