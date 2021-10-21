<?php
require 'header-wpanel.php';
?>
<section id="wPanelcontainer" class="">
    <div class="container alignCenter">
        <h1>wPanel</h1>
    </div>
    <div class="contenedorLogin alignLeft">
        <form id="NuevoUsuarioForm" class="login-input" action="nuevoUsuario.php" method="POST" name="login">
            <div class="mb-3">
                <label for="nombreUsuario" class="form-label">Nombre</label>
                <input type="text" name="nombreUsuario" class="form-control" id="nombreUsuario" placeholder="..." required>
            </div>
            <div class="mb-3">
                <label for="apellidoUsuario" class="form-label">Apellido</label>
                <input type="text" name="apellidoUsuario" class="form-control" id="apellidoUsuario" placeholder="..." required>
            </div>
            <div class="mb-3">
                <label for="emailUsuario" class="form-label">Email</label>
                <input type="email" name="emailUsuario" class="form-control" id="emailUsuario" placeholder="..." required>
            </div>
            <div class="mb-3">
                <label for="EmprendimientoUsuario" class="form-label">Nombre de tu emprendimiento</label>
                <input type="text" name="EmprendimientoUsuario" class="form-control" id="EmprendimientoUsuario" placeholder="..." required>
            </div>
            <div class="mb-3">
                <label for="show-pass" class="form-label">Creá una contraseña <i class="bi bi-info-circle-fill" data-bs-toggle="modal" data-bs-target="#ayudaPassword"></i></label>
                <input class="form-control" id="show-pass" type="password" name="password" placeholder="Contraseña" required>


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

            <hr>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="aceptacionCondicionesServicio" id="check">
                <label class="form-check-label" for="check">
                    He leído y acepto los términos y condiciones del servicio <i class="bi bi-info-circle-fill" data-bs-toggle="modal" data-bs-target="#condicionesServicio"></i>
                </label>

                <!--Ayuda terminos y condiciones-->
                <div class="modal fade" id="condicionesServicio" tabindex="-1" aria-labelledby="condicionesServicioLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="modal-title" id="condicionesServicioLabel"></span>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Los términos y condiciones del servicio brindado por Wizard fueron enviados por oportunamente, de acuerdo al pack contratado.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Crear usuario</button>

        </form>

    </div>
    </div>

    <div class="container">
        <p><a href="<?php echo RUTA; ?>/wPanel"><i class="bi bi-arrow-left-circle"></i> Iniciar sesión</a></p>

    </div>


</section>

<?php
require '../footer.php';
?>