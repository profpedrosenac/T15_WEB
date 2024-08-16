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
                <h1>Atividade 02</h1>
                <hr>
                <p>Ao apertar o botão de OK, imprima a tabuada do 1 até o 10.</p>
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button formaction="atividade02.php" class="btn btn-primary" name="btoOK">OK</button>
                </div>
            </div>
        </form>
        
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-hover">
                    <?php
                    if($_POST)
                    {
                        if(isset($_POST['btoOK']))
                        {
                            for($i = 1; $i <= 10; $i++)
                            {
                                echo "<tr>";
                                    for($j = 1; $j <= 10; $j++)
                                    {
                                        echo "<td>$i x $j = ".$i * $j."</td>";
                                    }
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
        <hr>
    </div>
</body>
</html>