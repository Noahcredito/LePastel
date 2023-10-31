<?php
header("refresh:2;url=tela_sorteio.php");
require_once '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cli = $_POST['cli'];

    // Verifique se o usuário já existe no banco de dados
    $verificarUsuario = "SELECT cod_cli FROM tb_cli_sort WHERE cod_cli = $id_cli";
    
    $resultado = mysqli_query($con, $verificarUsuario);

    if ($resultado) { // Verifica se a consulta foi bem-sucedida
        if (mysqli_num_rows($resultado) > 0) {
            // O usuário já existe, exiba uma mensagem de erro
            echo "Usuário já cadastrado.";
        } else {
            // O usuário não existe, pode inserir os dados no banco de dados
            $inserirUsuario = "INSERT INTO tb_cli_sort (cod_cli) VALUES ($id_cli)";
            if (mysqli_query($con, $inserirUsuario)) {
                echo "Usuário cadastrado com sucesso.";
            } else {
                echo "Erro ao cadastrar o usuário: " . mysqli_error($con);
            }
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($con);
    }
}
?>