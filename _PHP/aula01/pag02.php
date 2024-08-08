<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Somando Valores</h1>
    <hr>
    <form action="" method="post">
        <p>
            <label for="txtN1">N1</label>
            <input type="number" name="txtN1" id="txtN1" required>
        </p>
        <p>
            <label for="txtN2">N2</label>
            <input type="number" name="txtN2" id="txtN2" required>
        </p>
        <button formaction="pag02.php">Somar</button>
    </form>

    <hr>

    <?php
        if($_POST)
        {
            $n1 = $_POST['txtN1'];
            $n2 = $_POST['txtN2'];
            $total = $n1 + $n2;

            echo "<div>Total = " .$total."</div>";
        }
    ?>
</body>
</html>