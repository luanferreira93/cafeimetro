<?php
function listaTipo($conexao)
{
    $tipos = [];

    $query = 'SELECT * FROM tipos';
    $resultado = mysqli_query($conexao, $query);
    while($tipo = mysqli_fetch_array($resultado)){
        array_push($tipos,$tipo);
    }
    return $tipos;
}