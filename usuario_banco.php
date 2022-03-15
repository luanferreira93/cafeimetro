<?php

function validaUsuario($conexao,$email,$senha){

    $passo1 = false;
    $passo2 = false;

    $query = "SELECT id, email, senha FROM usuarios WHERE email = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('s',$email);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    $passo1 = $resultado->fetch_assoc();

    if($passo1){
        $passo2 = password_verify($senha,$passo1['senha']);
    }

    return $passo1 && $passo2;
}


function cadastraUsuario($conexao,$email,$senha){
    $query = "INSERT INTO usuarios(email,senha) VALUES(?,?)";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('ss',$email,$senha);
    return $instrucao->execute();
}