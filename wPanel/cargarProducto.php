<?php
#aqui el front de edicion de datos de usuario del wpanel
#se procesa en editarUsuario_backend.php 

require 'header-wpanel.php';
session_start();
?>
<section>
    <?php require 'encabezadoPanel.php'; ?>

    <div class="container contenedorgris alignLeft">

        <h3>agregar producto</h3>

        <div class="container">
            <form id="" class="login-input" action="cargarProductos_backend.php" method="POST" enctype="multipart/form-data" name="login">

                <div class="mb-3">
                    <select name="categoria" class="form-select" aria-label="Default select example" required>
                        <option selected>**Seleccioná la categoría**</option>
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
                    <label for="nombreNegocio" class="form-label">Producto</label>
                    <input type="text" name="producto" class="form-control" id="nombreNegocio" required>
                </div>
                <div class="mb-3">
                    <label for="nombreNegocio" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" id="nombreNegocio">
                </div>
                <div class="mb-3">
                    <label for="nombreNegocio" class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control" id="nombreNegocio" required>
                </div>
                <div class="mb-3">
                    <h5>Imagen Ilustrativa</h5>
                    <p>Formato JPG / Peso máx. 15Mb</p>
                    <input type="file" name="archivo" onchange="previewImage(1)" id="uploadImage1">
                </div>



                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <input type="submit" value="Agregar" class="btn btn-lila">
                    <a href="wPanel.php" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
                </div>

            </form>
        </div>
    </div>

</section>
<?php require '../footer.php'; ?>