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
                <h1>Desafio</h1>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-2">
                    <p><label for="txtN1">N1</label></p>
                    <p><input type="number" name="txtN1" id="txtN1" class="form-control" min="1" required value="2"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN2">N2</label></p>
                    <p><input type="number" name="txtN2" id="txtN2" class="form-control" min="1" required value="24"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN3">N3</label></p>
                    <p><input type="number" name="txtN3" id="txtN3" class="form-control" min="1" required value="5"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN4">N4</label></p>
                    <p><input type="number" name="txtN4" id="txtN4" class="form-control" min="1" required value="6"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN5">N5</label></p>
                    <p><input type="number" name="txtN5" id="txtN5" class="form-control" min="1" required value="1"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN6">N6</label></p>
                    <p><input type="number" name="txtN6" id="txtN6" class="form-control" min="1" required value="26"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN7">N7</label></p>
                    <p><input type="number" name="txtN7" id="txtN7" class="form-control" min="1" required value="67"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN8">N8</label></p>
                    <p><input type="number" name="txtN8" id="txtN8" class="form-control" min="1" required value="56"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN9">N9</label></p>
                    <p><input type="number" name="txtN9" id="txtN9" class="form-control" min="1" required value="12"></p>
                </div>
                <div class="col-sm-2">
                    <p><label for="txtN10">N10</label></p>
                    <p><input type="number" name="txtN10" id="txtN10" class="form-control" min="1" required value="36"></p>
                </div>
                <div class="col-sm-4 text-end">
                    <p>.</p>
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

            
            $dados = array(
                        $_POST['txtN1'],
                        $_POST['txtN2'],
                        $_POST['txtN3'],
                        $_POST['txtN4'],
                        $_POST['txtN5'],
                        $_POST['txtN6'],
                        $_POST['txtN7'],
                        $_POST['txtN8'],
                        $_POST['txtN9'],
                        $_POST['txtN10']
            );
            
            for($i = 0; $i <= 8; $i++)
            {
                for($j = $i+1 ; $j <= 9; $j++)
                {
                    //echo "$i - $j |";
                    if($dados[$i] > $dados[$j])
                    {
                        $temp = $dados[$i];
                        $dados[$i] = $dados[$j];
                        $dados[$j] = $temp;
                    }
                }
            }

            // sort($dados);

            // foreach($dados as $valor)
            // {
            //     echo "$valor ";
            // }

            for($l = 0; $l<=9 ; $l++)
            {
                echo $dados[$l];
                echo "<br>";
            }
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>