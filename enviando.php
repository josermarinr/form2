<?php
 $destino="josermarinr18@gmail.com" //correo destino info@serprint.com
 $nombre = $_POST["nombre"];
 $nEmpresa = $_POST["nEmpresa"];
 $dni = $_POST["dni"];
 $correo = $_POST["email"];
 $telefono = $_POST["telefono"];
 $asunto = $_POST["asunto"];
 $mensaje = $_POST["asunto"];
 $contenido = "Nombre: " . $nombre . "\nNombre Empresa:" . $nEmpresa . "\nDNI:" . $dni . "\nCorreo:" . $email . "\nTelefono: " . $telefono . "\Mensaje: " . $mensaje;
 mail ($destino,"contacto",$asunto,$contenido);
 header ("location:josermarinr.com")



?>