<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col-sm 12">
                <hr>
                <h1>Atividade Bet da shopee (while)</h1>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">                
                <div class="col-sm-12 text-end">
                    <p><button formaction="pag01.php" class="btn btn-primary" name="btoOK">OK</button></p>
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="col-sm-12">
            <?php
            if($_POST)
            {   
                $cont = 0;
                do
                {
                    $d1 = random_int(1,6);
                    $d2 = random_int(1,6);

                    echo "D1 = $d1 | D2 = $d2 <br>";
                    $cont ++;

                }while($d1 != 6 || $d2 != 6);

                echo "<p>Total de jogadas $cont</p>";               
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>