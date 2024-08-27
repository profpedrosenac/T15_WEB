<?php
include_once("conexao.php");

$codigo="";
$nome="";
$login="";
$senha="";
$email="";
$telefone="";
$obs="";
$status="";
$mensagem="";

if ($_POST) {
    if (isset($_POST['btoCadastrar'])) {
        try {
            $sql = $conn->prepare('
                insert into usuario 
                    (nome_Usuario,login_Usuario,senha_Usuario,email_Usuario,telefone_Usuario,obs_Usuario,status_Usuario)
                values
                    (:nome_Usuario,:login_Usuario,:senha_Usuario,:email_Usuario,:telefone_Usuario,:obs_Usuario,:status_Usuario)
                ');
            $sql->execute(array(
                ':nome_Usuario'=>$_POST['txtNome'],
                ':login_Usuario'=>$_POST['txtLogin'],
                ':senha_Usuario'=>$_POST['txtSenha'],
                ':email_Usuario'=>$_POST['txtEmail'],
                ':telefone_Usuario'=>$_POST['txtTelefone'],
                ':obs_Usuario'=>$_POST['txtObs'],
                ':status_Usuario'=>$_POST['txtStatus']
            ));

            if ($sql->rowCount() == 1) {
                $mensagem='<p>Dados cadastrados com sucesso</p>';
                $mensagem=$mensagem.'<p>ID Gerado: '.$conn->lastInsertId().'</p>';
            }
        } catch (PDOException $e) {
            $mensagem='Erro: '.$e->getMessage();
        }
    }   
    elseif (isset($_POST['btoPesquisar']))
    {
        try {
    
            $sql = $conn->query('select * from usuario where id_usuario='.$_POST['txtID']);
            
            if ($sql->rowCount()==1) {
                foreach ($sql as $linha) {
                    // echo "<p>Código: ".$linha[0]."</p>";
                    // echo "<p>Nome: ".$linha[1]."</p>";
                    // echo "<p>Usuário: ".$linha[2]."</p>";
                    // echo "<p>Senha: ".$linha[3]."</p>";
                    // echo "<p>Email: ".$linha[4]."</p>";
                    // echo "<p>Telefone: ".$linha[5]."</p>";
                    // echo "<p>Observação: ".$linha[6]."</p>";
                    // echo "<p>Status: ".$linha[7]."</p>";
                    $codigo=$linha[0];
                    $nome=$linha[1];
                    $login=$linha[2];
                    $senha=$linha[3];
                    $email=$linha[4];
                    $telefone=$linha[5];
                    $obs=$linha[6];
                    $status=$linha[7];
                }
            }else{
                $mensagem="<p>Usuário inválido</p>";
            }
        
        } catch (PDOException $e) {
            $mensagem="Erro: ".$e->getMessage();
        }
    }
    elseif (isset($_POST['btoExcluir'])) {
        try {
            $sql = $conn->prepare('
                    delete from usuario where id_usuario = :id_usuario
                ');
            $sql->execute(array(
                ':id_usuario'=>$_POST['txtID']
            ));

            if ($sql->rowCount() == 1) {
                $mensagem='<p>Dados Excluidos com sucesso</p>';
            }
        } catch (PDOException $e) {
            $mensagem='Erro: '.$e->getMessage();
        }
    }
    elseif (isset($_POST['btoAlterar'])) {
        try {
            $sql = $conn->prepare('
                update usuario set
                    nome_Usuario=:nome_Usuario,
                    login_Usuario=:login_Usuario,
                    senha_Usuario=:senha_Usuario,
                    email_Usuario=:email_Usuario,
                    telefone_Usuario=:telefone_Usuario,
                    obs_Usuario=:obs_Usuario,
                    status_Usuario=:status_Usuario 
                where id_usuario=:id_usuario
                ');
            $sql->execute(array(
                ':id_usuario'=>$_POST['txtID'],
                ':nome_Usuario'=>$_POST['txtNome'],
                ':login_Usuario'=>$_POST['txtLogin'],
                ':senha_Usuario'=>$_POST['txtSenha'],
                ':email_Usuario'=>$_POST['txtEmail'],
                ':telefone_Usuario'=>$_POST['txtTelefone'],
                ':obs_Usuario'=>$_POST['txtObs'],
                ':status_Usuario'=>$_POST['txtStatus']
            ));

            if ($sql->rowCount() == 1) {
                $mensagem='<p>Dados Alterados com sucesso</p>';
            }
        } catch (PDOException $e) {
            echo'Erro: '.$e->getMessage();
        }
    }
}
?>