<?php

$destino="david.3paru@gmail.com";
$nombre = $_POST["nombre"];

$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre : ".$nombre."\nCorreo: ".$email. "\nAsunto: ".$asunto."\nMensaje: ".$mensaje;
mail($destino,"contacto_web",$contenido);
header("Location:index.php");
?>