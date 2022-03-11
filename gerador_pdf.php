<?php

include ('pdf.php');

$arquivo = 'relatorio-consumo.php';

$html = '<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">';
$html .= '<link rel="stylesheet" href="./css/cafeimetro.css">';
$html .= $_POST['html'];

$pdf = new PDF();
$pdf->load_html($html);
$pdf->render();
$pdf->stream($arquivo,array('attachment'=>false));