<?php
require_once "verifica_sessao.php";
require_once "../conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$idusuario = $_SESSION['idusuario'];

$sql = "UPDATE usuario SET nome = ?, email = ? WHERE idusuario = ?";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "sss", $nome, $email, $idusuario);
mysqli_stmt_execute($comando);

$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;

header("Location: ../principal.php");
?>