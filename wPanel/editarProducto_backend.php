<?php
require '../config_db.php';
require 'header-wpanel.php';
require '../functions.php';
session_start();

$Id = $_POST['id'];
$Categoria = strtolower(limpiarDatos($_POST['categoria']));
$Producto = limpiarDatos($_POST['producto']);
$Descripcion = limpiarDatos($_POST['descripcion']);
$Precio = limpiarDatos($_POST['precio']);
$Precio = filter_var($Precio, FILTER_SANITIZE_NUMBER_INT);

$nombre = $_FILES['archivo']['name'];
$guardar = $_FILES['archivo']['tmp_name'];
if (!file_exists('imagenesCarta')) {
    mkdir('imagenesCarta', 0777, true);
    if (file_exists('imagenesCarta')) {
        if (move_uploaded_file($guardar, 'imagenesCarta/' . $nombre)) {
            echo "Subido!";
        } else {
            echo "Intenta subir tu imagen más tarde. Si no es posible, por favor reporta este problema";
        }
    }
} else {
    if (move_uploaded_file($guardar, 'imagenesCarta/' . $nombre)) {

        header("Location:wPanel.php#productos");
    } elseif (empty($guardar && $nombre)) {
        echo "No se subió la imagen";
    }
}



$consulta = "SELECT * FROM productos WHERE id = '$Id'";
$result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

while ($rows = $result->fetch_assoc()) {

    if (empty($_FILES['archivo']['name'])) {
        $query = "UPDATE productos SET categoria = '$Categoria', producto = '$Producto', descripcion = '$Descripcion', precio = '$Precio' WHERE id = '$Id'";
    } else {
        $query = "UPDATE productos SET categoria = '$Categoria', producto = '$Producto', descipcion = '$Descripcion', precio = '$Precio', thumb = '$nombre' WHERE id = '$Id'";
    }
}

$result = mysqli_query($conexion, $query);

if ($result) {

    header('Location:wPanel.php#productos');
} else {

    require 'soporte.php';
}
