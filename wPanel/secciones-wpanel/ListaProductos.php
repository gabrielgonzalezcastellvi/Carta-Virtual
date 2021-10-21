<h5>TU CARTA DIGITAL</h5>

<div class="container">
    <a href="<?php echo RUTA; ?>/wpanel/cargarProducto.php" class="btn btn-lila"><i class="bi bi-plus-square"></i> Agregar producto</a>
</div>
<div id="productos" class="container table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagen</th>
                <th scope="col">Categoría</th>
                <th scope="col">Producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col" colspan="2">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php

            //$consulta = "SELECT * FROM productos order by 'categoria' ASC";
            $consulta = "SELECT * FROM productos order by 'categoria' ASC";
            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($ListaProductos = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $ListaProductos['id'] ?></td>
                    <td><img class="imgThumbPanel" src="./imagenesCarta/<?php echo $ListaProductos['thumb'] ?>" alt="<?php echo 'Foto: ' . $ListaProductos['producto'] ?>"></td>
                    <td><?php echo $ListaProductos['categoria'] ?></td>
                    <td><?php echo $ListaProductos['producto'] ?></td>
                    <td><?php echo $ListaProductos['descripcion'] ?></td>
                    <td><?php echo "$ " . $ListaProductos['precio'] ?></td>
                    <td><a class="link" href="<?php echo RUTA; ?>/wPanel/editarProducto.php?id=<?php echo $ListaProductos['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>

                    <td>
                        <i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#borrarProd-<?php echo $ListaProductos['id'] ?>"></i>
                        <!-- modal para confirmar borrado -->
                        <div class="modal fade" id="borrarProd-<?php echo $ListaProductos['id'] ?>" tabindex="-1" aria-labelledby="borrarProdLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="borrarProdLabel">Confirmar</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        El producto <b><?php echo $ListaProductos['producto'] ?></b> se eliminará de tu carta digital.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo RUTA; ?>/wPanel/eliminarProducto.php?id=<?php echo $ListaProductos['id'] ?>" class="btn btn-danger">Eliminar producto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>



        </tbody>
    <?php  } ?>
    </table>
</div>