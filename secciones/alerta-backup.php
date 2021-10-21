<?php require 'config_db.php';

$HoraActual =  date("H:i:s");

$consulta = "SELECT * FROM alertas";

$result = mysqli_query($conexion, $consulta) or die(mysqli_connect($connect));

while ($rows = $result->fetch_assoc()) {
    //&& $HoraActual >= $rows['hora_hasta']
    if ($HoraActual >= $rows['hora_desde'] && $HoraActual <= $rows['hora_hasta']) {  //Se muestra la alerta solamente cuando se cumple esa condición cuando no se cumple, no se muestra.
?>

        <section id="alerta">
            <div class="container mjeAlerta imgRedondeada">
                <p><i class="bi bi-megaphone"></i></p>


                <p><?php echo $rows['Mensaje'] . " Apartir de  las " . $rows['hora_desde'] . " hasta las " . $rows['hora_hasta'];
                }
            } ?>
            </div>
        </section>