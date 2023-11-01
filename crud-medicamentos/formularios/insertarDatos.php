<?php
include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codMedicamento = $_POST['codMedicamento'];
    $nomMedicamento = $_POST['nomMedicamento'];
    $codLaboratorio = $_POST['codLaboratorio'];
    $precioMedicamento = $_POST['precioMedicamento'];
    $cantMedicamento = $_POST['cantMedicamento'];

    $stmt = $conexion->prepare("INSERT INTO medicamentos (codMedicamento, nomMedicamento, codLaboratorio, precioMedicamento, cantMedicamento) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $codMedicamento, $nomMedicamento, $codLaboratorio, $precioMedicamento, $cantMedicamento);

    if ($stmt->execute()) {
        header("location: ../index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>

