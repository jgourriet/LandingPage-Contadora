<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "jgourriet@gmail.com"; // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto: $subject";
    $messageBody = "Nombre: $name\nEmail: $email\nAsunto: $subject\nMensaje: $message";

    // Enviar el correo electrónico
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $enviado = mail($to, $subject, $messageBody, $headers);

    if ($enviado) {
        echo "OK";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
