<?php
include 'conecta.php';
include 'consumo_banco.php';
$valor_total = 0;
$ml_total = 0;
$cafe_total = 0;
$data_hoje = date('d/m/Y H:m:s');

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/cafeimetro.css">
    <title>Relatório</title>
</head>

<body>
    <div class="container">
        <div class="principal">
            <h3>Relatório de consumo <?=$data_hoje?></h3>
            <table class="table">
                <tbody>
                    <tr>
                        <?php
                        $consumos = listaConsumo($conexao);
                        arsort($consumos);
                        foreach ($consumos as $consumo) {
                            $valor_total += $consumo['preco'];
                            $ml_total += $consumo['qtd'];
                            $cafe_total++;
                        ?>
                    <tr>
                        <td><?= $consumo['data_consumo'] ?></td>
                        <td><?= $consumo['hora'] ?></td>
                        <td><?= $consumo['dia_semana'] ?></td>
                        <td><?= $consumo['cafe_nome'] ?></td>
                        <td><?= $consumo['qtd'] ?>ml</td>
                        <td>R$<?= number_format($consumo['preco'], 2, ',', '.'); ?></td>
                    </tr>
                <?php
                        }
                ?>
                </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Cafés:</td><td><?=$cafe_total?></td>
                    <td>Qtd ml:</td><td><?=$ml_total?></td>
                    <td>R$:</td><td><?= number_format($valor_total, 2, ',', '.')?></td>
                </tr>
            </table>
        </div>
    </div>

    <body />
    <html />