<?php

require_once "verifica_sessao.php";

if (isset($_GET['email'])) {
    $email = $_GET['email'];
} else {
    $email = "";
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
     <form action="verificar_login.php" method="post">
        E-mail: <br>
    <input type="text" name="email" value="<?php echo $email ?>"> <br><br>
        Senha: <br>
    <input type="text" name="senha"> <br><br>

        <input type="submit" value="Logar">
    </form>
     
</body>
</html>