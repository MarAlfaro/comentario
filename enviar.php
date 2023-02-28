<?php
// Recuperar los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configurar los detalles del correo electrónico
$to = 'alfaroyancy0@gmail.com';
$subject = 'Mensaje enviado desde mi sitio web';
$headers = "From: $name <$email>" . "\r\n" .
"Reply-To: $name <$email>" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

// Enviar el correo electrónico
mail($to, $subject, $message, $headers);

?>
