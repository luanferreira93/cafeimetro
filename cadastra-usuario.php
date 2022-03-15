<?php

include './conecta.php';
include 'usuario_banco.php';

$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_ARGON2I);

$sucesso = cadastraUsuario($conexao,$email,$senha);

if($sucesso){
?>
<h1 style="color:green; text-align:center; font-family: Arial, Helvetica, sans-serif; margin-top: 35px;">Cadastro feito com sucesso</h1>   
<?php
}else{
    header("Location:login-erro.php");
}
die();
?>