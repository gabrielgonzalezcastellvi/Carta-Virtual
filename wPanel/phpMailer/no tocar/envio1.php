<?php
require("class.phpmailer.php");
require("class.smtp.php");

if(empty($_POST["cantidad"]) || empty($_POST["alojamiento"]) || empty($_POST["programa"])){
 echo "Ocurrio un error, datos faltantes";
}else{
    $nombre = $_POST["nombre"];

    $email = $_POST["email"]; //Email de usuario
    
    $CantidadSemanas = $_POST["cantidad"];
    
    $Alojamiento = $_POST["alojamiento"];
    
    $Programa = $_POST["programa"];
    
    $asunto = "Consultas Programas Ingles";
    
    $mensaje = "Estoy interesad@ en el curso: ".$Programa;
      
    
    // Datos de la cuenta de correo utilizada para enviar via SMTP
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
    
    
    $mail->From = $smtpUsuario; // Email desde donde envio el correo.
    $mail->FromName = $nombre;
    $mail->AddAddress($smtpUsuario); // Esta es la direccion a donde enviamos los datos del formulario
    $mail->addCC($email);
    $mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
    $mensajeHtml = nl2br($mensaje);
    $mail->Body = "
    <html> 
    
    <body> 
    
    <h1>Consultas Costos Cursos Ingles</h1>
    <p>De: {$email}</p> 
    <p>Para: {$smtpUsuario}</p> 
    <p>Informacion enviada por el usuario de la web:</p>
    
    <p>Nombre: {$nombre}</p>
    
    <p>E-mail: {$email}</p>
    
    <p>Asunto: {$asunto}</p>
    
    <p>Mensaje: {$mensaje}</p>
    
    <p>Cantidad de semanas: {$CantidadSemanas}</p>
    
    <p>Alojamiento: {$Alojamiento}</p>
    
    <p>Programa elegido: {$Programa}</p>
    
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
       header ("Location: http://localhost/nuevo/index1.php");
    } else {
        echo "Ocurrio un error inesperado.";
    }
}

?>
