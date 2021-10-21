<?php require 'config_db.php'?>

<section id="logoCliente">
    <div class="container alignCenter">
    <?php
                $consulta = "SELECT logo FROM datosempresa";

                $result = mysqli_query($conexion,$consulta) or die(mysqli_connect($conexion));
                
                while($rows = $result -> fetch_assoc()){
                   
                print('<img class="imgCarta" src="./wPanel/Logo/'.$rows['logo'].'" alt = "'. $rows['logo'].'">');  
        
      
                } ?>
      
      <!--
            traer el nombre del restaurant para el ALT desde la DB
        Logo del bar: Info traida de la DB, subida x el cliente. 
        CUIDADO con las dimensiones!!! Sugiero colocar un tamaño máximo de archivo x el tema del peso y dimensiones.
        ENTONCES >> limitar peso del archivo y formato del archivo: solo jpg y png-->

    
       
    </div>
</section>