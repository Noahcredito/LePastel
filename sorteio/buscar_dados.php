<?php
require_once '../conexao.php';

$sql = "SELECT * FROM tb_cli_sort cs
JOIN tb_cliente c ON (cs.cod_cli = c.id_cli);";
$result = mysqli_query($con, $sql);

if ($result) {
    $output = '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<li>' . $row['nome_cli'] . ' | ' . $row['email_cli'] . ' | ' . $row['cidade_cli'] . '</li>';
    }
    $output .= '</ul>';
    
    echo $output;
} else {
    echo 'Erro na consulta ao banco de dados';
}
?>
