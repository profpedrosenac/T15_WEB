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
                <h1>Atividade 1</h1>
                <hr>
                <p>Ler 4 notas e imprimir a média e se a pessoa está aprovada(maior ou igual à 7), reprovada(menor do que 5), exame (entre 5 e 7)</p>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <p><label for="txtN1">N1</label></p>
                    <p><input type="number" name="txtN1" id="txtN1" max="10" min="0" class="form-control" required></p>
                </div>
                <div class="col-sm-3">
                    <p><label for="txtN2">N2</label></p>
                    <p><input type="number" name="txtN2" id="txtN2" max="10" min="0" class="form-control" required></p>
                </div>
                <div class="col-sm-3">
                    <p><label for="txtN3">N3</label></p>
                    <p><input type="number" name="txtN3" id="txtN3" max="10" min="0" class="form-control" required></p>
                </div>
                <div class="col-sm-3">
                    <p><label for="txtN4">N4</label></p>
                    <p><input type="number" name="txtN4" id="txtN4" max="10" min="0" class="form-control" required></p>
                </div>
                <div class="col-sm-12 text-end">
                    <button formaction="pag01.php" class="btn btn-primary">OK</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if($_POST)
                {
                    $n1=$_POST['txtN1'];
                    $n2=$_POST['txtN2'];
                    $n3=$_POST['txtN3'];
                    $n4=$_POST['txtN4'];
                    $media = ($n1+$n2+$n3+$n4)/4;

                    if($media >= 7)
                    {
                        echo "Pessoa APROVADA com média ". $media;
                    }
                    elseif($media < 5)
                    {
                        echo "Pessoa REPROVADA com média ". $media;
                    }
                    else
                    {
                        echo "Pessoa EXAME com média ". $media;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>