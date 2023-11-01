<?php
include ('../config/conexion.php');
$errorMessage = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `laboratorio` WHERE codLaboratorio='$id'";

    $result = $conexion->query($sql);
    if ($result) {
        $datos = mysqli_fetch_assoc($result);
        $nomLaboratorio = $datos['nomLaboratorio'];
        $codLaboratorio = $datos['codLaboratorio'];
        $Director = $datos['Director'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST["editar"])) {
        $nomLaboratorio = $_POST["nomLaboratorio"];
        $codLaboratorio = $_POST["codLaboratorio"];
        $Director = $_POST["Director"];

        $sql = "UPDATE `laboratorio` SET codLaboratorio='$codLaboratorio', nomLaboratorio='$nomLaboratorio', Director='$Director' WHERE codLaboratorio='$id'";
        $consulta = $conexion->query($sql);

        if ($consulta) {
            $id = $nomLaboratorio = $codLaboratorio = $Director = "";
            header("Location:../");
            exit;
        }
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Editar <?php echo $id ?></title>
</head>
<body>
    <h2 class="text-center p-3 bg-dark text-light">Formulario Editar Laboratorio</h2>
    <div class="form p-2 m-auto mt-4 w-50 rounded-3 bg-light shadow">
      <form method="POST">
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Código del Laboratorio</label> 
            <input class="p-1" type="text" value="<?php echo $id ?>" disabled></input>
        </div>
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Nombre del Laboratorio</label> 
            <input class="p-1" type="text" name="nomLaboratorio" value="<?php echo $nomLaboratorio ?>" autocomplete="off"></input>
        </div>
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Director del Laboratorio</label> 
            <input class="p-1" type="text" name="Director" value="<?php echo $Director ?>" autocomplete="off"></input>
        </div>
        <div class="p-2 d-flex justify-content-center">
            <input value="Editar" name="editar" class="p-2 fw-semibold btn btn-success" type="submit"></input>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
      </form>
    </div>
</body>
</html>
