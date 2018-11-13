<?php

// ----------- LLAMAR CAMPOS -----------

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$asuntocliente = $_POST ['asunto'];
$mensaje = $_POST['mensaje'];
$empresa = $_POST['empresa'];


// ----------- DATOS PARA EL CORREO -----------

$destinatario = "";// CORREO A DONDE SE ENVIARA
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "E-mail: $email \n";
$carta .= "Asunto: $asuntocliente \n";
$carta .= "Empresa: $empresa \n";
$carta .= "Mensaje: $mensaje";

// ----------- ENVIO DE MENSAJE -----------

mail($destinatario, $asunto, $carta);
header('Location:mensajeEnvio.html'); // NUEVA HOJA DE MENSAJE ENVIADO

 ?>
