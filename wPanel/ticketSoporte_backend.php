<?php 
require '../config_db.php';
session_start();

$mensaje = $_POST['mensaje'];
 
$Asunto = "Soporte WPANEL";
              
    require("phpMailer/class.phpmailer.php");
    require("phpMailer/class.smtp.php");

   

    $consulta = "SELECT * FROM usuario WHERE id = '7'";

    $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
    while ($rows = $result->fetch_assoc()) {
   

$destinatario = $rows['email']; //Correo de usuario


// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "gabrielubuntu320@gmail.com";  // Correo Instituto
$smtpClave = "gabriel40068922";  // Mi contraseña


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $destinatario; // Email desde donde env�o el correo.
$mail->FromName = "SOMOS WIZARD";
$mail->AddAddress($smtpUsuario); // Esta es la direcci�n a donde enviamos los datos del formulario



$mail->Subject = "TICKET SOPORTE {$rows['nombre']} {$rows['apellido']}"; // Este es el titulo del email.

$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>TICKET SOPORTE {$rows['nombre']} {$rows['apellido']}</h1>


<p>Informacion sobre error</p>

<p>Asunto: Ticket Soporte</p>
   
$mensaje

</body> 

</html>  
<br />"; // Texto del email en formato HTML
    }
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 

if($estadoEnvio){
    echo '<script type="text/javascript">
alert("Se envio el reporte, correctamente");
window.location.href="wPanel.php"; 
</script>';
} else {
    echo "Ocurrio un error inesperado.";
}


