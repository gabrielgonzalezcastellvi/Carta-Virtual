<h5>TUS PROMOCIONES</h5>

<div class="container">
    <a href="cargarPromocion.php" class="btn btn-lila"><i class="bi bi-plus-square"></i> Agregar promocion</a>
</div>
<div id="promociones" class="container table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Promocion</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col" colspan="2">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $consulta = "SELECT * FROM promociones";
            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['promo'] ?></td>
                    <td><?php echo $rows['descripcion'] ?></td>
                    <td><?php echo "$ " . $rows['precio'] ?></td>
                    <td><a class="link" href="<?php echo RUTA; ?>/wPanel/editarPromocion.php?id=<?php echo $rows['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#borrarPromo-<?php echo $rows['id'] ?>"></i>
                        <!-- modal para confirmar borrado -->
                        <div class="modal fade" id="borrarPromo-<?php echo $rows['id'] ?>" tabindex="-1" aria-labelledby="borrarPromoLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="borrarPromoLabel">Confirmar</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        La promo <b><?php echo $rows['promo'] ?></b> se eliminará de tu carta digital.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo RUTA; ?>/wPanel/eliminarPromocion.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger">Eliminar producto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

            <?php  } ?>
        </tbody>
    </table>
</div>