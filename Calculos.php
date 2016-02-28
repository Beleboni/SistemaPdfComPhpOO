<?php
require_once './model/Cliente.php';
require_once './fpdf/fpdf.php';

////OBTENDO DADOS DO BANCO
//$relatorio = new Cliente();
//$todos = $relatorio->listar();

//CRIA A PÁGINA EM PDF
$pdf = new FPDF();
$pdf->AddPage('L', 'A4');

//CABEÇALHO DO RELATÓRIO
//Coloque aqui uma imagem como logo no seu relatório
//Se não precisar de imagem, apague essa linha
$pdf->Image('img/logo.png', 10);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(80);
$pdf->Cell(30, 10, 'Todos os clientes cadastrados', 0, 0, 'C');//'Pessoas' centralizado no meio da página
$pdf->Ln(20);

//CABEÇALHO DA TABELA
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(50, 7, 'Valor 1', 1);
$pdf->Cell(90, 7, 'Valor 2', 1);
$pdf->Cell(50, 7, 'Total', 1);
$pdf->Ln();

//POPULANDO A TABELA
$pdf->SetFont('Arial', '', 11);
$valor1 = 10;
$valor2 = 20;
$soma = $valor1 + $valor2;
$divide = $valor1 / $valor2;
$multiplical = $valor1 * $valor2;
$diminuel = $valor1 - $valor2;

$pdf->Cell(50, 6, $valor1, 1);
$pdf->Cell(90, 6, $valor2, 1);
$pdf->Cell(50, 6, $soma, 1);
$pdf->Ln(); //QUEBRA LINHA

$pdf->Cell(50, 6, $valor1, 1);
$pdf->Cell(90, 6, $valor2, 1);
$pdf->Cell(50, 6, $diminuel, 1);
$pdf->Ln(); //QUEBRA LINHA

$pdf->Cell(50, 6, $valor1, 1);
$pdf->Cell(90, 6, $valor2, 1);
$pdf->Cell(50, 6, $multiplical, 1);
$pdf->Ln(); //QUEBRA LINHA

$pdf->Cell(50, 6, $valor1, 1);
$pdf->Cell(90, 6, $valor2, 1);
$pdf->Cell(50, 6, $divide, 1);
//foreach ($todos as $row) {
//    $pdf->Cell(50, 6, $row['nome'], 1);
//    $pdf->Cell(90, 6, $row['email'], 1);
//    $pdf->Cell(50, 6, $row['idade'], 1);
//    $pdf->Ln();
//}

//FORÇA O DOWNLOAD PELO BROWSER
$pdf->Output();

