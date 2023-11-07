<?php
session_start();
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['user_type'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];

        if ($user_type === 'comum') {
            // Consulta para verificar as credenciais de usuários comuns usando declarações preparadas
            $sql = "SELECT id_cli, email_cli, senha_cli FROM tb_cliente WHERE email_cli = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Mensagens de depuração
                echo "SQL Query: " . $sql . "<br>";
                echo "Senha no Banco de Dados: " . $row["senha_cli"] . "<br>";

                // Realize a comparação da senha
                if ($password === $row["senha_cli"]) {
                    $_SESSION['user'] = 'comum';
                    $_SESSION['user_id'] = $row['id_cli'];
                    $_SESSION['username'] = $row['nome_cli'];
                    header("Location: index.php"); // Redirecionar para o index após o login
                } else {
                    echo "Credenciais inválidas. Tente novamente.".$username.$password.$user_type."<br>";
                    header("refresh:3;url=frm_login.html");
                }
            } else {
                echo "Usuário comum não encontrado. Tente novamente.";
                header("refresh:3;url=frm_login.html");
            }
            $stmt->close();
        } elseif ($user_type === 'admin') {
            // Lógica para a autenticação de administrador
            $sql = "SELECT id_adm, email_adm, senha_adm FROM tb_adm WHERE email_adm = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Realize a comparação da senha
                if ($password === $row["senha_adm"]) {
                    $_SESSION['user'] = 'admin';
                    $_SESSION['user_id'] = $row['id_adm'];
                    $_SESSION['username'] = $row['nome_adm'];
                    header("Location: index.php"); // Redirecionar para o index após o login
                } else {
                    echo "Credenciais inválidas para o administrador. Tente novamente.";
                    header("refresh:3;url=frm_login.html");
                }
            } else {
                echo "Administrador não encontrado. Tente novamente.".$username.$password.$user_type;
                //header("refresh:3;url=frm_login.html");
            }
            $stmt->close();
        } else {
            echo "Tipo de usuário inválido.";
            header("refresh:3;url=frm_login.html");
        }
    } else {
        echo "Campos de formulário ausentes.";
        header("refresh:3;url=frm_login.html");
    }
} else {
    echo "Requisição inválida.";
    header("refresh:3;url=frm_login.html");
}

$con->close();
?>
