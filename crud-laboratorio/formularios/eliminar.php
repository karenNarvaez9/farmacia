<?php
include('../config/conexion.php');
$errorMessage = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM laboratorio WHERE codLaboratorio='$id'";

    $result = $conexion->query($sql);
    if ($result) {
        header("Location: ../");
    }
}
?>
