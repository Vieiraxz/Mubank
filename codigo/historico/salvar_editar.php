<?php
require_once "verifica_sessao.php";
require_once "../conexao.php";
$descricao = $_POST['descricao'];
$idtransacao = $_GET['id'];

$sql = "UPDATE transacao SET descricao = ? WHERE idtransacao = ?";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "si", $descricao, $idtransacao);
mysqli_stmt_execute($comando);


header("Location: ../principal.php");
?>