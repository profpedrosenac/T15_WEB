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
    <div class="container">
        <div class="row">
            <div class="col-sm 12">
                <hr>
                <h1>Atividade 2</h1>
                <hr>
                <p>Criar um sistema de usuário e senha. Imprimir seja bem vindo ou usuário ou senha inválida
                </p>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <p><label for="txtUsuario">Usuario</label></p>
                    <p><input type="text" name="txtUsuario" id="txtUsuario" class="form-control" required></p>
                </div>
                <div class="col-sm-6">
                    <p><label for="txtSenha">Senha</label></p>
                    <p><input type="password" name="txtSenha" id="txtSenha" class="form-control" required></p>
                </div>
                
                <div class="col-sm-12 text-end">
                    <button formaction="pag02.php" class="btn btn-primary">OK</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if($_POST)
                {
                    $usuario=$_POST['txtUsuario'];
                    $senha=$_POST['txtSenha'];

                    if($usuario == "pedro" && $senha == "legal")
                    {
                        echo "Seja bem vindo";
                    }else{
                        echo "Usuário ou senha inválido";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>