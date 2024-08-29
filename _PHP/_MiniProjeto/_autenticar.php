<div class="container p-2">
    <div class="row">
        <div class="col-sm-11">
        <?php

            session_start();

            if(isset($_SESSION['idUsuario']) && 
            isset($_SESSION['nomeUsuario']) && 
            isset($_SESSION['loginUsuario'])) 
            {
                echo "Id: ".$_SESSION['idUsuario'].
                     " | Nome: ".$_SESSION['nomeUsuario'].
                     " | Login: ".$_SESSION['loginUsuario'];
            }
            else
            {
                header("Location: login.php");
            }

        ?>
        </div>
        <div class="col-sm-1 text-end">
            <a href="_logoff.php" class="btn btn-danger">Sair</a>
        </div>
    </div>
</div>
