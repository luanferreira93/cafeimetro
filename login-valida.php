<?php

include './conecta.php';
include 'usuario_banco.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = validaUsuario($conexao,$email,$senha);

$destino = 'Location:login-erro.php';

if($usuario === true){
    $destino = 'Location:cafe_lista.php';
}

header($destino);
die();