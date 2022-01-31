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

