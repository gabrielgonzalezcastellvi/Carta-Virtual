<?php  require 'config_db.php' ?>

<section id="ubicacionBar">
    <div class="container alignCenter mapa">
    <?php
                $consulta = "SELECT mapalocal FROM datosempresa";
                $result = mysqli_query($conexion,$consulta) or die(mysqli_connect($connect));                
                while($rows = $result -> fetch_assoc()){
                echo $rows['mapalocal']?> <!--aqui la direccion traida de la DB-->
   <?php } ?>
</div>
</section>