<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cssindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MKn5NWVBEuQXJE7TSKSgPUmMiSCmVTfCsR+VSSeQpHnoyJQZZFn/kBn+Ht5jZDPQ" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-+PW0IDVGGwmpaBQvcXY+W0BcpHpITFB3dSfSoGvDdHtLbrLpSbpGcvtQRM/BJpz+" crossorigin="anonymous"></script>
</head>

<body>
    <form action="salvar_user.php" method="post" enctype="multipart/form-data">
        <h2>Cadastro de Usuario</h2>
        <div class="login">
            <br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Nome de Usuario</label>
                <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        </div>
        <div class="login">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        </div>
        <div class="login">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Senha</label>
                <input name="senha_hash" type="text   " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
        </div>
        <div class="login">

            <div class="form-field">
                <label for="formFile" class="form-label">Foto:</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>
        </div>
        </div>
        <div class="login">

            <div class="submit">
                <button type="submit" class="btn-solid theme-primary">Enviar</button>
            </div>
            <a href="fazer_login.php">Fazer o Login</a>
        </div>
    </form>
</body>

</html>