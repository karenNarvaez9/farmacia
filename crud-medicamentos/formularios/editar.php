<?php
include ('../config/conexion.php');
$errorMessage="";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql="SELECT * FROM `medicamentos` WHERE codMedicamento='$id'";

    $result=$conexion->query($sql);
    if($result){
        $datos=mysqli_fetch_assoc($result);
        $nomMedicamento=$datos['nomMedicamento'];
        $codLaboratorio=$datos['codLaboratorio'];
        $precioMedicamento=$datos['precioMedicamento'];
        $cantMedicamento=$datos['cantMedicamento'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST["editar"])) {
        $nomMedicamento = $_POST["nomMedicamento"];
        $codLaboratorio = $_POST["codLaboratorio"];
        $precioMedicamento = $_POST["precioMedicamento"];
        $cantMedicamento = $_POST["cantMedicamento"];

        $sql="UPDATE `medicamentos` SET codMedicamento='$id', nomMedicamento='$nomMedicamento',codLaboratorio='$codLaboratorio',precioMedicamento='$precioMedicamento',cantMedicamento='$cantMedicamento' WHERE codMedicamento='$id'";
        $consulta=$conexion->query($sql);

        if($consulta){
            
            $id = $nomMedicamento= $codLaboratorio=$cantMedicamento=$precioMedicamento= $cantMedicamento = "";
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
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const passwordField = document.getElementById("contrasena");
    const toggleButton = document.getElementById("togglePassword");
    const eyeIcon = document.getElementById("eye-icon");

    toggleButton.addEventListener("click", function () {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("bi-eye");
            eyeIcon.classList.add("bi-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("bi-eye-slash");
            eyeIcon.classList.add("bi-eye");
        }
    });
});
</script>

</head>
<body >
    <h2 class="text-center p-3 bg-dark text-light">Formulario Editar Medicamento</h2>
    <div class="form p-2 m-auto mt-4 w-50 rounded-3 bg-light shadow">
      <form method="POST">
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Código</label> 
            <input class="p-1  " type="text" value="<?php echo $id ?>" disabled></input>
        </div>
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Nombre</label> 
            <input class="p-1  " type="text" name="nomMedicamento" value="<?php echo $nomMedicamento ?>" autocomplete="off"></input>
        </div>
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Código del laboratorio</label> 
            <input class="p-1  " type="text" name="codLaboratorio" value="<?php echo $codLaboratorio ?>" autocomplete="off"></input>
        </div>
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Precio</label> 
            <input class="p-1  " type="text" name="precioMedicamento" value="<?php echo $precioMedicamento?>" autocomplete="off"></input>
        </div>
        <div class="p-2 d-flex flex-column mt-2" >
            <label class="mb-2 fw-semibold">Cantidad</label> 
            <input class="p-1  " type="text" name="cantMedicamento" value="<?php echo $cantMedicamento ?>" autocomplete="off"></input>
        </div>
        <div class="p-2 d-flex justify-content-center">
            <input value="Editar" name="editar" class="p-2 fw-semibold btn btn-success" type="submit"></input>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
      </form>

    </div>
    <div class="p-2 d-flex flex-column mt-2">
    <label class="mb-2 fw-semibold">Contraseña</label>
    <div class="input-group">
        <input class="form-control" type="password" name="contrasena" id="contrasena" value="<?php echo $contrasena ?>" autocomplete="off">
        <button type="button" id="togglePassword" class="btn btn-outline-secondary">
            <i class="bi bi-eye" id="eye-icon"></i>
        </button>
    </div>
</div>

    
</body>
</html>