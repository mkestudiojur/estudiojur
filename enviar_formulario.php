<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "ajms7@hotmail.com"; // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto de $nombre";
    $body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\n\nMensaje:\n$mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
