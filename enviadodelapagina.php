<?php
	if (isset($_POST['nombre'])){
		$nombres=htmlentities($_POST['nombre']);
		$nombre_Empresa=htmlentities($_POST['nEmpresa']);
		$DNI_o_CIF=htmlentities($_POST['dni']);
		$email_cliente=htmlentities($_POST['email']);
		$telefono=htmlentities($_POST['telefono']);
		$subject=utf8_decode($_POST['subject']);
		$mensaje=htmlentities($_POST['consulta']);
		
		
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<p>Hola, ha sido registrado un nuevo mensaje desde el formulario de contacto del sitio web, según el detalle siguiente:</p> ';
	$message .= '<p>Cliente: '.$nombres.'</p> ';
	$message .= '<p>Cliente: '.$nombre_Empresa.'</p> ';
	$message .= '<p>Cliente: '.$DNI_o_CIF.'</p> ';
	$message .= '<p>Email: '.$email_cliente.'</p> ';
	$message .= '<p>Teléfono: '.$telefono.'</p> ';
	$message .= '<p>Mensaje: '.$mensaje.'</p> ';
	
	

	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
	$email_to = "info@serprint.com";
 
	
			
	if (mail($email,$subject,$message,$header)){
		echo 'success';
	}	 else {
		echo 'No se pudo enviar el mensaje.';
	}
	/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
	
	header("Location: http://www.serprint.com");
	
	
	}




?>