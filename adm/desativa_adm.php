<?php
session_start();
require "../conexao.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.php");
    exit();
}

$id = $_SESSION["user_id"];

$comandoSql = "UPDATE tb_adm SET status = 0 WHERE id_adm = $id";

if (mysqli_query($con, $comandoSql)) {
    session_destroy();
    header("Location: ../index.php");
    exit();
} else {
    echo "Erro ao desativar a conta: " . mysqli_error($con);
}
?>