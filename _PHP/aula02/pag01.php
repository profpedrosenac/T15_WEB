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
            <div class="col-sm-12">
                <h1>Exemplo Calculadora</h1>
            </div>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-6">
                    <label for="txtN1">N1</label> <br>
                    <input type="number" name="txtN1" id="txtN1" class="form-control" required>
                </div>
                <div class="col-sm-6">
                    <label for="txtN2">N2</label> <br>
                    <input type="number" name="txtN2" id="txtN2" class="form-control" required>
                </div>
                <div class="col-sm-12 mt-3 text-end">
                    <button class="btn btn-primary" formaction="pag01.php" name="btoMais">+</button>
                    <button class="btn btn-danger" formaction="pag01.php" name="btoMenos">-</button>
                    <button class="btn btn-warning" formaction="pag01.php" name="btoMult">x</button>
                    <button class="btn btn-info" formaction="pag01.php" name="btoDividir">:</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-sm-12 text-center">
                <hr>
                <?php 
                if($_POST)
                {
                    $n1 = $_POST['txtN1'];
                    $n2 = $_POST['txtN2'];
                    $total = 0;

                    if(isset($_POST['btoMais']))
                    {
                        $total = $n1+$n2;
                        echo $total;
                    }
                    if(isset($_POST['btoMenos']))
                    {
                        $total = $n1-$n2;
                        echo $total;
                    }
                    if(isset($_POST['btoMult']))
                    {
                        $total = $n1*$n2;
                        echo $total;
                    }
                    if(isset($_POST['btoDividir']))
                    {
                        $total = $n1/$n2;
                        echo $total;
                    }

                }
                else
                {
                    echo "sem dados enviados pelo POST";
                }
                ?>
                 <hr>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>