<?php
require '../config_db.php';
session_start();
$Nombre = $_POST['nombreUsuario'];

$Apellido = $_POST['apellidoUsuario'];

$Email = $_POST['emailUsuario'];

$Celular = $_POST['Celular'];

$Password = $_POST['password'];

if(strlen($Password) <= 8){

    header('Location:editarUsuario.php');
    
    }else{
        $ID = $_SESSION['ID']; //ID para identificar que fila de las columnas se tiene que editar


$PasswordEncrypt = md5(sha1($Password));
    
$query = ("UPDATE usuario SET nombre = '$Nombre',apellido = '$Apellido', celular = '$Celular', email = '$Email', pass = '$PasswordEncrypt'");

$result = mysqli_query($conexion,$query);

$_SESSION['Nombre'] = $Nombre; //Le asigno a la variable global session el nuevo nombre del usuario
$_SESSION['Apellido'] = $Apellido;
$_SESSION['Password'] = $Password;
$_SESSION['Email'] = $Email;
Header('Location:wPanel.php');

if(!$result){

    require 'soporte.php';

}

//if($result){
//$Asunto = "Cambio de datos personales";
   
    //$Date = $_POST['date'];

    //require("phpMailer/class.phpmailer.php");
    //require("phpMailer/class.smtp.php");


//$destinatario = $Email; //Correo de usuario


// Datos de la cuenta de correo utilizada para enviar v�a SMTP
//$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
//$smtpUsuario = "gabrielubuntu320@gmail.com";  // Correo Instituto
//$smtpClave = "gabriel40068922";  // Mi contraseña


//$mail = new PHPMailer();
//$mail->IsSMTP();
//$mail->SMTPAuth = true;
//$mail->Port = 587; 
//$mail->IsHTML(true); 
//$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
//$mail->Host = $smtpHost; 
//$mail->Username = $smtpUsuario; 
//$mail->Password = $smtpClave;


//$mail->From = $Email; // Email desde donde env�o el correo.
//$mail->FromName = "SOMOSWIZARD";
//$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

//$mail->Subject = "Cambio de datos personales"; // Este es el titulo del email.
//$mensajeHtml = nl2br($mensaje);
//$mail->Body = "
//<html> 

//<body> 

//<h1>Cambio de Datos Personales</h1>

//<p>Informacion enviada por el usuario de la web:</p>

 //Fecha de Cambio $Date

//<p>Nombre: {$Nombre}</p>

//<p>Apellido: {$Apellido}</p>

//<p>Email: {$Email}</p>

//<p>Celular: {$Celular}</p>

//<p>Contraseña: {$Contraseña}</p>

//</body> 

//</html>

//<br />"; // Texto del email en formato HTML
//$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

//$mail->SMTPOptions = array(
    //'ssl' => array(
        //'verify_peer' => false,
        //'verify_peer_name' => false,
        //'allow_self_signed' => true
    //)
//);

//$estadoEnvio = $mail->Send(); 

//if($estadoEnvio){
    //echo '<script type="text/javascript">
//alert("Se le envio un correo con la informacion de los cambios");
//window.location.href="wPanel.php"; 
//</script>';
//} else {
    //echo "Ocurrio un error inesperado.";
//}


//}else{

    //echo"Ocurrio un error inesperado, reporte el problema al administrador";
    
//}

    }
