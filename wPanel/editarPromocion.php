<?php
require '../config_db.php';
require 'header-wpanel.php';

session_start();
?>
<section>
    <?php require 'encabezadoPanel.php'; ?>

    <div class="container contenedorgris alignLeft">

        <h3>editar promoción</h3>

        <div class="container">
            <?php $Id = $_GET['id'];
            $consulta = "SELECT * FROM promociones WHERE id = '$Id'";
            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
            while ($rows = $result->fetch_assoc()) {
            ?>
                <form id="" class="login-input" action="editarPromociones_backend.php" method="POST" enctype="multipart/form-data" name="login">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tituloPromo" class="form-label">Nombre de la promo</label>
                        <input type="text" name="promo" class="form-control" id="tituloPromo" value="<?php echo $rows['promo'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcionPromo" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcionPromo" value="<?php echo $rows['descripcion'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="precioPromo" class="form-label">Precio</label>
                        <input type="number" name="precio" class="form-control" id="precioPromo" value="<?php echo $rows['precio'] ?>" required>
                    </div>
                    <!--<div class="mb-3">
                    <h5>Imagen Ilustrativa</h5>
                    <p>Formato JPG / Peso máx. 15Mb</p>
                    <input type="file" name="archivo" onchange="previewImage(1)" id="uploadImage1">
                </div>-->

                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <input type="submit" value="Actualizar" class="btn btn-lila">
                        <a href="wPanel.php" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>

</section>
<?php require '../footer.php'; ?>