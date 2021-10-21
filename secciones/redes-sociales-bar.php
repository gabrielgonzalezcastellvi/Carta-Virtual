<?php
require 'config_db.php';
?>

<section id="rrssCliente">

    <div class="container alignCenter">
        <h4>¡Seguinos en las redes sociales!</h4>
        <?php
 $consulta = "SELECT perfilfacebook, perfilinstagram FROM datosempresa";

 $result = mysqli_query($conexion,$consulta) or die(mysqli_connect($connect));
 
 while($rows = $result -> fetch_assoc()){
     ?> 
                <a class="rrssIcono" href="<?php echo $rows['perfilfacebook']?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                <a class="rrssIcono" href="https://instagram.com/<?php echo $rows['perfilinstagram']?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>

        <!--REDES SOCIALES: Info traida de la DB
        Facebook e Instagram. Si no tiene alguna (campo 'empty', entonces no aparece el icono de la red scial)-->
  <?php
 }
  ?>
    </div>
</section>