<?php

require 'header-wpanel.php';
require '../config_db.php';
session_start();

$Password = $_SESSION['Password'];
?>
<section>

    <?php require 'encabezadoPanel.php'; ?>

    <div class="container contenedorgris alignLeft">

        <h3>Editar datos de usuario</h3>
        <?php $consulta = "SELECT * FROM usuario";
        $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
        while ($rows = $result->fetch_assoc()) {
        ?>
            <form id="NuevoUsuarioForm" class="login-input" action="editarUsuario_backend.php" method="POST" name="login">




                <div class="mb-3">
                    <label for="nombreUsuario" class="form-label">Nombre</label>
                    <input type="text" name="nombreUsuario" class="form-control" id="nombreUsuario" value='<?php echo $rows['nombre'] ?>' required>
                </div>
                <div class="mb-3">
                    <label for="apellidoUsuario" class="form-label">Apellido</label>
                    <input type="text" name="apellidoUsuario" class="form-control" id="apellidoUsuario" value='<?php echo $rows['apellido'] ?>' required>
                </div>
                <div class="mb-3">
                    <label for="emailUsuario" class="form-label">Email</label>
                    <input type="email" name="emailUsuario" class="form-control" id="emailUsuario" value='<?php echo $rows['email'] ?>' required>
                </div>
                <div class="mb-3">

                    <label for="EmprendimientoUsuario" class="form-label">Celular</label>
                    <input type="text" name="Celular" class="form-control" id="EmprendimientoUsuario" value='<?php echo $rows['celular'] ?>' required>
                </div>
                <div class="mb-3">

                    <label for="show-pass" class="form-label">Cambiar Contraseña <i class="bi bi-info-circle-fill" data-bs-toggle="modal" data-bs-target="#ayudaPassword"></i></label>
                    <input class="form-control" id="show-pass" type="password" name="password" value='<?php echo $Password ?>' required>
                    <!--ayuda contraseña-->
                    <div class="modal fade" id="ayudaPassword" tabindex="-1" aria-labelledby="ayudaPasswordLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="ayudaPasswordLabel">Importante</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    La contraseña debe contener al menos 12 caracteres alfanuméricos.¡Recordala para poder iniciar sesión!
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <input class="form-check-input" type="checkbox" value="Mostrar Contraseña" onclick="showPass()"> Mostrar
                    </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <input class="btn btn-lila" type="submit" value="Actualizar">
                    <a href="javascript:history.go(-1)" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
                </div>
            </form>
        <?php } ?>

    </div>

</section>
<?php require '../footer.php'; ?>