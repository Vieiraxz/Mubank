<?php
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
    <link rel="stylesheet" href="/css/cssindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MKn5NWVBEuQXJE7TSKSgPUmMiSCmVTfCsR+VSSeQpHnoyJQZZFn/kBn+Ht5jZDPQ" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-+PW0IDVGGwmpaBQvcXY+W0BcpHpITFB3dSfSoGvDdHtLbrLpSbpGcvtQRM/BJpz+" crossorigin="anonymous"></script>
</head>

<body>
    <div class="fora">
        <h1>Faça seu Login:</h1>
    </div>
    <div class="pagina">
        <form action="verificar_login.php" method="post">
            <div class="login">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha
                    </label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
                <div class="submit">
                    <button type="submit" class="btn-solid theme-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>



    <!-- <div class="pagina">
        <div class="login">
            <form action="verificar_login.php" method="post">
                E-mail: <br>
                <input type="text" name="email" value="<?php echo $email ?>"> <br><br>
                Senha: <br>
                <input type="text" name="senha"> <br><br>
                <div class="submit">
                    <input type="submit" value="Logar">
                </div>
            </form>
        </div>
    </div> -->
</body>

</html>