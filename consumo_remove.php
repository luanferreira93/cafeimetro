<?php
include 'conecta.php';
include 'consumo_banco.php';

$id = $_POST['id'];
$removeu =  deletaConsumo($conexao,$id);

if($removeu){
    header('location:consumo_lista.php');
    die();
}else{
    echo 'Houver um erro';
}