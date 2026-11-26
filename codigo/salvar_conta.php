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

$interesses = $_POST['interesse'];
foreach ($interesses as $interesse) {
    $sql_interesse = "INSERT INTO interesses (idusuario, interesse) VALUES (?, ?)";
    $comando_interesse = mysqli_prepare($conexao, $sql_interesse);
    mysqli_stmt_bind_param($comando_interesse, "is", $idusuario, $interesse);
    mysqli_stmt_execute($comando_interesse);
}

header("Location: principal.php");
?>