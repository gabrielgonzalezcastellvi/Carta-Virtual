<?php
require '../config_db.php';
session_start();
$nombre = $_FILES['archivo']['name'];
$guardar = $_FILES['archivo']['tmp_name'];
if(!file_exists('Logo')){
 mkdir('Logo',0777,true);
 if(file_exists('Logo')){
    if(move_uploaded_file($guardar,'Logo/'.$nombre)){
echo"Muchas gracias por tu aporte a la comunidad de ComicAR!"; 
    }else{
        echo"Intenta subir tu comic mas tarde";
    }
 }
}else{
    if(move_uploaded_file($guardar,'Logo/'.$nombre)){
        echo"Muchas gracias por tu aporte a la comunidad de ComicAR!"; 
        header("Location:sesion2.html");
            }elseif(empty($guardar && $nombre)){
               echo "No se subio la imagen";
                }else{
                    echo "Se subio la imagen";
                }
}

$nombreEmpresa = $_POST['nombreempresa'];
$telefonobar = $_POST['telefonobar'];
$mapaGoogle = $_POST['mapalocal'];
$formasEfectivo = $_POST['efectivo'];
$formasDebito = $_POST['debito'];
$formasCredito = $_POST['credito'];
$formasMepa = $_POST['mercadopago'];
$pedidosya = $_POST['pedidosya'];
$rappi = $_POST['rappi'];
$glovo = $_POST['glovo'];
$deliveryPersonal = $_POST['deliverypropio'];
$linkFacebook = $_POST['linkfacebook'];
$linkInstagram = $_POST['linkinstagram'];
$mensajeAlerta = $_POST['mensajealerta'];
$horario = nl2br($_POST['horario']);



$ID = $_SESSION['ID'];

if(empty($_FILES['archivo']['name'])){    ///Acá indico que si no se selecciono imagen nueva me actualice todo menos el logo, permanece es que ya estaba.
    $query = "UPDATE datosempresa SET nombreempresa = '$nombreEmpresa',  telefonobar = '$telefonobar', horario = '$horario', mapalocal = '$mapaGoogle', formaspagoefectivo = '$formasEfectivo',
    formaspagocredito = '$formasCredito', formaspagodebito = '$formasDebito', 
    formaspagomepa = '$formasMepa', pedidosya = '$pedidosya', rappi = '$rappi', glovo = '$glovo',
    deliverypersonal = '$deliveryPersonal', perfilfacebook = '$linkFacebook', perfilinstagram = '$linkInstagram', mensajeAlerta = '$mensajeAlerta'";
}else{
    $query = "UPDATE datosempresa SET logo = '$nombre',  nombreempresa = '$nombreEmpresa', telefonobar = '$telefonobar', horario = '$horario', mapalocal = '$mapaGoogle', formaspagoefectivo = '$formasEfectivo',
formaspagocredito = '$formasCredito', formaspagodebito = '$formasDebito', 
formaspagomepa = '$formasMepa', pedidosya = '$pedidosya', rappi = '$rappi', glovo = '$glovo',
deliverypersonal = '$deliveryPersonal', perfilfacebook = '$linkFacebook', perfilinstagram = '$linkInstagram', mensajeAlerta = '$mensajeAlerta'";
}



$result = mysqli_query( $conexion, $query );

if ($result) {
    header('Location:wPanel.php');
} else {
    echo "<script>alert('No pudimos editar, por favor informa este problema'); window.location.href='ticketSoporte.php';</script>";
}

?>

