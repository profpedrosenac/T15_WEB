<div class="container">
    <div class="row">
        <div class="col-sm-12">
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
    </div>
</div>
