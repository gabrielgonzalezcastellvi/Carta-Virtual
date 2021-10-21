<?php  require 'config_db.php'?>


<section id="horariosBar">
    <div class="container alignCenter">
    <h4><i class="bi bi-alarm-fill"></i>Horarios de atención</h4>
    <?php
                $query = "SELECT * FROM datosempresa";

                $result = mysqli_query($conexion,$query) or die(mysqli_connect($conexion));
                
                while($rows = $result -> fetch_assoc()){
                    echo $rows['horario'];
                    ?>

            <!--ojo con los horarios, deberia poder elegir dia a dia los horarios-->

        <!--Traer info suministrada por el cliente, desde la DB-->
        <?php
                }
        ?>
    </div>
</section>