<?php
$remitente = $_POST['email'];
$destinatario = 'josermarinr18@gmail.com'; 
$asunto = 'asunto'; 
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo = "Nombre Empresa: " . $_POST["nEmpresa"] . "\r\n"; 
    $cuerpo = "DNI o CIF: " . $_POST["dni"] . "\r\n"; 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Telefono: " . $_POST["telefono"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";
	
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; 
}
?>
