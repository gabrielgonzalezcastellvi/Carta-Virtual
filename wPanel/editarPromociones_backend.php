<?php
require '../config_db.php';
require '../functions.php';
session_start();


#$nombre = $_FILES['archivo']['name'];
#$guardar = $_FILES['archivo']['tmp_name'];
#if(!file_exists('imagenesCarta')){
# mkdir('imagenesPrmociones',0777,true);
# if(file_exists('imagenesPromociones')){
#    if(move_uploaded_file($guardar,'imagenesPromociones/'.$nombre)){
#echo"Muchas gracias por tu aporte a la comunidad de ComicAR!"; 
#    }else{
#       echo"Intenta subir tu imagen más tarde";
#   }
#}
#}else{
#   if(move_uploaded_file($guardar,'imagenesPromociones/'.$nombre)){

#           }elseif(empty($guardar && $nombre)){
#              echo "No se subio la imagen";
#               }else{
#                   echo "Se subio la imagen";
#               }
#}

$Id = $_POST['id'];
$Promo = $_POST['promo'];
$Descripcion = $_POST['descripcion'];
$Precio = $_POST['precio'];


$consulta = "SELECT * FROM promociones  WHERE id = '$Id'";

$result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

while ($rows = $result->fetch_assoc()) {



    #if(empty($_FILES['archivo']['name'])){
    #   $query = "UPDATE promociones SET promo = '$Promo', descripcion = '$Descripcion', precio = '$Precio' WHERE id = '$Id'";

    #}else{
    #    $query = "UPDATE promociones SET promo = '$Promo', descripcion = '$Descripcion', precio = '$Precio', thumb = '$nombre' WHERE id = '$Id'";
    #}
    #}
    $query = "UPDATE promociones SET promo = '$Promo', descripcion = '$Descripcion', precio = '$Precio' WHERE id = '$Id'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        header('Location:wPanel.php#promociones');
    } else {
        echo "<script>alert('No pudimos editar, por favor informa este problema'); window.location.href='ticketSoporte.php';</script>";
    }
}
