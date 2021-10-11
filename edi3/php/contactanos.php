<?php

session_start();

require 'database.php';
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';


$sql = "INSERT INTO  contactos 
  (nombre, email, mensaje)
VALUES 
  (:nombre,:email, :mensaje)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nombre', $_POST['nombre']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':mensaje', $_POST['mensaje']);

if ($stmt->execute()) {
  echo json_encode('Correcto');
  $mail = new PHPMailer();
  $mail -> isSMTP();
  $mail -> SMTPAuth = true; //variable booleanea
  $mail -> SMTPSecure = 'ssl';
  $mail -> Host = 'smtp.gmail.com';//servidor smtp de Gmail gratuito
  $mail -> Port = '465'; //puerto
  $mail -> isHTML();
  $mail -> Username = 'tester2020.cwg@gmail.com'; //
  $mail -> Password = '13245tester'; //
  $mail -> SetFrom('no-reply@hoecode.org');
  $mail -> Subject = 'Nueva Consulta De Su Pagina';
  $mail -> Body = 'Nombre: ' . $_POST['nombre'] . ' eMail: ' . $_POST['email'] . ' Mensaje: ' . $_POST['mensaje'];
  $mail -> AddAddress('w.c.galiano@gmail.com'); //A quien se enviara el mail
  $mail -> Send();

} else {
  echo json_encode('Error');
}

