<?php
include_once("conexao.php");

$mensagem = "";

if($_POST)
{
    //print_r($_POST);
    $usuarioTela = $_POST['txtLogin'];
    $senhaTela = $_POST['txtSenha'];
    try {
        
        $sql = $conn->query("
            select * from usuario where 
                login_Usuario ='".$usuarioTela."' and 
                senha_Usuario = '".$senhaTela."'
        ");
        if($sql->rowCount()==1)
        {
            session_start();
            foreach ($sql as $linha) {
                $_SESSION['idUsuario'] = $linha[0];
                $_SESSION['nomeUsuario'] = $linha[1];
                $_SESSION['loginUsuario'] = $linha[2];
            }

            header("Location:frmUsuario.php");
        }else{
            $mensagem = "Usuário ou senha inválido";
        }
    } catch (PDOException $e) {
        $mensagem = "Erro: ".$e->getMessage();
    }
}
?>