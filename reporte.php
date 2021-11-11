<?php

echo 'hola4';
require('./fpdf/fpdf.php');
echo 'hola5';
$pdf = new FPDF();
echo 'hola6-1';
$pdf->AddPage();
echo 'hola6';
//$pdf->SetFont('Times','',12);
echo 'hola7';
$pdf->Cell(40,10,'¡Hola, Mundo!');
echo 'hola8';
$pdf->Output();
echo 'pdf9';
?>