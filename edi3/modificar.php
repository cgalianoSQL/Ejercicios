<?php

session_start();
if (!isset($_SESSION['admin']))
{
  header("Location: index.php");
}

require 'php/database.php';




$record = $conn->prepare('SELECT * FROM inmuebles where id = :id');
$record->bindParam(':id', $_GET['inmueble']);
$record->execute();
$result = $record->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inmuebles</title>
    <link rel="stylesheet" href="css/modificar.css">

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
              <li><a href="/edi/contactos.php" class="active">
              <span class="fas fa-comment-dots"></span> CONTACTO</a></li>
              <?php if (isset($_SESSION['admin'])) { ?>
                <li><a href="/edi/logout.php" class="active">
                <span class="fas fa-power-off"></span> LOGOUT</a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
    </header>

    <form name="InmueblesBox" class="Inmuebles-form" id="formulario">
      <h1>Modificar Inmueble</h1>

      <input type="hidden" name="id" value="<?php ECHO  $result['id'];?>">
      <label for="tipo-label">Tipo de inmueble:</label>
      <select id="tipo" name="tipo">
        <option value="<?php ECHO  $result['tipo'];?>"><?php ECHO  $result['tipo'];?></option>
        <option value="Casa">Casa</option>
        <option value="Quinta">Quinta</option>
        <option value="Departamento">Departamento</option>
        <option value="Local">Local</option>
        <option value="Deposito">Deposito</option>
      </select>

      <label for="ambiente-label">Cantidad de ambientes:</label>
      <input type="number" name="ambiente" value="<?php ECHO  $result['ambientes'];?>" minlength="1" required=true>
      <label for="dormitorios-label">Cantidad de dormitorios:</label>
      <input type="number" name="dormitorio"  value="<?php ECHO  $result['dormitorios'];?>" minlength="1" required=true>
      <label for="banos-label">Cantidad de baños:</label>
      <input type="number" name="banos"  value="<?php ECHO  $result['banos'];?>" minlength="1" required=true>
      <br>
      <label for="Cochera-label">Cochera:</label>
      <select id="cochera" name="cochera">
        <?php if ($result['cochera'] == "SI") { ?>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
        <?php } else { ?>
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        <?php } ?>
      </select>
      <input type="text" name="ubicacion" value="<?php ECHO  $result['ubicacion'];?>" minlength="1" required=true>
      <label for="moneda-label">Elegir moneda:</label>
      <select id="moneda" name="moneda">
       <?php if ($result['moneda'] == "DOLARES") { ?>
          <option value="DOLARES">Dolar</option>
          <option value="PESOS">Pesos</option>
        <?php } else { ?>
          <option value="PESOS">Pesos</option>
          <option value="DOLARES">Dolar</option>
        <?php } ?>
      </select>
      <label for="precio-label">Elegir Precio:</label>
      <input type="number" step="any" id="precio" name="precio"  value="<?php ECHO  $result['precio'];?>" minlength="1" required=true>

      <label for="vender-label">Venta o Alquiler:</label>
      <select id="vender" name="vender">
        <?php if ($result['vender'] == 1) { ?>
          <option value="1">Venta</option>
          <option value="0">Alquiler</option>
        <?php } else { ?>
          <option value="0">Alquiler</option>
          <option value="1">Venta</option>
        <?php } ?>
      </select>

      <div class="imagen">
        <input type="text" name="imagen" value="<?php ECHO  $result['imagen'];?>" minlength="1" required=true>

        <label for="descripcion-label">Descripcion:</label>
        <textarea rows="4" cols="50" name="descripcion"><?php ECHO  $result['descripcion'];?> </textarea>
      </div>

      <input type="submit" value="Modificar">


    </form>

    <div class="mt-3" id="respuesta">


    <div class="footer">
      <p>Copyright 2020 © Inmuebles</p>
    </div>

    
    <script src="js/modificar.js"></script>
  </body>
</html>
