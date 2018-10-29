<?php
include('cn.php');
//include('../vistas/seguridad.php');
// No almacenar en el cache del navegador esta página. 
/*header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");                     // Expira en fecha pasada 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");        // Siempre página modificada 
header("Cache-Control: no-cache, must-revalidate");                   // HTTP/1.1 
header("Pragma: no-cache");*/ 

/*$id=$_GET['id'];
$author = $_POST['author'];*/
require('diag.php');

$pdf = new PDF_Diag();
$pdf->AddPage();

//ENCABEZADO
$pdf->Cell(10, 10, '', 0);
$pdf->Cell(15, 10, 'REPORTE INTERNOS', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'ULTIMAS VENTAS DE ALBUMS', 0);
$pdf->Ln(10);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=1";
$r1=$conexion->query($registro);
$fila = mysqli_fetch_row($r1);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=2";
$r2=$conexion->query($registro);
$fila2 = mysqli_fetch_row($r2);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=3";
$r3=$conexion->query($registro);
$fila3 = mysqli_fetch_row($r3);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=4";
$r4=$conexion->query($registro);
$fila4 = mysqli_fetch_row($r4);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=5";
$r5=$conexion->query($registro);
$fila5 = mysqli_fetch_row($r5);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=6";
$r6=$conexion->query($registro);
$fila6 = mysqli_fetch_row($r6);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=7";
$r7=$conexion->query($registro);
$fila7 = mysqli_fetch_row($r7);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=8";
$r8=$conexion->query($registro);
$fila8 = mysqli_fetch_row($r8);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=9";
$r9=$conexion->query($registro);
$fila9 = mysqli_fetch_row($r9);

$registro="SELECT Ventas FROM Albums WHERE IDAlbum=10";
$r10=$conexion->query($registro);
$fila10 = mysqli_fetch_row($r10);


$pdf->Ln(10);
//$pdf->Cell(50, 8, 'A CONTINUACION SE PRESENTAN LAS MEDIDAS DE PUNTUACIONES OBTENIDAS DE LOS '.$fila["count(IDAlbum)"], 0);
$pdf->Ln(10);
$pdf->Cell(200, 8, 'ULTIMO REGISTRO DE VENTAS', 0);
$pdf->Ln(15);

//AGREGAR GRAFICOS LSB
$data=array();
//$r = mysql_query("SELECT * FROM Biopsicosocial.LSB WHERE ID='$id'");

$data=array('Sangre Fria' => $fila[0],
'Bonaza' => $fila2[0],
'A Travez De Mi' => $fila3[0],
'Mejor Que El Silencio' => $fila4[0],
'Maravilloso Error' => $fila5[0],
'Cosmovisiones' => $fila6[0],
'America Supersonica' => $fila7[0],
'Sobre El Amor' => $fila8[0],
'Recess' => $fila9[0],
'Beto' => $fila10[0],
'Bonito' => 15,
'Suave' => 20);


//Bar diagram
$pdf->Ln(8);
$pdf->SetFont('Arial', 'BIU', 12);
$pdf->Cell(0, 5, 'TMH-1', 0, 1)	;
$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->BarDiagram(190, 70, $data, '%l : %v (%p)', array(52, 152, 219));
$pdf->SetXY($valX, $valY + 80);

$pdf->Ln(20);
$pdf->Line(10,235,60,235);
//$pdf->Cell(30, 20, $author, 0);
$pdf->Ln(5);
$pdf->Cell(30, 20, 'Nombre y Firma', 0);

$pdf->Output();
?>