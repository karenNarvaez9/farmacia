<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu de Navegación</title>
  <link rel="stylesheet" href="css/style.css">
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
    z-index: 1;
  }
  .background {
    content: ' ';
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0.6;
    background-image: url('img/fondo.jpg');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
  }
  .whatsapp-icon {
  position: fixed;
  bottom: 12px;
  right: 20px;
  border: none; /
  border-radius: 50%;
  padding: 0; 
  background: none; 
 }
  </style>

</head>
<body>
  <div class="background"></div>
  <header>
    <div class="menu">
       <a href="php/login_validar.php"><img src="img/logo.jpg" alt="">
      <nav>
          <ul>
            <li><a href="/farmacia/" target="farma">Inicio</a></li>
            <li><a href="crud-medicamentos/consultar.php" target="_blank">medicamentos</a></li>
            <li><a href="php/login_validar.php">Iniciar Sesión</a></li>
            <li><a href="php/pdf.php" target="farma">Listados</a></li>
          </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="img/Amoxidal.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/aspirina.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>
      
        <div class="item">
          <img src="img/buscapina.jpg" alt="Flower" width="460" height="345">
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
  <a href="https://wa.me/573112682545" class="whatsapp-icon">
  <img src="img/whatsapp.png.png" style="width: 100px; height: 100px;">
</a>
</body>
</html>