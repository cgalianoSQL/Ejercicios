<?php
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inmuebles</title>
    <link rel="stylesheet" href="css/contactos.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/325b4f7989.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <header class="header">
        <div id="encabezado">
          <img src="img/logo2.jpg" class="avatar" alt="Avatar Image">

            Inmuebles
            <div id="menu">
            <ul>
              <li><a href="/edi/index.php" class="active"><span class="fas fa-home"></span> INICIO</a></li>
              <li><a href="/edi/alquiler.php" class="active"><span class="	fas fa-hotel"></span> ALQUILER</a></li>
              <li><a href="/edi/venta.php" class="active"><span class="	fas fa-award"></span> VENTA</a></li>
              <li><a href="/edi/contactos.php" class="active_now">
              <span class="fas fa-comment-dots"></span> CONTACTO</a></li>
              <?php if (isset($_SESSION['admin'])) { ?>
                <li><a href="/edi/logout.php" class="active">
                <span class="fas fa-power-off"></span> LOGOUT</a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
    </header>


    <div class="footer">
      <p>Copyright 2020 © Inmuebles</p>
    </div>


    <div class="container">
      <form class="box-contactanos" id="formulario" name="contactos">
          <h2>Contactanos</h2>
          <label for="name">NOMBRE:</label><br />
          <input name="nombre" type="text" placeholder="Ingrese Su Nombre" minlength="1" required=true/><br />

          <label for="email">EMAIL:</label><br />
          <input name="email" type="email" placeholder="Ejemplo@gmail.com" minlength="1" required=true/><br />
          
          <label for="message">MENSAJE:</label><br />
          <textarea name="mensaje" rows="7" cols="30"  required=true></textarea><br />
          
          <input type="submit" value="Enviar">
      </form>
    </div>
   

  <script src="js/contactanos.js"></script>

  </body>
</html>
