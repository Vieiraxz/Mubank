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

// pegar o id da conta recém criada
    $sql2 = "SELECT idconta FROM conta WHERE numero_conta = ?";
    $comando2 = mysqli_prepare($conexao, $sql2);
    mysqli_stmt_bind_param($comando2, "s", $numero_conta);
    mysqli_stmt_execute($comando2);
    $resultado2 = mysqli_stmt_get_result($comando2);
    $linha2 = mysqli_fetch_array($resultado2);
    $idconta = $linha2['idconta'];

$interesses = $_POST['interesse'];
foreach ($interesses as $interesse) {
    $sql_interesse = "INSERT INTO interesse (idconta, interesse) VALUES (?, ?)";
    $comando_interesse = mysqli_prepare($conexao, $sql_interesse);
    mysqli_stmt_bind_param($comando_interesse, "is", $idconta, $interesse);
    mysqli_stmt_execute($comando_interesse);
}

header("Location: principal.php");
?>