<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>starbucks</title>
    <link rel="stylesheet" href="css/master.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

  </head>
  <body class="contactanos-body">
    <header class="header">
        <div id="encabezado">
          <img src="img/logo2.png" class="avatar" alt="Avatar Image">


          <div id="menu">
            <ul>
              <li><a href="/ejercicio7" class="active" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> INICIO</a></li>
              <li><a href="/ejercicio7/quienes-somos.php" class="active" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span> QUIENES SOMOS</a></li>
              <li><a href="/ejercicio7/productos.php" class="active"class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> PRODUCTOS</a></li>
              <li><a href="/ejercicio7/contactos.php" class="active_now" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-envelope"></span> CONTACTOS</a></li>
            </ul>
          </div>
        </div>
    </header>

    <div class="container">
      <form class="box-contactanos" id="formulario" name="contactos">
          <h2>Contactanos</h2>
          <label for="name">NOMBRE:</label><br />
          <input name="nombre" type="text" placeholder="Ingrese Su Nombre" minlength="1" required=true/><br />

          <label for="email">EMAIL:</label><br />
          <input name="email" type="email" placeholder="Ejemplo@gmail.com" minlength="1" required=true/><br />
          
          <label for="message">MENSAJE:</label><br />
          <textarea class="input" name="mensaje" rows="7" cols="30"  placeholder="--INGRESE SU MENSAJE--" minlength="1" required=true></textarea><br />
          
          <input type="submit" value="Enviar">
      </form>
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

  <script src="js/contactanos.js"></script>

  </body>
</html>
