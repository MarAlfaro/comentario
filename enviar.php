<?php
// Recuperar los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configurar los detalles del correo electrónico
$to = 'alfaroyancy0@gmail.com';
$subject = 'Mensaje enviado desde mi sitio web';
$headers = "From: $name <$email>";

// Enviar el correo electrónico
mail($to, $subject, $message, $headers);

// Redirigir al usuario a una página de confirmación
header('Location: index.html');
?>

