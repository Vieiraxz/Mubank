<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
//relação de id pasar um valor para outro id
        
    <form action="salvar_conta.php" method="post">
    <h2>Cadastrar Nova Conta</h2>
    
    Para //id_destino: <br>
        <select name="para quem">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM conta";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $destino = mysqli_stmt_get_result($comando);

            while ($idconta = mysqli_fetch_array($destino)) {
                $destino = $conta['idconta'];
                $nome = $conta['nome'];

                echo "<option value='$destino'>$nome</option>";
            }
            ?>

    <input type="text" name="nome"> <br><br>

    Modo de pagamneto: <br>
    <input type="" name="numero_conta"> <br><br>

    Valor: <br>
    <input type="decimal" name="agencia"> <br><br>

    Descrição: <br>
    <input type="text" name="saldo"> <br><br>

    <input type="submit" value="Criar Conta">
</form>
