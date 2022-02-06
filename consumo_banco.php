<?php
function listaConsumo($conexao){
    $consumos = [];
    $query = "SELECT co.id, DATE_FORMAT(co.data,'%d/%m/%Y') as data_consumo, DATE_FORMAT(co.hora,'%H:%i') AS hora, co.qtd, co.dia_semana, co.preco, ca.nome AS cafe_nome FROM consumo co INNER JOIN cafe ca ON (co.cafe_id=ca.id) WHERE 1=1";
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    while($consumo = $resultado->fetch_assoc()){
        array_push($consumos,$consumo);
    }
    return $consumos;
}

function deletaConsumo(){
    
}