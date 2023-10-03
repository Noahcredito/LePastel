<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte Alice -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">

<style>

.conteiner{
  font-size: 22px;
  text-align: justify;
  background-color: #FFFFFF;
  width: 80%;
  height: 85%;
  border-radius: 50px;
  padding: 40px;
  position: absolute;
  top: 30px;
  left: 250px;
  font-family: Alice;
}

</style>

<script>
    // Função para fazer a solicitação AJAX
    function listarClientes() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'listar_clientes.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var listaClientes = JSON.parse(xhr.responseText);
                var listaClientesHTML = '<ul>';
                listaClientes.forEach(function (cliente) {
                    listaClientesHTML += '<li>' + cliente.nome + '</li>';
                });
                listaClientesHTML += '</ul>';
                document.getElementById('lista-clientes').innerHTML = listaClientesHTML;
            }
        };
        xhr.send();
    }


</script>

    <title>Tela de Sorteio</title>
</head>
<body>

<?php require 'cliente/lista_cli_select.php';
    require 'barra_lateral.html';
    require 'conexao.php';

echo "<div class='conteiner'>";
    /*espaço pro select/combo box*/
    echo lista_cli_select()."<br><br>";
    /*espaço para mostrar usuários da tb_cli_sort*/
    
    // Consulta SQL para listar os clientes
$query = "SELECT * FROM tb_cliente";
$resultado = mysqli_query($con, $query);

// Verifique se a consulta teve sucesso
if ($resultado) {
    $clientes = array();

    // Transforme os resultados em um array associativo
    while ($row = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $row;
    }

    // Converta o array em formato JSON e envie para o cliente
    echo json_encode($clientes);    
} else {
    // Se a consulta falhou, retorne um JSON vazio ou uma mensagem de erro, conforme necessário
    echo json_encode(array('mensagem' => 'Erro ao listar clientes'));
}

// Feche a conexão com o banco de dados
mysqli_close($con);


$resultado= json_decode(file_get_contents($clientes));
$dadosRetorno=$resultado->id_cli.",".$resultado->nome_cli.",".$resultado->email_cli.",".$resultado->cidade_cli.",".$resultado->bairro_cli.",".$resultado->rua_cli.",
".$resultado->numero_cli.",".$resultado->telefone_cli;


    /*corfirmação se o usuário ainda não foi cadastrado*/
?>




</div>
</body>
</html>