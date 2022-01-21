<?php
function listacafe($conexao)
{
    $cafes = [];

    $query = 'SELECT * FROM cafe';
    $resultado = mysqli_query($conexao, $query);
    while($cafe = mysqli_fetch_array($resultado)){
        array_push($cafes,$cafe);
    }
    return $cafes;
}
