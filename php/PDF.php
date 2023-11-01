<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../img/logo.jpg', 10, 8, 40); // Ajusta el tamaño a 40 y las coordenadas según tus preferencias
        $this->SetFont('Arial','B',20);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70,10,'Reporte Medicamentos',0,0,'C');
        // Salto de línea
        $this->Ln(25);

        $this->Cell(30, 10,'Codigo',1,0,'C',0);
        $this->Cell(70, 10,'Nombre',1,0,'C',0);
        $this->Cell(50, 10,'Precio',1,0,'C',0);
        $this->Cell(40, 10,'Cant',1,1,'C',0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
    }
}

include('conexion.php');

$consulta = "SELECT * FROM medicamentos";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',13);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(30, 10,$row['codMedicamento'],1,0,'C',0);
    $pdf->Cell(70, 10,utf8_decode($row['nomMedicamento']),1,0,'C',0);
    $pdf->Cell(50, 10,$row['precioMedicamento'],1,0,'C',0);
    $pdf->Cell(40, 10,$row['cantMedicamento'],1,1,'C',0);
}

$pdf->Output();
?>
