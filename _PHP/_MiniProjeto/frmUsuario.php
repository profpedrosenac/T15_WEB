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
    <?php include_once("CRUD_usuario.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <h1>Gerenciamento de Usuários</h1>
                <hr>
            </div>
            <form action="" class="form-control" method="post">
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <label for="txtID">ID</label><br>
                            <input type="number" class="form-control" id="txtID" name="txtID" value="<?=$codigo ?>">
                        </p>
                    </div>
                    <div class="col-sm-1">
                        <p>
                            <label for="">&nbsp;</label><br>
                            <button formaction="frmUsuario.php" name="btoPesquisar" id="btoPesquisar" class="btn btn-primary">&#128270;</button>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <label for="txtNome">Nome</label><br>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?=$nome ?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <label for="txtLogin">Login</label><br>
                            <input type="text" class="form-control" id="txtLogin" name="txtLogin" value="<?=$login ?>">
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p>
                            <label for="txtSenha">Senha</label><br>
                            <input type="password" class="form-control" id="txtSenha" name="txtSenha" value="<?=$senha ?>">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <label for="txtEmail">Email</label><br>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?=$email ?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <label for="txtTelefone">Telefone</label><br>
                            <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" value="<?=$telefone ?>">
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <label for="txtStatus">Status</label><br>
                            <select name="txtStatus" id="txtStatus" class="form-control">
                                <option value=""> -- Selecione o Status -- </option>
                                <option value="ATIVO" 
                                <?php
                                    if($status == "ATIVO")
                                    {
                                        echo "selected";
                                    }
                                ?>
                                >Ativo</option>
                                <option value="INATIVO" 
                                <?php
                                    if($status == "INATIVO")
                                    {
                                        echo "selected";
                                    }
                                ?>>Inativo</option>
                            </select>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <label for="txtObs">Observação</label><br>
                            <textarea name="txtObs" id="txtObs" class="form-control" rows="4"><?=$obs ?></textarea>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-6">
                        <p><?=$mensagem?></p>
                    </div>
                    <div class="col-sm-6 text-end">
                        <p>
                            <button formaction="frmUsuario.php" name="btoCadastrar" id="btoCadastrar" class="btn btn-primary">Cadastrar</button>
                            <button formaction="frmUsuario.php" name="btoAlterar" id="btoAlterar" class="btn btn-success">Alterar</button>
                            <button formaction="frmUsuario.php" name="btoExcluir" id="btoPesquisar" class="btn btn-danger">Excluir</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>