<?php

require '../config_db.php';

$Email = $_POST['datos'];
$Celular = $_POST['datos'];
$Password = $_POST['password'];

if(strlen($Password) <= 8){

header('Location:recuperarContraseña.php');

}else{
  $PasswordEncrypt = md5(sha1($Password));


  $query = ("UPDATE usuario SET pass = '$PasswordEncrypt' WHERE email = '$Email'  OR  celular = '$Celular'");
      
  $result = mysqli_query($conexion,$query);
  
  if(!$result){
  
    require 'soporte.php';
  
  }else{
  
  
    $sql_query = "SELECT * FROM usuario WHERE email = '$Email' OR celular = '$Celular'";
  
    $result = mysqli_query($conexion,$sql_query) or die (mysqli_error($conexion));
  
    while($rows = $result->fetch_assoc()){   //Traigo el nombre del usuario
  
     $Nombre = $rows['nombre'];   
     $Email = $rows['email'];     
     $Celular = $rows['celular'];
      
        } 
  
    if(mysqli_num_rows($result) > 0){
  
      $Asunto = "Nueva Contraseña";
                
      require("phpMailer/class.phpmailer.php");
      require("phpMailer/class.smtp.php");
  
  
  $mensaje = "Esta es su nueva contraseña $Contraseña no la pierda ni comparta con nadie, jamás le pediremos este dato";
  
  $destinatario = $Email; //Correo de usuario
  
  
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
  
  
  $mail->From = $Email; // Email desde donde env�o el correo.
  $mail->FromName = "SOMOS WIZARD";
  $mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario
  
  $mail->Subject = "Cambio de Contraseña"; // Este es el titulo del email.
  $mensajeHtml = nl2br($mensaje);
  $mail->Body = "
  <html> 
  
  <body> 
  
  <h1>Su contraseña actual es: <strong>{$Password}</strong></h1>
  
  <p>Informacion sobre cambio de contraseña</p>
  
  <p>Asunto: Cambio de contraseña</p>
  
  <p>Nombre: {$Nombre}</p>
  
  <p>Email: {$Email}</p>
  
  <p>Celular: {$Celular}</p>
  
  <p>Contraseña: <strong>{$Password}</strong></p>
  
  $mensaje
  
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
      echo '<script type="text/javascript">
  alert("Felicitaciones,pudo restablecer su contraseña");
  window.location.href="index.php"; 
  </script>';
  } else {
      echo "Ocurrio un error inesperado.";
  }
  
    }
  
   echo'<script type text/javascript>
   window.location.href="index.php";
   </script>';
  
  }

}




