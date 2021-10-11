<?php

session_start();

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
    <link rel="stylesheet" href="css/ver.css">

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

       
    <div class="footer">
      <p>Copyright 2020 © Inmuebles</p>
    </div>


    <form name="InmueblesBox" class="Inmuebles-form" id="formulario">
      <h2><?php ECHO  $result['tipo'];?>, <?php ECHO  $result['ubicacion'];?><h2>
      <img class="card-img-bottom center" src="<?php ECHO $result['imagen']; ?>" alt="Card image" style="width:250px">
      <input type="hidden" name="id" value="<?php ECHO  $result['id'];?>" >
      <input type="hidden" id="vender" name="vender" value="<?php ECHO  $result['vender'];?>" >

      

      <div class="informacion">
        <div class="d-flex justify-content-between">
            <a style="font-size:24px;"><span class="fas fa-door-open" style="font-size:24px; color:white"></span> <?php ECHO  $result['ambientes'];?> Ambientes &nbsp;&nbsp;&nbsp;&nbsp;
            <a style="font-size:24px;"><span class="fas fa-bath" style="font-size:24px; color:white"></span> <?php ECHO  $result['banos'];?> Baños &nbsp;&nbsp;&nbsp;&nbsp;
            <a style="font-size:24px;"><span class="fas fa-bed" style="font-size:24px; color:white"></span> <?php ECHO  $result['dormitorios'];?> Dormitorios &nbsp;&nbsp;&nbsp;&nbsp;
            <a style="font-size:24px;"><span class="fas fa-car" style="font-size:24px; color:white"></span> Cochera <?php ECHO  $result['cochera'];?> &nbsp;&nbsp;&nbsp;&nbsp;
            </a> 
        </div>
        <br>
        <label for="descriipcion-titulo"  style="font-size:24px;" >Acerca de la propiedad:  </label>
        <label for="descriipcion"  style="font-size:18px;" ><?php ECHO  $result['descripcion'];?></label>
        <div class="d-flex justify-content-between">
            <a style="font-size:24px; color:green">Precio: <?php ECHO  $result['precio'];?>
             <?php ECHO  $result['moneda'];?>
            </a> 
        </div>

      </div>

      <input type="submit" value="Volver">


    </form>

 
    
    <script src="js/ver.js"></script>
  </body>
</html>
