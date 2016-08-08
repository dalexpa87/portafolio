<?php

$destino="david.3paru@gmail.com";
$nombre = $_POST['nombre'];

$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre : ".$nombre."correo: ".$email. "asunto: ".$asunto."mensaje: ".$mensaje;
mail($destino,"contacto",$contenido);
header("Location:index.php");
?>