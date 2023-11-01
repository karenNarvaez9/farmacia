<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD MEDICAMENTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 </head>
  <body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white">MEDICAMENTOS</h1>
    </div>
    <br>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">codMedicamento</th>
      <th scope="col">nomMedicamento</th>
      <th scope="col">codLaboratorio</th>
      <th scope="col">precioMedicamento</th>
      <th scope="col">cantMedicamento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      require("../php/conexion.php");
      $sql = $conexion->query("SELECT * FROM medicamentos INNER JOIN laboratorio ON medicamentos.codLaboratorio = laboratorio.codLaboratorio");

      while($resultado = $sql->fetch_assoc()){
    ?>
    <tr>
      <th scope="row"><?php echo $resultado['codMedicamento']?></th>
      <th scope="row"><?php echo $resultado['nomMedicamento']?></th>
      <th scope="row"><?php echo $resultado['codLaboratorio']?></th>
      <th scope="row"><?php echo $resultado['precioMedicamento']?></th>
      <th scope="row"><?php echo $resultado['cantMedicamento']?></th>
      <th>
         <a href="./formularios/editar.php?id=<?php echo $resultado['codMedicamento'] ?>" class="btn btn-warning">Editar</a>
         <a href="./formularios/eliminar.php?id=<?php echo $resultado['codMedicamento'] ?>" class="btn btn-danger">Eliminar</a>
       </th>
    </tr>


    <?php
    }
    ?>

  </tbody>
</table>
<div class="container">
<a href="formularios/AgregarForm.php" class="btn btn-success">Agregar Medicamento</a>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>