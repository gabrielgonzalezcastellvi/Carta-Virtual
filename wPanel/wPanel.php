<?php

require 'header-wpanel.php';
require '../config_db.php';
require '../functions.php';

session_start();

if (!isset($_SESSION['ID']) || !isset($_SESSION['Password'])) {
    header('Location:index.php');      //Acá redirijo al index cuando se encuentra vacia la sesion.
}

//para mostrar en el panel datos sensibles
$ID = $_SESSION['ID'];
$Password = $_SESSION['Password'];
?>
<section>
    <?php require 'encabezadoPanel.php';
    require 'secciones-wpanel/soporte.php'; ?>

    <div class="container ">
        <div class="row">
            <!--DATOS EMPRESA-->
            <?php require 'secciones-wpanel/datosUsuario.php'; ?>
            <!--DATOS USUARIO-->
            <?php require 'secciones-wpanel/datosEmpresa.php'; ?>
        </div>
    </div>
    <div class="container">
        <!--PRODUCTOS-->
        <?php require 'secciones-wpanel/ListaProductos.php'; ?>
    </div>
    <div class="container">
        <!--PROMOCIONES-->
        <?php require 'secciones-wpanel/ListaPromociones.php'; ?>
    </div>
</section>
<?php require '../footer.php'; ?>