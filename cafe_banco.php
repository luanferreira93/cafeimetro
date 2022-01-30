<?php
function listacafe($conexao)
{
    $cafes = [];
    $query = 'SELECT c.id,c.nome AS nome_cafe,c.descricao, t.nome AS nome_tipo FROM cafe c INNER JOIN tipos t ON (c.tipo_id=t.id)';
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    while($cafe = $resultado->fetch_assoc()){
        array_push($cafes,$cafe);
    }
    return $cafes;
}

function buscaCafeID($conexao,$id){
    $query = "SELECT id, nome, descricao, tipo_id FROM cafe WHERE id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i',$id);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    return $resultado->fetch_assoc();
}

function alteraCafe($conexao,$id,$nome,$descricao,$tipo_id){
    $query = "UPDATE cafe SET nome=?, descricao=?, tipo_id=? WHERE id =?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('ssii',$nome,$descricao,$tipo_id,$id);
    return $instrucao->execute();
}

function removeCafe($conexao,$id){
    $query = "DELETE FROM cafe WHERE id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i',$id);
    return $instrucao->execute();
}

function adiciona_cafe($conexao,$nome,$descricao,$tipo_id){
    $query = "INSERT INTO cafe(nome,descricao,tipo_id) VALUES(?,?,?)";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('ssi',$nome,$descricao,$tipo_id);
    return $instrucao->execute();
}