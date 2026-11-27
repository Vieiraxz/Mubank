


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_user.php" method="post">
    <h2>Cadastro de Usuario</h2>
    
    Nome de Usuario: <br>
    <input type="text" name="nome"> <br><br>

    Email: <br>
    <input type="text" name="email"> <br><br>

    Senha: <br>
    <input type="text" name="senha_hash"> <br><br>

    Foto: <br>
    <input type="file" name="foto"> <br><br>


    <input type="submit" value="Criar Conta">
</form>

<a href="fazer_login.php">Fazer o Login</a>
</body>
</html>