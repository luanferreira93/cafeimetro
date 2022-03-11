<?php
date_default_timezone_set('Brazil/East');
include 'conecta.php';
include 'consumo_banco.php';
$valor_total = 0;
$ml_total = 0;
$cafe_total = 0;
$data_hoje = date('d/m/Y H:i:s');

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
    <div class="container principal">
        <form name="form_pdf" method="POST" action="" id="form_pdf">
            <input type="hidden" name="html" id="html" value="">
            <button class="btn btn-primary d-flex" id="btn_gerapdf" onClick="gerapdf()">Gerar PDF</button>
        </form>
        <div class="principal" id="html_principal">
            <table class="table">
                <h3>Relatório de consumo <?=$data_hoje?></h3>
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

    <script>
        function gerapdf(){
            const form = document.getElementById('form_pdf')
            document.getElementById('html').value =  document.getElementById('html_principal').innerHTML
           form.action = 'gerador_pdf.php';
           form.submit();
        }
    </script>

    <body />
    <html />