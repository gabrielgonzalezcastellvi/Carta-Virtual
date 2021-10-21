<?php

error_reporting(0);

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}

if(isset($_POST["CursosIntensivosDeEspañol Temporada Alta"]) || isset($_POST["CursosIntensivosDeEspañol Temporada Baja"]) ||
isset($_POST["CursosRegularesDeEspañol 2 veces por semana"]) || isset($_POST["Programa de español para la obtencion de creditos universitarios"]) ||
isset($_POST["Programas_Especiales_Temporada_alta"]) || isset($_POST["Programas_Especiales_Temporada_baja"]) || isset( $_POST["Español y Vino Temporada alta"])
|| isset($_POST["Español y Vino Temporada baja"]) || isset($_POST["Español y fotografia temporada alta"]) || isset($_POST["Español y fotografia temporada baja"]) ||
isset($_POST["Español y Negocios temporada alta"]) || isset($_POST["Español y Negocios temporada baja"])){

   $CursosIntensivosDeEspañol_Temporada_Alta = $_POST["CursosIntensivosDeEspañol Temporada Alta"];
   $CursosIntensivosDeEspañol_Temporada_Baja = $_POST["CursosIntensivosDeEspañol Temporada Baja"];
   $CursosRegularesDeEspañol_2_veces_por_semana = $_POST["CursosRegularesDeEspañol 2 veces por semana"];
   $Programa_de_español_para_la_obtencion_de_creditos_universitarios = $_POST["Programa de español para la obtencion de creditos universitarios"];
   $Programas_Especiales_Temporada_alta = $_POST["Programas_Especiales_Temporada_alta"];
   $Programas_Especiales_Temporada_baja = $_POST["Programas_Especiales_Temporada_baja"];
   $Español_y_Vino_Temporada_alta = $_POST["Español y Vino Temporada alta"];
   $Español_y_Vino_Temporada_baja = $_POST["Español y Vino Temporada baja"];
   $Español_y_fotografia_temporada_alta = $_POST["Español y fotografia temporada alta"];
   $Español_y_fotografia_temporada_baja = $_POST["Español y fotografia temporada baja"];
   $Español_y_Negocios_temporada_alta = $_POST["Español y Negocios temporada alta"];
   $Español_y_Negocios_temporada_baja = $_POST["Español y fotografia temporada baja"];
}

if(!empty($CursosIntensivosDeEspañol_Temporada_Alta) || !empty($CursosIntensivosDeEspañol_Temporada_Baja) || !empty($CursosRegularesDeEspañol_2_veces_por_semana) 
|| !empty($Programa_de_español_para_la_obtencion_de_creditos_universitarios) || !empty($Programas_Especiales_Temporada_alta) || !empty($Programas_Especiales_Temporada_baja) ||
!empty($Español_y_Vino_Temporada_alta) || !empty($Español_y_Vino_Temporada_baja) || !empty($Español_y_fotografia_temporada_alta) || !empty($Español_y_fotografia_temporada_baja) ||
!empty($Español_y_Negocios_temporada_alta) || !empty($Español_y_Negocios_temporada_baja)){

}


$nombre = $_POST["nombre"];

$email = $_POST["email"];

$asunto = "Consultas Calculador Precio";

$mensaje = "Estoy interesad@ en el curso: ".$cursos;

$Total = $_POST["total"];

$destinatario = $email; //Correo de usuario


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


$mail->From = $email; // Email desde donde env�o el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Consultas Costos Cursos Ingles</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>

<p>asunto: {$asunto}</p>

<p>mensaje: {$mensaje}</p>

<p>El costo total del curso es de: {$Total}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
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
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrio un error inesperado.";
}



?>

