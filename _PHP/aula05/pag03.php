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
                <h1>Atividade 3</h1>
                <hr>
                <p>
                Criar um sistema que leia 2 valores, imprima a contagem do valor A até o valor B, caso o valor B seja menor do que o valor A imprimir de forma decrescente, caso o valor A for menor do que o valor B imprimir de forma crescente
                </p>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <p><label for="txtN1">N1</label></p>
                    <p><input type="number" name="txtN1" id="txtN1" class="form-control" required></p>
                </div>
                <div class="col-sm-6">
                    <p><label for="txtN2">N1</label></p>
                    <p><input type="number" name="txtN2" id="txtN2" class="form-control" required></p>
                </div>
                <div class="col-sm-12 text-end">
                    <button formaction="pag03.php" class="btn btn-primary" name="btoOK">OK</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if($_POST)
                {
                    if(isset($_POST['btoOK']))
                    {
                        $n1 = $_POST['txtN1'];
                        $n2 = $_POST['txtN2'];
                        
                        if($n1 < $n2)
                        {
                            for($i = $n1; $i <= $n2; $i++)
                            {
                                echo $i;
                                if($i != $n2)
                                {
                                    echo ' - ';
                                }
                            }
                        }
                        else
                        {
                            for($i = $n1; $i >= $n2; $i--)
                            {
                                echo $i;
                                if($i != $n2)
                                {
                                    echo ' - ';
                                }
                            }
                        }
                        
                        
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>