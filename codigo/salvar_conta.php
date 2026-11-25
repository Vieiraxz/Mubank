<?php
require_once ("conexao.php");

$nome = $_POST['nome'];
$numero_conta = $_POST['numero_conta'];
$agencia = $_POST['agencia'];
$saldo = $_POST['saldo'];

session_start();
$idusuario = $_SESSION['idusuario'];

$sql = "INSERT INTO conta (nome, numero_conta, agencia, saldo, idusuario) VALUES (?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "sssdi", $nome, $numero_conta, $agencia, $saldo, $idusuario);
mysqli_stmt_execute($comando);
header("Location: form_conta.php");
?>