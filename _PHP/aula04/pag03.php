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
                Criar um sistema que leia produto, qtde, valor unitário e tipo de pagamento. Imprimir valor total e:
                </p>
                <ul>
                    <li>5% desconto no PIX</li>
                    <li>10% Juros no Crédito</li>
                    <li>15% Juros no boleto</li>
                    <li>Sem desconto ou juros no dinheiro.</li>
                </ul>
                
                
                <hr>
            </div>
        </div>
        <form action="" class="form-control" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <p><label for="txtProduto">Produto</label></p>
                    <p><input type="text" name="txtProduto" id="txtProduto" class="form-control" required></p>
                </div>
                <div class="col-sm-3">
                    <p><label for="txtValor">Valor</label></p>
                    <p><input type="number" name="txtValor" id="txtValor" class="form-control" step="0.01" required></p>
                </div>
                <div class="col-sm-3">
                    <p><label for="txtQtde">Qtde</label></p>
                    <p><input type="number" name="txtQtde" id="txtQtde" min="0" class="form-control" required></p>
                </div>
                <div class="col-sm-3">
                    <p><label for="txtTipo">Tipo</label></p>
                    <p>
                        <select name="txtTipo" id="txtTipo" class="form-control" required>
                            <option value="">-- Selecione o tipo --</option>
                            <option value="1">5% desconto no PIX</option>
                            <option value="2">10% Juros no Crédito</option>
                            <option value="3">15% Juros no boleto</option>
                            <option value="4">Dinheiro</option>
                        </select>
                    </p>
                </div>
                
                
                <div class="col-sm-12 text-end">
                    <button formaction="pag03.php" class="btn btn-primary">OK</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if($_POST)
                {
                    $produto = $_POST['txtProduto'];
                    $valor = $_POST['txtValor'];
                    $qtde = $_POST['txtQtde'];
                    $tipo = $_POST['txtTipo'];
                    $total = $valor * $qtde;
                    $totalF = 0;

                    if($tipo == "1")
                    {
                        $totalF = $total * 0.95;
                    }
                    elseif($tipo == "2")
                    {
                        $totalF = $total * 1.1;
                    }
                    elseif($tipo == "3")
                    {
                        $totalF = $total * 1.15;
                    }
                    else
                    {
                        $totalF = $total;
                    }

                    echo "<p>Produto: $produto</p>";
                    echo "<p>Valor Unitário: $valor</p>";
                    echo "<p>Qtde: $qtde</p>";
                    echo "<p>Total: $total</p>";
                    echo "<p>Total a pagar: $totalF</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
