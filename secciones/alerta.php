<?php require 'config_db.php';
$consulta = "SELECT * FROM datosempresa";

 $result = mysqli_query($conexion,$consulta) or die(mysqli_connect($conexion));
 while($rows = $result -> fetch_assoc()){
 ?>

        <section id="alerta">
            <div class="container mjeAlerta imgRedondeada">
                <p><i class="bi bi-megaphone"></i></p><br/>
                <p><?php echo $rows['mensajeAlerta'];} ?>
            </div>
        </section>