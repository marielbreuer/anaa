<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$comentario = $_POST['comentario'];

    mail (
        "marielbreuer@gmail.com",
        "Mail desde web.com",
        "$nombre te envío $comentario contactalo a $mail",
        "From: ANAA <info@anaa.com>" 
    );  
    mail (
        $mail,
        "Recibimos tu consula",
        "Gracias por escribir a ANAA",
        "From: ANAA <info@anaa.com>"

    );

    echo "Mensaje enviado";
?>

