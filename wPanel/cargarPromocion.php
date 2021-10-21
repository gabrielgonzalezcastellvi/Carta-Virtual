<?php
require 'header-wpanel.php';
session_start();
?>
<section>
    <?php require 'encabezadoPanel.php'; ?>

    <div class="container contenedorgris alignLeft">

        <h3>nueva promoción</h3>

        <div class="container">
            <form id="" class="login-input" action="cargarPromocion_backend.php" method="POST" enctype="multipart/form-data" name="login">

                <div class="mb-3">
                    <label for="tituloPromo" class="form-label">Nombre de la promo</label>
                    <input type="text" name="promo" class="form-control" id="tituloPromo" required>
                </div>
                <div class="mb-3">
                    <label for="descripcionPromo" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" id="descripcionPromo" required>
                </div>
                <div class="mb-3">
                    <label for="precioPromo" class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control" id="precioPromo" required>
                </div>
                <!--<div class="mb-3">
                    <h5>Imagen Ilustrativa</h5>
                    <p>Formato JPG / Peso máx. 15Mb</p>
                    <input type="file" name="archivo" onchange="previewImage(1)" id="uploadImage1">
                </div>-->

                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <input type="submit" value="Agregar" class="btn btn-lila">
                    <a href="wPanel.php" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
                </div>
            </form>
        </div>
    </div>

</section>
<?php require '../footer.php'; ?>