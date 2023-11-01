<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu de Navegación</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  header{
    height: 50px;
  }
  </style>
</body>
<body>
  <header>
    <div class="menu">
      <nav>
          <ul>
            <li><a href="/farmacia/php/admi.php" target="_blank">inicio</a></li>
            <li><a href="../crud-admin/index.php" target="_blank">Administrador</a></li>
            <li><a href="../crud-medicamentos/index.php" target="_blank">medicamento</a></li>
            <li><a href="../crud-laboratorio/index.php" target="_blank">laboratorio</a></li>
            <li><a href="pdf.php" target="farma">listados</a></li>
            <li><a href="../index.php">salir</a></li>
          </ul>
      </nav>
    </div>
  </header>
  <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="../img/Amoxidal.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="../img/aspirina.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>
      
        <div class="item">
          <img src="../img/buscapina.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="/farmacia/img/ibuprofeno.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
</body>
</html>