<?php

session_start();

require 'php/database.php';

$record = $conn->prepare('SELECT * FROM inmuebles where vender = 0');
$record->execute();
$result = $record->fetchAll();

$Inmuebles_por_pag = 6;
$total = $record->rowCount();
$paginas = ceil($total / $Inmuebles_por_pag);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inmuebles</title>
    <link rel="stylesheet" href="css/alquiler.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/325b4f7989.js" crossorigin="anonymous"></script>

  </head>
  <body">

    
    <header class="header">
        <div id="encabezado" >
          <img src="img/logo2.jpg" class="avatar" alt="Avatar Image">

            Inmuebles
            <div id="menu">
              <ul>
                <li><a href="/edi/index.php" class="active"><span class="fas fa-home"></span> INICIO</a></li>
                <li><a href="/edi/alquiler.php" class="active_now"><span class="	fas fa-hotel"></span> ALQUILER</a></li>
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



    <?php
      if(!$_GET){
        header('Location:alquiler.php?pagina=1');
      }

      $iniciar = ($_GET['pagina']-1)*$Inmuebles_por_pag;

      $sql_Inmuebles = $conn->prepare('SELECT * FROM inmuebles where vender = 0 LIMIT :iniciar , :nInmuebles');
      $sql_Inmuebles->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
      $sql_Inmuebles->bindParam(':nInmuebles', $Inmuebles_por_pag, PDO::PARAM_INT);
      $sql_Inmuebles->execute();
      $result_Inmuebles = $sql_Inmuebles->fetchAll();


    ?>

    <div class="row">

      <?php
        foreach($result_Inmuebles as $mostrar):
      ?>

      <div class="col-md">

        <div class="card" style="width:400px">
          <div class="d-flex justify-content-between">
            <a><span class="fas fa-splotch" style="font-size:24px; color:green">
            <?php ECHO  $mostrar['tipo'];?></a>
            <?php if (isset($_SESSION['admin'])) { ?>
              <a href="/edi/modificar.php?inmueble=<?php echo $mostrar['id']; ?>" ><span class="fas fa-edit" style="font-size:24px; color:blue"></a>
              <a href="/edi/eliminar.php?inmueble=<?php echo $mostrar['id']; ?>" ><span class="fas fa-trash-alt" style="font-size:24px; color:red"></a>
            <?php } ?>
          </div>
          <img class="card-img-bottom" src="<?php ECHO $mostrar['imagen']; ?>" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title"><?php ECHO  $mostrar['ubicacion'];?></h4>
            <a><span class="fas fa-door-open" style="font-size:14px; color:#f19f62"> <?php echo $mostrar['ambientes']; ?> Ambiente/s</a>
            <a><span class="fas fa-bed" style="font-size:14px; color:#f19f62"> <?php echo $mostrar['dormitorios']; ?> Dormitorio/s</a>
            <br>
            <a><span class="fas fa-bath" style="font-size:14px; color:#f19f62"><?php echo $mostrar['banos']; ?> Baño/s</a>
            <a><span class="fas fa-car" style="font-size:14px; color:#f19f62">Cochera <?php echo $mostrar['cochera']; ?></a>
            <p class="card-text"><?php ECHO  $mostrar['descripcion'];?></p>
            <a href="/edi/ver.php?inmueble=<?php echo $mostrar['id']; ?>" class="btn btn-primary">Ver</a>
          </div>
        </div>
        
      </div>

      <?php
        endforeach
      ?>

    </div>

    <?php if (isset($_SESSION['admin'])) { ?>
      <div class="btn-agregar">
        <a href="/edi/crear.php" > 
        <span class="fa fa-plus-circle" style="font-size:48px; color:green"></span>
        </a>
      </div>
    <?php } ?>
    
    <div class="container-pag">
      <ul class="pagination">
        <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled':''  ?>">
          <a class="page-link" href="alquiler.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            Anterior
          </a>
        </li>

        <?php for($i=0;$i<$paginas;$i++): ?>

        <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
          <a class="page-link" href="alquiler.php?pagina=<?php echo $i+1 ?>"> <?php echo $i+1 ?></a>
        </li>

        <?php endfor ?>


        <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled':''  ?>">
          <a class="page-link" href="alquiler.php?pagina=<?php echo $_GET['pagina']+1 ?>">Siguiente</a>
        </li>
      </ul>
    </div>



  
    <div class="footer">
      <p>Copyright 2020 © Inmuebles</p>
    </div>



  </body>
</html>
