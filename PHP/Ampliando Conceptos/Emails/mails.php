<?php
    $to = "jesusdortiz18@gmail.com";
    $subject = "Email de Confirmación";
    $message = "Hola, comfirma haciendo click en el siguiente enlace";
    $from = "administrador@dominio.com";

    $headers = "From: $from";

    mail($to, $subject, $message, $headers);

    echo "Mail enviado";
?>