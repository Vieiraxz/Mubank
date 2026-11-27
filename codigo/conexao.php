
<?php
require_once "verifica_sessao.php";

$servidor = 'db';
$usuario = 'root';
$password = '123';
$banco = 'mubank';

$conexao = mysqli_connect($servidor, $usuario, $password, $banco);
?>