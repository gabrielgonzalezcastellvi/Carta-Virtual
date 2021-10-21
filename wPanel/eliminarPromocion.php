<?php
session_start();
require '../config_db.php';

$Id = $_GET['id'];

echo $Id;


$consulta = "DELETE FROM promociones WHERE id = '$Id'";

$result = mysqli_query($conexion,$consulta) or die(mysqli_connect($conexion));

if($result){

    Header('Location:wPanel.php#promociones');

}else{

    echo "Ocurrio un error al elinar el producto, comuniquese con el soporte tecnico";

}


?>