<?php require 'config_db.php' ?>

<section id="promociones ">
    <div class="container alingLeft boxShadow imgRedondeada">
        <h4>PROMOCIONES</h4>
        <?php
        $promociones = "SELECT * FROM promociones";
        $result = mysqli_query($conexion, $promociones) or die(mysqli_connect($conexion));
        while ($rows = $result->fetch_assoc()) {
        ?>
            <div class="inline">
                <img src="<?php  RUTA . '/wPanel/imagenesPromociones/' . $rows['thumb']; ?>" alt="" class="img-fluid imgRedondeada imgThumbPanel">
                
                <p><?php echo '<i class="bi bi-arrow-right-circle-fill"></i> '.$rows['promo'] . ' | ' . $rows['descripcion'] . ' -----$' . $rows['precio']; ?></p>


            <?php } ?>
            </div>
    </div>
</section>