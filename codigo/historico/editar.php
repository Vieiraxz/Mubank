    <?php
    require_once "../conexao.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h2>Editar a Descrição da Transação</h2>
        <?php
        if (isset($_GET['id'])) {
            $idtransacao = $_GET['id'];
            echo "<p>idtransacao: $idtransacao</p>";
            $sql = "SELECT * FROM transacao WHERE idtransacao = ?";
            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_bind_param($comando, "i", $idtransacao);
            mysqli_stmt_execute($comando);
            $resultado = mysqli_stmt_get_result($comando);

            if ($linha = mysqli_fetch_array($resultado)) {
                $descricao = $linha['descricao'];
        ?>
                <form action="salvar_editar.php?id=<?php echo $idtransacao; ?>" method="post">
                    <input type="text" name="descricao" value="<?php echo $descricao; ?>"><br>
                    <input type="submit" value="Salvar">
                </form>
        <?php
            }
        }
        ?>
    </body>

    </html>