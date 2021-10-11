<?php

session_start();

require 'database.php';

$sql = "INSERT INTO inmuebles 
  (id, tipo, ambientes,	dormitorios, banos, cochera, descripcion, ubicacion, precio, moneda, imagen, vender)
VALUES 
  (null, :tipo, :ambiente, :dormitorio, :banos, :cochera, :descripcion, :ubicacion, :precio, :moneda, :imagen, :vender)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':tipo', $_POST['tipo']);
$stmt->bindParam(':ambiente', $_POST['ambiente']);
$stmt->bindParam(':dormitorio', $_POST['dormitorio']);
$stmt->bindParam(':banos', $_POST['banos']);
$stmt->bindParam(':cochera', $_POST['cochera']);
$stmt->bindParam(':descripcion', $_POST['descripcion']);
$stmt->bindParam(':ubicacion', $_POST['ubicacion']);
$stmt->bindParam(':precio', $_POST['precio']);
$stmt->bindParam(':moneda', $_POST['moneda']);
$stmt->bindParam(':imagen', $_POST['imagen']);
$stmt->bindParam(':vender', $_POST['vender']);

if ($stmt->execute()) {
  echo json_encode('Correcto');
} else {
  echo json_encode('Error');
}


