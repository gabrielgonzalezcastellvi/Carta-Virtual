<?php
#aqui el front de edicion de datos de usuario del wpanel
#se procesa en editarUsuario_backend.php 

require 'header-wpanel.php';
require '../config_db.php';
session_start();
?>
<section>
    <?php require 'encabezadoPanel.php'; ?>

    <div class="container contenedorgris alignLeft">
  
            <h3>Editar datos del negocio</h3>

        <?php

        $consulta = "SELECT * FROM datosempresa WHERE id = '7'";

        $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
        while ($rows = $result->fetch_assoc()) {
        ?>

            <form id="NuevoUsuarioForm" class="login-input" action="editarDatosBar_backend.php" method="POST" name="login" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombreNegocio" class="form-label">Nombre de fantasía de tu negocio</label>
                    <input type="text" name="nombreempresa" class="form-control" id="nombreNegocio" value='<?php echo $rows['nombreempresa'] ?>' required>
                </div>
                <div class="mb-3">
                    <label for="telefonobar" class="form-label">Teléfono del negocio </label>
                    <input type="text" name="telefonobar" class="form-control" id="telefonobar" value='<?php echo $rows['telefonobar'] ?>' placeholder="cod + numero (todo junto y sin espacios)" required>
                </div>
                <div class="mb-3">
                    <p>Mapa de Google <i class="bi bi-info-circle-fill" data-bs-toggle="modal" data-bs-target="#ayudaMaps"></i> </p>
                    <input type="text" name="mapalocal" class="form-control" id="googleMap" value='<?php echo $rows['mapalocal'] ?>' required>

                    <!-- ayuda sobre la IFRAME GoolgeMaps -->
                    <div class="modal fade" id="ayudaMaps" tabindex="-1" aria-labelledby="ayudaMapsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ayudaMapsLabel">¿Dónde obtengo el código?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                <p>1) Buscá tu ubicación en Google Maps</p>
                                    <img class="img-fluid" src="<?php echo RUTA;?>/imagenes/ayudaMaps1.jpg" alt="ayudaMaps1.jpg" style="max-height: 300px;">
                                    <p>2) Seleccioná 'Incorporar un mapa' y copiá el HTML para pegarlo en tu carta </p>
                                    <img class="img-fluid" src="<?php echo RUTA;?>/imagenes/ayudaMaps2.jpg" alt="ayudaMaps2.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="mb-3">
                    <h5>Horarios del negocio:</h5>

                    <!--<input name="horario" type="text" value='<?php $rows['horario'] ?>'>-->

                    <textarea class="form-control" name="horario" rows="3"><?php echo $rows['horario'] ?></textarea>
                </div>

                <div class="mb-3">
                    <h5>Formas de Pago</h5>
                    <div class="form-check">
                        <input name="efectivo" class="form-check-input" type="checkbox" value="1" id="efectivo" checked>
                        <label class="form-check-label" for="efectivo">
                            Efectivo
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="debito" class="form-check-input" type="checkbox" value="1" id="debito" checked>
                        <label class="form-check-label" for="debito">
                            Débito
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="credito" class="form-check-input" type="checkbox" value="1" id="credito" checked>
                        <label class="form-check-label" for="credito">
                            Crédito
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="mercadopago" class="form-check-input" type="checkbox" value="1" id="mercadopago" checked>
                        <label class="form-check-label" for="mercadopago">
                            Mercado Pago
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <h5>Plataformas de Pedido </h5>
                    <div class="form-check">
                        <input name="pedidosya" class="form-check-input" type="checkbox" value="1" id="PedidosYa" checked>
                        <label class="form-check-label" for="PedidosYa">
                            PedidosYa
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="rappi" class="form-check-input" type="checkbox" value="1" id="Rappi" checked>
                        <label class="form-check-label" for="Rappi">
                            Rappi
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="glovo" class="form-check-input" type="checkbox" value="1" id="Glovo" checked>
                        <label class="form-check-label" for="Glovo">
                            Glovo
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="deliverypropio" class="form-check-input" type="checkbox" value="1" id="Delivery" checked>
                        <label class="form-check-label" for="Delivery">
                            Delivery Propio
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Redes sociales</h5>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">URL facebook (<span style="color: orange" data-bs-toggle="modal" data-bs-target="#ayudaFacebook">¿Cómo obtengo la URL?</span>)</label>
                        <!--ayuda FB-->
                        <div class="modal fade" id="ayudaFacebook" tabindex="-1" aria-labelledby="ayudaFacebookLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ayudaFacebookLabel">Obtener usuario de Facebook</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Copiá tu usuario y pegalo</p>
                                        <img class="img-fluid" src="<?php echo RUTA; ?>/imagenes/ayuda_facebook.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <input name="linkfacebook" type="text" class="form-control" id="facebook" value='<?php echo $rows['perfilfacebook'] ?>'>
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Usuario instagram (<span style="color: orange" data-bs-toggle="modal" data-bs-target="#ayudaIg">¿Cuál es mi usuario?</span>)</label>
                        <!--ayuda IG-->
                        <div class="modal fade" id="ayudaIg" tabindex="-1" aria-labelledby="ayudaIgLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ayudaIgLabel">Usuario de Instagram</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>El nombre de usuario es un texto que no tiene espacios</p>
                                        <img class="img-fluid" src="<?php echo RUTA; ?>/imagenes/ayuda_instagram.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <input name="linkinstagram" type="text" class="form-control" id="instagram" value='<?php echo $rows['perfilinstagram'] ?>'>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Mensaje destacado</h5>
                    <textarea name="mensajealerta" class="form-control" rows="3"><?php echo $rows['mensajeAlerta'] ?></textarea>
                </div>
                <div class="mb-3">
                    <h5>Logo </h5>
                    <p>Formato JPG / Peso máx. 5 Mb</p>
                    <input type='hidden' value='<?php echo $rows['logo'] ?>'>
                    <input type="file" name="archivo" onchange="previewImage(1)" id="uploadImage1"></input>
                    </input>
                </div>

                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <input class="btn btn-lila" type="submit" value="Actualizar">
                    <a href="wPanel.php" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
                </div>
            </form>
        <?php
        }
        ?>
    </div>

</section>
<?php require '../footer.php'; ?>