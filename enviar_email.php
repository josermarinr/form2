<?php
if(isset($_POST['email'])) {
 
    // Edita las líneas siguientes con tu dirección de correo y asunto
 
    $email_to = "
 josermarinr18@gmail.com";
 
    $email_subject = "coreos del formulario del la pagina";   
 
    function died($error) {
 
        // si hay algún error, el formulario puede desplegar su mensaje de aviso
 
        echo "Lo sentimos, hay un error en sus datos y el formulario no puede ser enviado. ";
 
        echo "Detalle de los errores.<br /><br />";
        
        echo $error."<br /><br />";
 
        echo "Porfavor corrije los errores e inténtelo de nuevo.<br /><br />";
        die();
    }
 
    // Se valida que los campos del formulairo estén llenos
 
    if(!isset($_POST['nombre']) ||
 
        !isset($_POST['nEmpresa']) ||
 
        !isset($_POST['dni']) ||
        
        !isset($_POST['email']) ||    

        !isset($_POST['telefono']) ||

        !isset($_POST['asunto']) ||
 
        !isset($_POST['consulta'])) {
 
        died('Lo sentimos pero parece haber un problema con los datos enviados.');       
 
    }
 //Valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    
    $first_name = $_POST['nombre']; // requerido
 
    $last_name = $_POST['nEmpresa']; // requerido

    $last_name = $_POST['dni']; // requerido
 
    $email_from = $_POST['email']; // requerido
 
    $telephone = $_POST['telefono']; // requerido 

    $telephone = $_POST['asunto']; // requerido

    $message = $_POST['consulta']; // requerido
 
    $error_message = "Error";

//Verificar que la dirección de correo sea válida 
    
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
 
  }

//Validadacion de cadenas de texto

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$nombre)) {
 
    $error_message .= 'El formato del nombre no es válido<br />';
 
  }
 
  if(!preg_match($string_exp,$nEmpresa)) {
 
    $error_message .= 'el formato del apellido no es válido.<br />';
 
  }
 
  if(strlen($consulta) < 2) {
 
    $error_message .= 'El formato del texto no es válido.<br />';
 
  }
 
  if(strlen($error_message) < 0) {
 
    died($error_message);
 
  }
 
//Plantilla de mensaje

    $email_message = "Contenido del Mensaje.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($nombre)."\n";
 
    $email_message .= "Apellido: ".clean_string($nEmpresa)."\n";
 
    $email_message .= "Apellido: ".clean_string($dni)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Teléfono: ".clean_string($telefono)."\n";
 
    $email_message .= "Teléfono: ".clean_string($asunto)."\n";
 
    $email_message .= "Mensaje: ".clean_string($consulta)."\n";
  
 
//Encabezados
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
<!-- Mensaje de Éxito-->
 
Muchas Gracias! Proximamente Estaremos en Contacto.
 
<?php 
}
?>