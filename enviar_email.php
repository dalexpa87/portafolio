<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$para = 'comunicaciones@portafoliocultural.org';
$titulo = 'Mensaje de la web';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.portafoliocultural.org';
</script>";
} else {
echo 'Falló el envio';

}
}
?>