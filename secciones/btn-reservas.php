<?php 
require 'config_db.php'
?>

<section id="botonReserva">
    <div class="container alignCenter">
    <br>
    <?php
                $consulta = "SELECT telefonobar FROM datosempresa ";

                $result = mysqli_query($conexion,$consulta) or die(mysqli_connect($connect));
                
                while($rows = $result -> fetch_assoc()){
                    ?>     
              
  
              
              <a href="https://api.whatsapp.com/send?phone=+549<?php echo $rows['telefonobar'];?>&text=<?php echo 'Hola! Quisiera realizar una reserva';?>" target="_blank" rel="noopener noreferrer" class="btn btn-warning">Reservar Mesa</a>
        <?php
                }
        ?>
    </div>
</section>