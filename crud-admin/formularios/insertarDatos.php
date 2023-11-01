<?php
include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codAdmin = $_POST['codAdmin'];
    $userName = $_POST['userName'];
    $passAdmin = $_POST['passAdmin'];

    $stmt = $conexion->prepare("INSERT INTO admin (codAdmin, userName, passAdmin) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $codAdmin, $userName, $passAdmin);

    if ($stmt->execute()) {
       header("location: /farmacia/index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
