<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_conta.php" method="post">
    <h2>Cadastrar Nova Conta</h2>
    
    Nome da Conta: <br>
    <input type="text" name="nome"> <br><br>

    Interesses: <br>
    <input type="checkbox" name="interesse[]" value="corrente">Conta Corrente <br> <br>
    <input type="checkbox" name="interesse[]" value="poupanca">Conta Poupança <br> <br>
    <input type="checkbox" name="interesse[]" value="investimento">Conta Investimento <br> <br>
    <input type="checkbox" name="interesse[]" value="salario">Conta Salário <br> <br>
    <input type="checkbox" name="interesse[]" value="universitaria">Conta Universitária <br> <br>

    Número da Conta: <br>
    <input type="text" name="numero_conta"> <br><br>

    Agência: <br>
    <input type="text" name="agencia"> <br><br>

    Saldo: <br>
    <input type="decimal" name="saldo"> <br><br>

    <input type="submit" value="Criar Conta">
</form>

</body>
</html>