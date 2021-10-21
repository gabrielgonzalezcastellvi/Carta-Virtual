<section id="bienvenidos">
    <?php require 'config_db.php';

    $consulta = "SELECT nombreempresa FROM datosempresa";
    $result = mysqli_query($conexion, $consulta) or die(mysqli_connect($connect));
    while ($rows = $result->fetch_assoc()) { ?>
        <div class="container alignCenter">
            <p>Bienvenidos a</p>
            <h1><?php echo $rows['nombreempresa'] ?></h1>
            <p>Disfrutá de todas nuestras ricas opciones</p>
        </div>
    <?php
    }
    ?>
</section>