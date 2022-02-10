<?php
include 'conecta.php';
include 'consumo_banco.php';
include 'funcao_util.php';

$data = $_POST['data'];
$hora = $_POST['hora'];
$cafe = $_POST['cafe'];
$qtd = $_POST['qtd'];
$preco = $_POST['preco'];
$dia_semana = diaSemana($data);
$adicionou = adicionaConsumo($conexao,$data,$hora,$cafe,$qtd,$preco,$dia_semana);
echo $dia_semana;

if($adicionou){
    header('Location:consumo_lista.php');
    die();
}else{
    echo "Houver um erro na adição de consumo";
}

?>