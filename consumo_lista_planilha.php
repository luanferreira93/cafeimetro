<?php
include 'conecta.php';
include 'consumo_banco.php';

$arquivo = 'meu_consumo.xlsx';

$html = '<meta charset="UTF-8">';
$html .= '<table border="1">
        <tr>
        <td>Data Consumo</td>
        <td>Hora Consumo</td>
        <td>Dia Semana</td>
        <td>Café</td>
        <td>Qtd ml</td>
        <td>Preço</td>
        </tr>';

        $consumos = listaConsumo($conexao);
        arsort($consumos);
        foreach ($consumos as $consumo) {
            $html .= "<tr>
                        <td>{$consumo['data_consumo']}</td>
                        <td>{$consumo['hora']}</td>
                        <td>{$consumo['dia_semana']}</td>
                        <td>{$consumo['cafe_nome']}</td>
                        <td>{$consumo['qtd']}</td>
                        <td>{$consumo['preco']}</td>
                        </tr>";
        }
        $html .='</table>';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename=' . $arquivo );
header('Content-Description: Dados gerados via PHP');
?>
