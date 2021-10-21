<div class="col-sm-6">
                <div class="contenedorgris alingLeft">
                    <?php

                    $consulta = "SELECT * FROM datosempresa WHERE id = '$ID'";

                    $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <h5>Datos de <?php echo $rows['nombreempresa'] ?></h5>
                        <p>Esta es la información que ven los clientes en tu carta digital</p>
                        <div class="container">
                            <?php echo ('<img class="img-fluid" src="./Logo/' . $rows['logo'] . '" width="150px">') ?>
                        </div>
                        <ul class="ocultarVineta">
                            <li><i class="bi bi-shop"> </i>Nombre: <?php echo $rows['nombreempresa']; ?></li>
                            <li><i class="bi bi-whatsapp"> </i><?php echo $rows['telefonobar'] ?></li>
                            <li><i class="bi bi-geo-alt-fill"> </i>Google Maps: <?php echo "<br>" . $rows['mapalocal'] ;?></li>
                            <li><i class="bi bi-alarm-fill"> </i><?php echo "de " . $rows['horario']; ?></li>
                            <li><i class="bi bi-credit-card-fill"> </i><?php
                                                                        if ($rows['formaspagoefectivo'] == '1') {
                                                                            echo " Efectivo/ ";
                                                                        }
                                                                        if ($rows['formaspagodebito'] == '1') {
                                                                            echo " Debito/ ";
                                                                        }
                                                                        if ($rows['formaspagocredito'] == '1') {
                                                                            echo "  Credito/  ";
                                                                        }
                                                                        if ($rows['formaspagomepa'] == '1') {
                                                                            echo "  Mercado Pago  ";
                                                                        } ?></li>
                            <li><i class="bi bi-bag-check-fill"> </i>Plataformas de pedidos:<?php
                                                                                            if ($rows['pedidosya'] == '1') {
                                                                                                echo " Pedidos ya/ ";
                                                                                            }
                                                                                            if ($rows['rappi'] == '1') {
                                                                                                echo " Rappi/ ";
                                                                                            }
                                                                                            if ($rows['glovo'] == '1') {
                                                                                                echo "  Glovo/";
                                                                                            }
                                                                                            if ($rows['deliverypersonal'] == '1') {
                                                                                                echo " Delivery Propio ";
                                                                                            }
                                                                                            ?></li>

                            <li><i class="bi bi-facebook"> </i><?php echo $rows['perfilfacebook']; ?></li>
                            <li><i class="bi bi-instagram"> </i><?php echo "@" . $rows['perfilinstagram']; ?></li>
                            <li class="backVerde"><i class="bi bi-megaphone "> </i> Destacado:<i> <?php echo $rows['mensajeAlerta'] ?></i></li>
                        </ul>
                        <?php
                        if (empty($rows)) {
                            echo "<a href='cargarBar.php' class='btn btn-lila'><i class='bi bi-plus-square'></i> Cargar datos</a>";
                        } else {

                            echo "<a href='editarDatosBar.php' class='btn btn-lila'><i class='bi bi-pencil-square'></i> Editar datos</a>";
                        }
                        ?>


                </div>
            <?php
                    }
            ?>
            </div>