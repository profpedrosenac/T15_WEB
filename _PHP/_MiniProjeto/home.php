<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 menuHome mt-3">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 bannerHome mt-3">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            include_once("conexao.php");

            try {
    
                $sql = $conn->query('select * from usuario');
            
                foreach ($sql as $linha) {

                    $id = $linha[0];
                    $nome = $linha[1];
                    $login = $linha[2];
                    $email = $linha[4];
                    $telefone = $linha[5];
                    $status = $linha[7];
                    $img = $linha[8];
                    
                    echo
                    '
                        <div class="col-sm-3 p-3">
                            <div class="card p-3">
                                <img src="imagem/'.$id.'/'.$img.'" alt="" class="w-100">
                                <p>ID: '.$id.'</p>
                                <p>Nome: '.$nome.'</p>
                                <p>Nome: '.$login.'</p>
                                <p>Nome: '.$email.'</p>
                                <p>Nome: '.$telefone.'</p>
                                <p>Nome: '.$status.'</p>
                                <p>Nome: '.$img.'</p>
                                <a href="detalheUsuario.php?id='.$id.'">Detalhes</a>
                            </div>
                        </div>
                    ';
                }
            
            } catch (PDOException $e) {
                echo "Erro: ".$e->getMessage();
            }
            ?>
            

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>