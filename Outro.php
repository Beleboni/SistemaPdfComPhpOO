<?php
require_once './model/Cliente.php';
require_once './fpdf/fpdf.php';

//OBTENDO DADOS DO BANCO
$relatorio = new Cliente();
$todos = $relatorio->listar();

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
$pdf->Cell(50, 7, 'Nome', 1);
$pdf->Cell(90, 7, 'Email', 1);
$pdf->Cell(50, 7, 'Idade', 1);
$pdf->Ln();

//POPULANDO A TABELA
$pdf->SetFont('Arial', '', 11);
foreach ($todos as $row) {
    $pdf->Cell(50, 6, $row['nome'], 1);
    $pdf->Cell(90, 6, $row['email'], 1);
    $pdf->Cell(50, 6, $row['idade'], 1);
    $pdf->Ln();
}

//FORÇA O DOWNLOAD PELO BROWSER
$pdf->Output();

