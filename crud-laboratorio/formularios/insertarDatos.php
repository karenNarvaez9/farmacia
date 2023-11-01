<?php
include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codLaboratorio = $_POST['codLaboratorio'];
    $nomLaboratorio = $_POST['nomLaboratorio'];
    $Director = $_POST['Director'];

    $stmt = $conexion->prepare("INSERT INTO laboratorio (codLaboratorio, nomLaboratorio, Director) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $codLaboratorio, $nomLaboratorio, $Director);

    if ($stmt->execute()) {
        header("location: ../index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close(); 
}
?>
