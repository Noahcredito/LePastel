<?php
// Inclua o arquivo de conexão com o banco de dados
require_once '../conexao.php';

// Consulta ao banco de dados (substitua pelo seu código)
$sql = "SELECT * FROM tb_cli_sort cs
JOIN tb_cliente c ON (cs.cod_cli = c.id_cli);";
$result = mysqli_query($con, $sql);

if ($result) {
    // Monta a resposta em formato HTML
    $output = '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<li>' . $row['nome_cli'] . ': ' . $row['email_cli'] . ': ' . $row['cidade_cli'] . '</li>';
    }
    $output .= '</ul>';
    
    echo $output;
} else {
    echo 'Erro na consulta ao banco de dados';
}
?>
