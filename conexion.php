<?php
require 'config_db.php';

if ($conexion) {
   require 'header.php';
   require 'secciones/logo-cliente.php';
   require 'secciones/bienvenidos.php';
   require 'secciones/btn-reservas.php';
   require 'secciones/alerta.php';
   require 'secciones/carta-digital.php';
   require 'secciones/promociones.php';
   require 'secciones/opciones-pago.php';
   require 'secciones/horarios-bar.php';
   require 'secciones/redes-sociales-bar.php';
   require 'secciones/plataformas-pedidos.php';
   require 'secciones/ubicacion-bar.php';
   require 'footer.php';
} 
