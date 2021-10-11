<?php

session_start();

require 'php/database.php';

$record = $conn->prepare('SELECT * FROM inmuebles limit 5');
$record->execute();
$total = $record->rowCount();
$result = $record->fetchAll();


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inmobiliaria</title>
    <link rel="stylesheet" href="css/index.css">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/325b4f7989.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <header class="header">
        <div id="encabezado">
          <img src="img/logo2.jpg" class="avatar" alt="Avatar Image">

           INMOBILIARIAS
            <div id="menu">
            <ul>
              <li><a href="/edi/index.php" class="active_now"><span class="fas fa-home"></span> INICIO</a></li>
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
      <p>Copyright 2020 © Inmobiliaria</p>
    </div>
 
   <div class="container" style="  margin-top: 10px;">
    <div class="container" style="background: #ec6905c5;"s>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php for($i=0;$i<$total;$i++){ $active="active";?>
          <li style="background:black" data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="<? echo $active;?>"></li>
        <?php
            $active="";
        }
        ?>
        </ol>
        <div class="carousel-inner">
        <?php $active="active";
            foreach ($result as $r) {
        ?>
          <div align="center" class="carousel-item <?php echo $active;?>">
            <img src="<?php echo $r['imagen'];?>" style="width:70%;height:500px">
          </div>
        <?php 
         $active="";
        }
        ?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span style="color:black" class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">SIGUIENTE</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


  </body>
</html>
