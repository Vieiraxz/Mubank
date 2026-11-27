<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Usuários</title>
</head>
<body>
        <form action="pesquisar_usuarios.php" method="get">
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
</body>
</html>