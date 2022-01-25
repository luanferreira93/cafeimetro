<?php
function listacafe($conexao)
{
    $cafes = [];
    $query = 'SELECT c.id,c.nome AS nome_cafe,c.descricao, t.nome AS nome_tipo FROM cafe c INNER JOIN tipos t ON (c.tipo_id=t.id)';
    $resultado = mysqli_query($conexao, $query);
    while($cafe = mysqli_fetch_array($resultado)){
        array_push($cafes,$cafe);
    }
    return $cafes;
}

function buscaCafeID($conexao,$id){
    $query = "SELECT id, nome, descricao, tipo_id FROM cafe WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraCafe($conexao,$id,$nome,$descricao,$tipo_id){
    $query = "UPDATE cafe SET nome='{$nome}',descricao='{$descricao}',tipo_id={$tipo_id} WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function removeCafe($conexao,$id){
    $query = "DELETE FROM cafe WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function adiciona_cafe($conexao,$nome,$descricao,$tipo_id){
    $query = "INSERT INTO cafe(nome,descricao,tipo_id) VALUES('{$nome}','${descricao}',{$tipo_id})";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}