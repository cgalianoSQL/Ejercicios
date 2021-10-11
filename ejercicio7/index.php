<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>starbucks</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body class="home-body">
    <header class="header">
        <div id="encabezado">
          <img src="img/logo2.png" class="avatar" alt="Avatar Image">


          <div id="menu">
            <ul>
              <li><a href="/index.php" class="active_now" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> INICIO</a></li>
              <li><a href="/index" class="active" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span> QUIENES SOMOS</a></li>
              <li><a href="/ejercicio7/productos.php" class="active"class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> PRODUCTOS</a></li>
            <li><a href="/ejercicio7/contactos.php" class="active" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-envelope"></span> CONTACTOS</a></li>
            </ul>
          </div>
        </div>
    </header>

      
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="img/carusel1.jpg" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>
        </div>

        <div class="item">
          <img src="img/fondo.jpg" alt="Chicago" style="width:100%;">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
      
        <div class="item">
          <img src="img/carusel2.jpg" alt="New York" style="width:100%;">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Coffee!</p>
          </div>
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

   


    <!-- Site footer -->
    <footer class="site-footer" style="position: relative; background-color: #000; font-size:20px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright 2020 footer starbucks
            </p>
          </div>
      </div>
  </footer>

  </body>
</html>
