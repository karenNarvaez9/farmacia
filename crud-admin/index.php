<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD ADMINISTRADORES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
    <h1 class="text-center" style="background-color: black; color:white">ADMINISTRADORES</h1>
</div>
<br>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">codAdmin</th>
            <th scope="col">userName</th>
            <th scope="col">passAdmin</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require("../php/conexion.php");
        $sql = $conexion->query("SELECT * FROM admin");

        while ($resultado = $sql->fetch_assoc()) {
            ?>
            <tr>
                <th scope="row"><?php echo $resultado['codAdmin'] ?></th>
                <th scope="row"><?php echo $resultado['userName'] ?></th>
                <th scope="row"><?php echo $resultado['passAdmin'] ?></th>
                <th>
                    <a href="./formularios/editar.php?id=<?php echo $resultado['codAdmin'] ?>" class="btn btn-warning">Editar</a>
                    <a href="./formularios/eliminar.php?id=<?php echo $resultado['codAdmin'] ?>" class="btn btn-danger">Eliminar</a>
                </th>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div class="container">
        <a href="formularios/AgregarForm.php" class="btn btn-success">Agregar Administrador</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>

