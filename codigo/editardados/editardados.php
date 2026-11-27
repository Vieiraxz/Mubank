<?php
require_once 'verifica_sessao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados</title>
</head>

<body>
    <h1>Editar Dados</h1>
    <form action="atualizardados.php" method="POST">

        <?php
        require_once '../conexao.php';
        $idusuario = $_SESSION['idusuario'];

        $sql = "SELECT * FROM usuario WHERE idusuario = ?";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, "i", $idusuario);
        mysqli_stmt_execute($comando);
        $resultado = mysqli_stmt_get_result($comando);


        while ($linha = mysqli_fetch_array($resultado)) {
            $nome = $linha['nome'];
            $email = $linha['email'];
            $foto = $linha['foto'];
        ?>


            Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
            Email: <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
            <!-- Foto: <input type="file" name="foto"> <br><br> -->
            <input type="submit" value="Atualizar">
        <?php
        }
        ?>

    </form>
</body>

</html>