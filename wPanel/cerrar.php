<?php

session_start();
#require '../conexion.php';
#require '../config_db.php';
require '../ruta.php';

#$_SESSION = array();
session_destroy();
header('Location: '. RUTA.'/wPanel');
die();
?>