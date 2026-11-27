<?php
require_once "verifica_sessao.php";

if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Pesquise o usuário que deseja transferir o dinheiro, você pode pesquisar pelo nome ou pelo número da conta.
    <form action="fazer_transfer.php" method="get">
        Nome ou conta: <br>
        <input type="text" name="valor" value="<?php echo $valor; ?>">
        <br><br>
        <input type="submit" value="Pesquisar">

        <br><br>
    </form>

    <?php
    if (isset($_GET['valor'])) {
        if ($_GET['valor'] != "") {
            $valor = $_GET['valor'];
            $valor = "%" . $valor . "%";

            require_once "conexao.php";

            // SELECT * FROM usuario WHERE nome LIKE "%z%" OR apelido LIKE "%z%";
            $sql = "SELECT * FROM conta WHERE nome LIKE ? OR numero_conta LIKE ?";
            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "ss", $valor, $valor);

            mysqli_stmt_execute($comando);
            $conta = mysqli_stmt_get_result($comando);

            while ($usuario = mysqli_fetch_array($conta)) {
                if ($usuario['idconta'] != $_SESSION['idconta']) {
    ?>
        <form action="salvar_tranfer.php" method="post">
                <div>
                    <p>Nome: <?php echo $usuario['nome']; ?></p>
                    <p>Número da Conta: <?php echo $usuario['numero_conta']; ?></p>
                    <input type="radio" name="idconta" value="<?php echo $usuario['idconta']; ?>"> Selecionar
                </div>
                <?php
            }}
        } else {
                ?>
                a
                <p>Digite algo para pesquisar</p>
            <?php
        }
    }
    ?>
    <br>
    Valor que deseja transferir: <br>
        <input type="text" name="valor" value="00.00">
        <br><br>
    Tipo de transferência: <br>
    <input type="text" name="tipo"> <br>

    Descrição: <br>
    <input type="text" name="descricao"> <br><br>

    
        <input type="submit" value="Transferir">
</form>
</body>
</html>