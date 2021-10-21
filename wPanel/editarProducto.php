<?php
require '../config_db.php';
require 'header-wpanel.php';

session_start();
?>
<section>
    <?php require 'encabezadoPanel.php'; ?>

    <div class="container contenedorgris alignLeft">

        <h3>editar producto</h3>

        <div class="container">
            <?php $Id = $_GET['id'];
            $consulta = "SELECT * FROM productos WHERE id = '$Id'";
            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
            while ($rows = $result->fetch_assoc()) {
            ?>
                <form id="" class="login-input" action="editarProducto_backend.php" method="POST" enctype="multipart/form-data" name="login">
                    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                    <div class="mb-3">
                        <select name="categoria" class="form-select" aria-label="Default select example" required>
                            <option value="<?php echo $rows['categoria']; ?>" selected><?php echo $rows['categoria']; ?></option>
                            <option value="desayunos">Desayuno</option>
                            <option value="cafeteria">Cafetería</option>
                            <option value="panificacion">Panificacion</option>
                            <option value="brunch">Brunch</option>
                            <option value="sin-alcohol">Bebidas sin alcohol</option>
                            <option value="cervezas">Cervezas</option>
                            <option value="vinos">Vinos</option>
                            <option value="tragos">Tragos</option>
                            <option value="entradas">Entradas</option>
                            <option value="ensaladas">Ensaladas</option>
                            <option value="sangucheria">Sanguchería</option>
                            <option value="postres">Postres</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="producto" class="form-label">Producto</label>
                        <input type="text" name="producto" value="<?php echo $rows['producto']; ?>" class="form-control" id="producto" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" value="<?php echo $rows['descripcion']; ?>" class="form-control" id="descripcion">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" name="precio" value="<?php echo $rows['precio']; ?>" class="form-control" id="precio" required>
                    </div>
                    <div class="mb-3">
                        <h5>Imagen Ilustrativa</h5>
                        <p>Formato JPG / Peso máx. 15Mb</p>
                        <input type="file" name="archivo" onchange="previewImage(1)" id="uploadImage1">
                        <!--<input type="hidden" name="logo-guardado" value="<?php echo $rows['thumb']; ?>">-->
                    </div>



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