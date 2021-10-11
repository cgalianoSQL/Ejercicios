<?php

session_start();

require 'database.php';

$sql = "INSERT INTO cv 
  (nombre, dni, correo, telefono, fecha_nacimiento, segundario, otros_estudios, primerLaboral, segunLaboral)
VALUES 
  (:nombre, :dni, :correo, :telefono, :fecha_nacimiento, :segundario, :otros_estudios, :primerLaboral, :segunLaboral)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nombre', $_POST['nombre']);
$stmt->bindParam(':dni', $_POST['dni']);
$stmt->bindParam(':correo', $_POST['correo']);
$stmt->bindParam(':telefono', $_POST['telefono']);
$stmt->bindParam(':fecha_nacimiento', $_POST['fecha_nacimiento']);
$stmt->bindParam(':segundario', $_POST['segundario']);
$stmt->bindParam(':otros_estudios', $_POST['otros_estudios']);
$stmt->bindParam(':primerLaboral', $_POST['primerLaboral']);
$stmt->bindParam(':segunLaboral', $_POST['segunLaboral']);

if ($stmt->execute()) {
  echo json_encode('Correcto');
} else {
  echo json_encode('Error');
}

