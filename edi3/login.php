<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inmobiliaria</title>
    <link rel="stylesheet" href="css/master.css">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <header class="header">
          <div id="encabezado">
            <img src="img/logo2.jpg" class="avatar" alt="Avatar Image">

            INMOBILIARIAS
          </div>
      </header>

    <div class="footer">
      <p>Copyright 2020 © Inmobiliaria</p>
    </div>

    <div class="login-box">
      <img src="img/logo1.jpg" class="avatar" alt="Avatar Image">
      <h1>Bienvenido</h1>
 
      <form name="login" id="formulario">

        <label for="username">Usuario</label>
        <input type="text" name="username" placeholder="Introducir Usuario" required>
        
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Introducir Password" required>
        <input type="submit" value="Aceptar">
        <div class="text-center">
        </div>

        <div class="mt-3" id="respuesta">

      </form>
    </div>

    <script src="js/loginQuery.js"></script>


  </body>
</html>
