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
    <div class="container mt-3">
        <div class="row">
           
            <?php
            include_once("conexao.php");

            try {
    
                $sql = $conn->query('select * from usuario where id_Usuario ='.$_GET['id']);
            
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
                        <div class="col-sm-4">
                            <img src="imagem/'.$id.'/'.$img.'" alt="" class="w-100">
                        </div>
                        <div class="col-sm-8 p-2">
                            <p>ID: '.$id.'</p>
                            <p>Nome: '.$nome.'</p>
                            <p>Login: '.$login.'</p>
                            <p>Email: '.$email.'</p>
                            <p>Telefone: '.$telefone.'</p>
                            <p>Status: '.$status.'</p>
                            <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni temporibus eaque similique amet, totam quidem voluptas ad cumque praesentium optio. Perspiciatis, ab inventore. Error obcaecati rem aliquam vel recusandae!
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni temporibus eaque similique amet, totam quidem voluptas ad cumque praesentium optio. Perspiciatis, ab inventore. Error obcaecati rem aliquam vel recusandae!
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni temporibus eaque similique amet, totam quidem voluptas ad cumque praesentium optio. Perspiciatis, ab inventore. Error obcaecati rem aliquam vel recusandae!
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere magni temporibus eaque similique amet, totam quidem voluptas ad cumque praesentium optio. Perspiciatis, ab inventore. Error obcaecati rem aliquam vel recusandae!
                            </p>
                        </div>
                    ';
                }
            
            } catch (PDOException $e) {
                echo "Erro: ".$e->getMessage();
            }
            ?>
            

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="home.php">Voltar para HOME</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

