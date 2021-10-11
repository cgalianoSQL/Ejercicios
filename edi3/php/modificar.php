<?php

session_start();

require 'database.php';

$sql = "UPDATE inmuebles SET
  tipo = :tipo, ambientes = :ambiente,	dormitorios = :dormitorio, banos = :banos,
  cochera = :cochera, descripcion = :descripcion, ubicacion = :ubicacion,
  precio = :precio, moneda = :moneda, imagen = :imagen, vender = :vender 
WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $_POST['id']);
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

