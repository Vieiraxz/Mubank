<?php
require_once "verifica_sessao.php";
require_once "../conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Transações</title>
</head>
<body>
    <h2>Histórico de Transações</h2>
    <p>Lista de transações realizadas.</p>

    <?php
    // Lógica para buscar e exibir o histórico de transações
    $idconta = $_SESSION['idconta'];
    $sql = "SELECT * FROM transacao WHERE idconta_origem = ? ORDER BY data_transacao DESC";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, "i", $idconta);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border='1'>";
        echo "<tr><td>Data</td><td>Tipo</td><td>Valor</td><td>Descrição</td></tr>";
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $linha['data_transacao'] . "</td>";
            echo "<td>" . $linha['tipo'] . "</td>";
            echo "<td>" . $linha['valor'] . "</td>";
            echo "<td>" . $linha['descricao'] . "</td>";
            echo "<td> <a href='editar.php?id=" . $linha['idtransacao'] . "'>Editar</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhuma transação encontrada.</p>";
    }

    ?>
</body>
</html>