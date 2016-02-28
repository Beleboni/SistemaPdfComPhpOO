<?php 


require_once("./fpdf/fpdf.php");
$pdf= new FPDF("L","pt","A4");
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatório",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);
 
//cabeçalho da tabela 
$pdf->SetFont('arial','B',14);
$pdf->Cell(90,20,'Coluna 1',1,0,"P");
$pdf->Cell(90,20,'Coluna 2',1,0,"P");
$pdf->Cell(90,20,'Coluna 3',1,0,"P");
$pdf->Cell(90,20,'Coluna 4',1,0,"P");
$pdf->Cell(90,20,'Coluna 1',1,0,"P");
$pdf->Cell(90,20,'Coluna 2',1,0,"P");
$pdf->Cell(90,20,'Coluna 3',1,0,"P");
$pdf->Cell(90,20,'Coluna 4',1,0,"P");

 
//linhas da tabela
//$pdf->SetFont('arial','',12);
//for($i= 1; $i <10;$i++){
//    $pdf->Cell(50,20,"Pinha ".$i,1,0,"P");
//    $pdf->Cell(50,20,rand(),1,0,"P");
//    $pdf->Cell(50,20,rand(),1,0,"P");
//    $pdf->Cell(50,20,rand(),1,1,"P");
//}
$pdf->Output();