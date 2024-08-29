<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php include_once("_usuario_login.php") ?>
    <div class="container mt-5">
        <form action="" class="form-control larguraLogin" method="post">
            <div class="row">
                <div class="col-sm-12 p-5">
                    
                    <div class="imagemLogin mb-5"></div>
                    
                    <p>
                        <input type="text" name="txtLogin" id="txtLogin" placeholder="Informe o Usuário" class="form-control">
                    </p>
                    <p>
                        <input type="password" name="txtSenha" id="txtSenha" placeholder="Informe a Senha" class="form-control">
                    </p>
                    <p>
                        <button id="btoOK" name="btoOK" class="btn btn-primary">Entrar</button>
                    </p>
                    <p>
                        <?= $mensagem ?>
                    </p>
                </div>
            </div>
        </form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>