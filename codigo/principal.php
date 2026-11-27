<?php
require_once "verifica_sessao.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <H2>Olà, seja bem vindo <?php echo $_SESSION['nome']; ?>!</H2> <br><br>

    <form action="principal.php" method="get">
        Conta: <br>
        <select name="idconta">
            <?php
            $idusuario = $_SESSION['idusuario'];

            $sql = "SELECT * FROM conta where idusuario = ?";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_bind_param($comando, "i", $idusuario);
            mysqli_stmt_execute($comando);
            $contas = mysqli_stmt_get_result($comando);

            while ($conta = mysqli_fetch_array($contas)) {
                $idconta = $conta['idconta'];
                $nome = $conta['nome'];
                $numero_conta = $conta['numero_conta'];
                echo "<option value='$idconta'>$nome - $numero_conta</option>";
            }
            ?>
        </select>
        <input type="submit" value="Avançar">

    </form>


    <h3>Saldo: <?php

                    if (isset($_GET['idconta'])) {
                        $idconta = $_GET['idconta'];
                        $_SESSION['idconta'] = $idconta;


                        $sql = "SELECT saldo FROM conta WHERE idconta = ?";

                        $comando = mysqli_prepare($conexao, $sql);

                        mysqli_stmt_bind_param($comando, "i", $idconta);

                        mysqli_stmt_execute($comando);

                        $resultado = mysqli_stmt_get_result($comando);

                        $linha = mysqli_fetch_array($resultado);
                        echo "R$" . $linha['saldo'];
                    }

                    else {
                        echo "Selecione uma conta para ver o saldo.";
                    }
                    ?>
    </h3> <br><br>

    <a href="form_conta.php">Criar Conta</a> <br><br>

    <a href="fazer_transfer.php">Fazer Pagamento</a> <br><br>

    <a href="historico_transfe.php">histórico de Transação</a>//abrir na mesma tela target="_self"// talvez uma função <br><br>

    <a href="pesquisar_user.php">pesquisar_user</a>

    <br>
    <a href="limparsession.php">Limpar a sessao</a>
</body>

</html>