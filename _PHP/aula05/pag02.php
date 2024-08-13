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
                <p>Criar um sistema que leia um valor numérico e imprima a contagem de 1 até o valor informado</p>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <p><label for="txtN1">N1</label></p>
                    <p><input type="number" name="txtN1" id="txtN1" class="form-control" min="1" required></p>
                </div>
                <div class="col-sm-12 text-end">
                    <button formaction="pag02.php" class="btn btn-primary" name="btoOK">OK</button>
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
                        $n = $_POST['txtN1'];
                        for($i = 1; $i <= $n; $i++)
                        {
                            echo $i;
                            if($i != $n)
                            {
                                echo ' - ';
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