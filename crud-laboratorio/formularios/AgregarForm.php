<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Laboratorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-black p-2 text-white text-center">Agregar Laboratorio</h1>
<br>
<div class="container">
    <form action="insertarDatos.php" method="POST">
        <div class="mb-3">
            <label for="codLaboratorio">Código de Laboratorio</label>
            <input type="text" class="form-control" name="codLaboratorio">
        </div>
        <div class="mb-3">
            <label for="nomLaboratorio" class="form-label">Nombre de Laboratorio</label>
            <input type="text" class="form-control" name="nomLaboratorio">
        </div>
        <div class="mb-3">
            <label for="Director" class="form-label">Director</label>
            <input type="text" class="form-control" name="Director">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
