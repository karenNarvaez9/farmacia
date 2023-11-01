<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Administrador</h1>
    <br>
    <div class="container">
      <form action="insertarDatos.php" method="POST">
        <div class="mb-3">
          <label for="codAdmin">Código del Administrador</label>
          <input type="text" class="form-control" name="codAdmin">
        </div>
        <div class="mb-3">
          <label for="userName">Nombre de Usuario</label>
          <input type="text" class="form-control" name="userName">
        </div>
        <div class="mb-3">
          <label for="passAdmin">Contraseña</label>
          <input type="password" class="form-control" name="passAdmin">
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
