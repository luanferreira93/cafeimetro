<?php

function diaSemana($data){
    $dias_semana = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
    $aData = date($data);
    $numero_semana = date('w',strtotime($aData));
    return $dias_semana[$numero_semana];
}