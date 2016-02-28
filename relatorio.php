<?php
include_once './model/Cliente.php';

define('FPDF_FONTPATH', 'font/');
require ('./fpdf/fpdf.php');

$pdf = new FPDF('L', 'cm', 'A4');
$pdf->Open(); //ABRE O FPDF
$pdf->AddPage(); //CRIA UMA PAGINA
$pdf->Image('img/logo.png', -20); //IMAGEM
$pdf->SetFont('Arial', '', 12); //SELECIONA A FONT

$relatorio = new Cliente();
$todos = $relatorio->listar();

//POPULANDO O PDF
foreach ($todos as $td):
    $pdf->Cell(5,1, $td['nome'], 1, 0, 'L'); // BORDAS, QUEBRA LINHA, LATERAL ESQUERDO, CENTRO E DIREITA
    $pdf->Cell(5,1, $td['email'], 1, 0, 'L');
    $pdf->Cell(5,1, $td['idade'], 1, 1, 'L');
endforeach;

$pdf->Output();



