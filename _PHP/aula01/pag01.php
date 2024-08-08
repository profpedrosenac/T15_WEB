<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 01</h1>
    <hr>
    <?php
        $nome = "Pedro Legal";

        echo '<p>Professor '.$nome.'.</p>';

        date_default_timezone_set('America/Sao_Paulo');

        $data = date("d/m/Y");
        $hora = date("H:i:s");

        echo '<p>'.$data.' - '.$hora.'</p>';
    ?>
    <hr>
    <form action="" method="post">
        <p>
            <label for="txtNome">Nome</label> <br>
            <input type="text" name="txtNome" id="txtNome">
        </p>
        <p>
            <label for="txtSobrenome">Sobrenome</label> <br>
            <input type="text" name="txtSobrenome" id="txtSobrenome">
        </p>
        <p>
            <button formaction="pag01.php">OK</button>
        </p>
    </form>
    <hr>
    <?php
        if($_POST)
        {
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
    
            echo '<hr>';
    
            echo "<p>Seu nome completo é ". $_POST['txtNome']. " " .$_POST['txtSobrenome'].'</p>';
        }        
    ?>
</body>
</html>