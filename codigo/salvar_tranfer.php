<?php
session_start();
require_once 'conexao.php';

$idconta_origem = $_SESSION['idconta'];
$idconta_destino = $_POST['idconta'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO transacao (idconta_origem, idconta_destino,  valor, tipo, descricao) VALUES (?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "iiiss", $idconta_origem, $idconta_destino, $valor, $tipo, $descricao);
mysqli_stmt_execute($comando);




$sql2 = "SELECT saldo FROM conta WHERE idconta = ?";
$comando = mysqli_prepare($conexao, $sql2);
mysqli_stmt_bind_param($comando, "i", $idconta_origem);
mysqli_stmt_execute($comando);
$resultado = mysqli_stmt_get_result($comando);
$linha = mysqli_fetch_array($resultado);
$saldoantigo = $linha['saldo'];

$saldonovo = $saldoantigo - $valor;

if ($saldonovo < 0) {
    header("Location: fazer_tranfer.php?error=Saldo insuficiente");
} else {
    $sql3 = "UPDATE conta SET saldo = ? WHERE idconta = ?";
    $comando3 = mysqli_prepare($conexao, $sql3);
    mysqli_stmt_bind_param($comando3, "di", $saldonovo, $idconta_origem);
    mysqli_stmt_execute($comando3);

    

    $sql4 = "SELECT saldo FROM conta WHERE idconta = ?";
    $comando = mysqli_prepare($conexao, $sql4);
    mysqli_stmt_bind_param($comando, "i", $idconta_destino);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);
    $linha = mysqli_fetch_array($resultado);
    $saldoantigodestino = $linha['saldo'];

    $saldonovodestino = $saldoantigodestino + $valor;

    $sql5 = "UPDATE conta SET saldo = ? WHERE idconta = ?";
    $comando = mysqli_prepare($conexao, $sql5);
    mysqli_stmt_bind_param($comando, "di", $saldonovodestino, $idconta_destino);
    mysqli_stmt_execute($comando);
    header("Location: principal.php");
}



// Lógica para realizar a transferência
