<?php
include_once("conexao.php");

try {
    
    $sql = $conn->query('select * from usuario');

    foreach ($sql as $linha) {
        echo '<pre>';
        print_r($linha);
        echo '</pre>';

        echo "nome: ". $linha[1];
        echo " - login: ". $linha['login_Usuario'];
    }

} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
}


?>