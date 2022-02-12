<?php

include 'conecta.php';
include 'consumo_banco.php';
include 'funcao_util.php';

$data = (array_key_exists('data',$_POST) && $_POST['data'] != '')? $_POST['data'] : date('Y-m-d');
$hora = (array_key_exists('hora',$_POST) && $_POST['hora'] != '')? $_POST['hora'] : date('Y:i');
$cafe = $_POST['cafe'];
$qtd = (array_key_exists('qtd',$_POST) && $_POST['qtd'] != '')? $_POST['qtd'] : 0;
$preco = (array_key_exists('preco',$_POST) && $_POST['preco'] != '')? $_POST['preco'] : 0;

$dia_semana = diaSemana($data);

$adicionou = adicionaConsumo($conexao,$data,$hora,$cafe,$qtd,$preco,$dia_semana);

if($adicionou){
    header('Location:consumo_lista.php');
    die();
}else{
    echo "Houver um erro na adição de consumo";
}

?>