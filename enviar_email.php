<?php
//$nombre = $_POST['nombre'];
//$apellido = $_POST['apellido'];
//$asunto = $_POST['asunto'];
//$email = $_POST['email'];
//$mensaje = $_POST['mensaje'];

//$para = 'info@portafoliocultural.org';
//$titulo = 'Mensaje de la web';
//$header = 'From: ' . $email;
//$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

//if ($_POST['submit']) {
//if (mail($para, $titulo, $msjCorreo, $header)) {
//echo "<script language='javascript'>
//alert('Mensaje enviado, muchas gracias.');
//window.location.href = 'http://www.portafoliocultural.org';
//</script>";
//} else {
//echo 'Falló el envio';

//}
//}
$destino="el msjCorreo";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre : ".$nombre."apellido: ".$apellido."correo: ".$email. "asunto: ".$asunto."mensaje: ".$mensaje;
mail($destino,"contacto",$contenido);
header("location:index.php");
?>