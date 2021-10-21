<?php require 'config_db.php' ?>

<section id="cartaDigital">
    <div class="container">
        <h4 class="txtDestacado">DESAYUNOS</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'desayunos' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaDesayunos = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaDesayunos['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaDesayunos['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaDesayunos['descripcion']); ?> ----$<?php echo nl2br($listaDesayunos['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">CAFETERIA</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'cafeteria' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaCafeteria = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaCafeteria['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaCafeteria['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaCafeteria['descripcion']); ?> ----$<?php echo nl2br($listaCafeteria['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>


    <div class="container">
        <h4 class="txtDestacado">Panificacion</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'panificacion' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaPanificacion = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaPanificacion['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaPanificacion['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaPanificacion['descripcion']); ?> ----$<?php echo nl2br($listaPanificacion['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Brunch y algo más...</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'brunch' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaBrunch = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaBrunch['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaBrunch['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaBrunch['descripcion']); ?> ----$<?php echo nl2br($listaBrunch['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Bebidas sin alcohol</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'sin-alcohol' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaSinAlcohol = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaSinAlcohol['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaSinAlcohol['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaSinAlcohol['descripcion']); ?> ----$<?php echo nl2br($listaSinAlcohol['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Cervezas</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'cervezas' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaCerveza = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaCerveza['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaCerveza['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaCerveza['descripcion']); ?> ----$<?php echo nl2br($listaCerveza['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Vinos</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'vinos' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaVinos = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaVinos['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaVinos['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaVinos['descripcion']); ?> ----$<?php echo nl2br($listaVinos['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Tragos</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'tragos' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaTragos = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaTragos['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaTragos['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaTragos['descripcion']); ?> ----$<?php echo nl2br($listaTragos['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Entradas</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'entradas' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaEntradas = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaEntradas['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaEntradas['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaEntradas['descripcion']); ?> ----$<?php echo nl2br($listaEntradas['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Ensaladas</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'ensaladas' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaEnsaladas = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaEnsaladas['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaEnsaladas['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaEnsaladas['descripcion']); ?> ----$<?php echo nl2br($listaEnsaladas['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">Sangucheria</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'sangucheria' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaSangucheria = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaSangucheria['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaSangucheria['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaSangucheria['descripcion']); ?> ----$<?php echo nl2br($listaSangucheria['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <h4 class="txtDestacado">POSTRES BAMBÚ</h4>
        <div class="row alingLeft">
            <?php

            $consulta = "SELECT * FROM `productos` WHERE `categoria` = 'postres' ORDER BY `precio` ASC ";

            $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($conexion));

            while ($listaPostres = $result->fetch_assoc()) {
            ?>

                <div class="col-sm-4">
                    <img class="img-fluid imgRedondeada imgCarta" src="./wPanel/ImagenesCarta/<?php echo $listaPostres['thumb']; ?> " alt="">
                </div>
                <div class="col-sm-8">
                    <h5><?php echo $listaPostres['producto'] ?></h5>
                    <!--Descripcion de los alimentos-->
                    <p><?php echo nl2br($listaPostres['descripcion']); ?> ----$<?php echo nl2br($listaPostres['precio']); ?></p>

                </div>
            <?php } ?>
        </div>
    </div>
</section>