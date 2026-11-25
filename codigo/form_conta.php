<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrar_conta.php" method="post">
    <h2>Cadastrar Nova Conta</h2>
    
    Nome da Conta: <br>
    <input type="text" name="nome"> <br><br>

    Número da Conta: <br>
    <input type="text" name="numero_conta"> <br><br>

    Agência: <br>
    <input type="text" name="agencia"> <br><br>

    Saldo: <br>
    <input type="decimal" name="saldo"> <br><br>

    <input type="submit" value="Criar Conta">
</form>

<a href="fazer_login.php">Fazer o Login</a>
</body>
</html>