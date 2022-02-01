<?php
function listaTipo($conexao)
{
    $tipos = [];

    $query = 'SELECT * FROM tipos';
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    while($tipo = $resultado->fetch_assoc()){
        array_push($tipos,$tipo);
    }
    return $tipos;
}

function buscaTipo($conexao,$id){
    $query = "SELECT * FROM tipos WHERE id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i',$id);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    return $resultado->fetch_assoc();
}

function alteraTipo($conexao,$nome,$id){
    $query = "UPDATE tipos SET nome = ? WHERE id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('si',$nome,$id);
    return $instrucao->execute();
}

function vinculoTipoCafe($conexao,$id){
    $query = "SELECT COUNT(id) AS qtd FROM cafe WHERE tipo_id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i',$id);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    $count = $resultado->fetch_assoc();
    return $count['qtd'];
}