<?php
$name = $_POST['Nombre'];
$lastname = $_POST['Apellidos'];
$phone = $_POST['Telefono'];
$correo = $_POST['Correo'];
$message = $_POST['Mensaje'];

$formcontent = "Acabas de recibir un mensaje de $name\n

asunto= $asunto\n
telefono= $phone\n
correo= $correo\n
mensaje= $message\n";

$recipient = "papeleriaelcampo21@gmail.com";
$subject = "Recibiste un correo de la Web";
$mailheader = "Form: $correo\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
?>